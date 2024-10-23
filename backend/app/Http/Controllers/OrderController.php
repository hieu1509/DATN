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

        // Lấy thông tin chi tiết giỏ hàng
        $cartDetails = CartDetail::with(['productVariant.product'])
            ->where('carts_id', $cart->id)
            ->get();

        // Tính tổng giá trị đơn hàng
        $total_price = 0;
        foreach ($cartDetails as $detail) {
            $total_price += $detail->productVariant->listed_price * $detail->quantity;
        }

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

        // Xử lý thanh toán tương ứng với phương thức
        if ($order->payment_type === 'cod') {
            $order->save(); 
            return redirect()->route('order.success', $order->id);
        } elseif ($order->payment_type === 'momo') {
            // Gọi phương thức thanh toán MoMo
            $paymentResponse = $this->momo_payment($request, $order);
            
            // Kiểm tra phản hồi
            if ($paymentResponse['success']) {
                // Nếu có link payUrl, redirect tới đó
                return redirect($paymentResponse['payUrl']);
            } else {
                // Nếu có lỗi, không lưu đơn hàng và quay lại với thông báo lỗi
                return redirect()->back()->with('error', 'Có lỗi xảy ra khi thanh toán: ' . $paymentResponse['message']);
            }
        }
    
        // Mặc định redirect đến trang chi tiết đơn hàng
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
