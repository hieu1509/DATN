<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout()
    {
        // Lấy giỏ hàng của người dùng
        $cart = Auth::user()->carts()->orderBy('id', 'desc')->first();
        if (!$cart) {
            return redirect()->route('cart.index')->with('error', 'Giỏ hàng của bạn trống.');
        }

        // Lấy thông tin chi tiết giỏ hàng
        $cartDetails = CartDetail::with(['productVariant.product'])
            ->where('carts_id', $cart->id)
            ->get();

        // Tính tổng giá trị đơn hàng
        $total_price = 0;
        foreach ($cartDetails as $detail) {
            $total_price += $detail->productVariant->listed_price * $detail->quantity;
        }

        return view('user.pages.checkout', compact('cartDetails', 'total_price'));
    }

    // Phương thức để xử lý đặt hàng
    public function placeOrder(Request $request)
    {
        // Xác thực dữ liệu nhập vào
        $request->validate([
            'billing_first_name' => 'required|string',
            'billing_last_name' => 'required|string',
            'billing_address_1' => 'required|string',
            'billing_city' => 'required|string',
            'billing_phone' => 'required|string',
            'order_comments' => 'required|string',
            'payment_method' => 'required|string',
        ]);
    
        // Lấy giỏ hàng của người dùng
        $cart = Auth::user()->carts()->orderBy('id', 'desc')->first();
        if (!$cart) {
            return redirect()->route('cart.index')->with('error', 'Giỏ hàng của bạn trống.');
        }
    
        // Tính tổng giá trị đơn hàng
        $cartDetails = CartDetail::with(['productVariant.product'])
            ->where('carts_id', $cart->id)
            ->get();
        $total_price = $cartDetails->sum(fn($detail) => $detail->productVariant->listed_price * $detail->quantity);
    
        // Lưu đơn hàng
        $order = new Order();
        $order->code = uniqid();
        $order->payment_type = $request->payment_method;
        $order->total_price = $total_price;
        $order->user_id = Auth::id();
        $order->name = $request->billing_first_name . ' ' . $request->billing_last_name;
        $order->address = $request->billing_address_1 . ', ' . $request->billing_city;
        $order->note = $request->order_comments;
        $order->phone = $request->billing_phone;
        $order->save();
    
        // Xử lý thanh toán
        if ($order->payment_type === 'cod') {
            return redirect()->route('order.success', $order->id);
        } elseif ($order->payment_type === 'vnpay') {
            $paymentUrl = $this->vnpay_payment($order);
            return redirect($paymentUrl);
        } elseif ($order->payment_type === 'momo') {
            $paymentResponse = $this->momo_payment($request, $order);
            if ($paymentResponse['success']) {
                return redirect($paymentResponse['payUrl']);
            } else {
                return redirect()->back()->with('error', 'Có lỗi xảy ra khi thanh toán: ' . $paymentResponse['message']);
            }
        }
    
        return redirect()->route('order.detail', $order->id);
    }
    

    public function show($id)
    {
        // Lấy thông tin giỏ hàng dựa trên ID đơn hàng
        $cartDetail = CartDetail::with(['productVariant.product', 'productVariant.chip', 'productVariant.ram', 'productVariant.storage'])
            ->where('order_id', $id) 
            ->get();

        $total = 0;

        // Tính tổng số tiền
        foreach ($cartDetail as $detail) {
            $total += $detail->productVariant->listed_price * $detail->quantity;
        }

        // Trả về view với các biến
        return view('user.pages.order_detail', compact('cartDetail', 'total'));
    }

    public function momo_payment(Request $request, $order)
    {
        // Lấy thông tin từ request
        $cardNumber = $request->input('card_number');
        $expiryDate = $request->input('expiry_date'); 
        $cvv = $request->input('cvv');
    
        // Các biến khác
        $endpoint = env('MOMO_ENDPOINT');
        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
    
        $orderInfo = "Thanh toán đơn hàng #" . $order->code;
        $amount = $order->total_price;
        $orderId = $order->code;
        $redirectUrl = route('order.success', $order->id);
        $ipnUrl = route('order.ipn');
        $extraData = "";
    
        $requestId = time() . "";
        $requestType = "payWithATM";
    
        $rawHash = "accessKey=$accessKey&amount=$amount&extraData=$extraData&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$requestId&requestType=$requestType";
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
    
        $data = [
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            'storeId' => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => (int)$amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature,
            'cardNumber' => $cardNumber,
            'expiryDate' => $expiryDate,
            'cvv' => $cvv,
        ];
    
        // Gửi yêu cầu và nhận phản hồi
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);
    
        // Ghi lại phản hồi để kiểm tra
        \Log::info('MoMo Response: ', $jsonResult);
    
        // Kiểm tra xem payUrl có tồn tại không
        if (isset($jsonResult['payUrl'])) {
            return [
                'success' => true, 
                'payUrl' => $jsonResult['payUrl'] 
            ];
        } elseif (isset($jsonResult['message'])) {
            return ['success' => false, 'message' => 'Lỗi từ MoMo: ' . $jsonResult['message']];
        } else {
            return ['success' => false, 'message' => 'Có lỗi xảy ra khi xử lý thanh toán.'];
        }
    }
    public function vnpay_payment($order)
{
    // Lấy các thông tin cần thiết từ .env
    $vnp_TmnCode = env('VNP_TMN_CODE'); 
    $vnp_HashSecret = env('VNP_HASH_SECRET');
    $vnp_Url = env('VNP_URL');
    $vnp_Returnurl = env('VNP_RETURN_URL');
    
    // Thiết lập các thông tin cần thiết cho VNPAY
    $vnp_TxnRef = $order->code;
    $vnp_OrderInfo = "Thanh toán đơn hàng #" . $order->code;
    $vnp_OrderType = "billpayment";
    $vnp_Amount = $order->total_price * 100; // Đơn vị của VNPAY là VND x100
    $vnp_Locale = 'vn';
    $vnp_BankCode = 'NCB';
    $vnp_IpAddr = request()->ip();

    $inputData = array(
        "vnp_Version" => "2.1.0",
        "vnp_TmnCode" => $vnp_TmnCode,
        "vnp_Amount" => $vnp_Amount,
        "vnp_Command" => "pay",
        "vnp_CreateDate" => date('YmdHis'),
        "vnp_CurrCode" => "VND",
        "vnp_IpAddr" => $vnp_IpAddr,
        "vnp_Locale" => $vnp_Locale,
        "vnp_OrderInfo" => $vnp_OrderInfo,
        "vnp_OrderType" => $vnp_OrderType,
        "vnp_ReturnUrl" => $vnp_Returnurl,
        "vnp_TxnRef" => $vnp_TxnRef,
    );

    // Sắp xếp dữ liệu theo key trước khi mã hóa
    ksort($inputData);
    $query = "";
    $i = 0;
    $hashdata = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashdata .= urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
        $query .= urlencode($key) . "=" . urlencode($value) . '&';
    }

    $vnp_Url = $vnp_Url . "?" . $query;
    if (isset($vnp_HashSecret)) {
        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
        $vnp_Url .= '&vnp_SecureHash=' . $vnpSecureHash;

    }

    return $vnp_Url;
}
public function vnpayReturn(Request $request)
{
    $vnp_HashSecret = env('VNP_HASH_SECRET');
    $vnp_SecureHash = $request->vnp_SecureHash;
    $inputData = [];
    
    foreach ($request->all() as $key => $value) {
        if (substr($key, 0, 4) == "vnp_") {
            $inputData[$key] = $value;
        }
    }
    
    unset($inputData['vnp_SecureHash']);
    ksort($inputData);
    $hashData = urldecode(http_build_query($inputData));
    $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
    
    if ($secureHash == $vnp_SecureHash) {
        $order = Order::where('code', $request->vnp_TxnRef)->first();
        if ($request->vnp_ResponseCode == '00') {
            $order->status = 'paid';
            $order->save();
            return redirect()->route('order.success', $order->id);
        }
        $order->status = 'failed';
        $order->save();
    }

    return redirect()->route('order.detail', $order->id)->with('error', 'Thanh toán không thành công.');
}

    
    

    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    
        $result = curl_exec($ch);
        
        // Kiểm tra lỗi cURL
        if ($result === false) {
            $error = curl_error($ch);
            \Log::error("CURL Error: $error");
            return json_encode(['status' => 'error', 'message' => 'CURL request failed']);
        }
    
        curl_close($ch);
        return $result;
    }
    

    public function success($orderId)
    {
        $order = Order::find($orderId);
    
        if (!$order) {
            return redirect()->route('order.index')->with('error', 'Đơn hàng không tồn tại.');
        }
    
        return view('user.pages.order_detail', compact('order'));
    }
    

    public function ipn(Request $request)
    {
        // Tìm kiếm đơn hàng theo mã
        $order = Order::where('code', $request->orderId)->first();
    
        // Kiểm tra xem đơn hàng có tồn tại không
        if (!$order) {
            \Log::error('Đơn hàng không tồn tại cho mã: ' . $request->orderId);
            return response()->json(['status' => 'error', 'message' => 'Đơn hàng không tồn tại'], 404);
        }
    
        // Cập nhật trạng thái đơn hàng dựa trên kết quả
        if ($request->resultCode == 0) { // Nếu thanh toán thành công
            $order->status = 'paid';
        } else { // Nếu thanh toán thất bại
            $order->status = 'failed';
        }
    
        $order->save();
    
        return response()->json(['status' => 'success']);
    }
    
}
