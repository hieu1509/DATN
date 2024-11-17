<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderHistory;
use App\Models\Promotion;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;



class OrderController extends Controller
{
    public function checkout(Request $request)
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
            $productVariant = $detail->productVariant;
            $total_price += ($productVariant->sale_price ?? $productVariant->listed_price) * $detail->quantity;
        }

        // Mặc định phí ship là phí giao hàng tiêu chuẩn
        $defaultShipping = Shipping::where('name', 'Giao hàng tiêu chuẩn')->first();
        $shippingCost = $defaultShipping ? $defaultShipping->cost : 0;

        // Kiểm tra xem người dùng có chọn phí ship khác không
        if ($request->filled('shipping_id')) {
            $shipping = Shipping::find($request->shipping_id);
            if ($shipping) {
                $shippingCost = $shipping->cost; // Cập nhật phí ship nếu có chọn
            }
        }

        $discount = 0;

        // Kiểm tra mã giảm giá
        if ($request->filled('promo_code')) {
            $promoCode = $request->promo_code;
            $currentDate = now();

            // Ghi log giá trị quan trọng
            Log::info('Promo Code:', ['code' => $promoCode, 'total' => $total_price, 'current_date' => $currentDate]);

            // Kiểm tra khuyến mãi
            $promotion = Promotion::where('code', $promoCode)
                ->where('status', '1')
                ->whereDate('start_date', '<=', $currentDate)
                ->whereDate('end_date', '>=', $currentDate)
                ->where(function ($query) use ($total_price) {
                    $query->where('minimum_spend', '<=', $total_price)
                        ->orWhereNull('minimum_spend');
                })
                ->first();

            Log::info('Promotion Found:', ['promotion' => $promotion]);

            if ($promotion) {
                if ($promotion->discount_type === 'percentage') {
                    $discount = $total_price * ($promotion->discount / 100);
                } else {
                    $discount = $promotion->discount;
                }

                // Áp dụng giới hạn giảm giá
                $discount = min($discount, $total_price);
            } else {
                Log::warning('No valid promotion found for the code.');
            }
        }
        $user = Auth::user();
        // Tính tổng cộng
        $finalTotal = $total_price + $shippingCost - $discount;
        $shippings = Shipping::all();
        return view('user.pages.checkout', compact('cartDetails', 'total_price', 'shippingCost', 'discount', 'finalTotal', 'shippings', 'user'));
    }


public function placeOrder(Request $request)
{
    // Xác thực dữ liệu nhập vào
    $request->validate([
        'name' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',
        'note' => 'nullable|string',
        'payment_method' => 'required|string',
        'promo_code' => 'nullable|string',
        'shipping_id' => 'nullable|exists:shippings,id',
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
    $total_price = $cartDetails->sum(function ($detail) {
        return ($detail->productVariant->sale_price ?? $detail->productVariant->listed_price) * $detail->quantity;
    });

    // Mặc định phí ship
    $shippingCost = Shipping::where('name', 'Giao hàng tiêu chuẩn')->value('cost') ?? 0;

    // Kiểm tra phí ship từ request
    if ($request->filled('shipping_id')) {
        $shipping = Shipping::find($request->shipping_id);
        if ($shipping) {
            $shippingCost = $shipping->cost;
        }
    }

    // Tính toán mã giảm giá
    $discount = $this->calculateDiscount($request->promo_code, $total_price);

    // Tính tổng cộng
    $finalTotal = $total_price + $shippingCost - $discount;

    // Lưu đơn hàng
    $order = new Order();
    $order->code = uniqid();
    $order->payment_type = $request->payment_method;
    $order->total_price = $total_price;
    $order->user_id = Auth::id();
    $order->name = $request->name;
    $order->address = $request->address;
    $order->note = $request->note;
    $order->phone = $request->phone;
    $order->promotion_id = $request->promo_code ? Promotion::where('code', $request->promo_code)->first()->id : null;
    $order->shipping_id = $request->shipping_id;
    $order->money_total = $finalTotal;

    $order->save();

    // Lưu sản phẩm vào order_details
    foreach ($cartDetails as $detail) {
        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $order->id;
        $orderDetail->productvariant_id = $detail->productVariant->id;
        $orderDetail->quantity = $detail->quantity;
        $orderDetail->listed_price = $detail->productVariant->listed_price;
        $orderDetail->sale_price = $detail->productVariant->sale_price;
        $orderDetail->name = $detail->productVariant->product->name;
        $orderDetail->image = $detail->productVariant->product->image;
        $orderDetail->save();
    }

    // Ghi lịch sử đơn hàng
    $orderHistory = new OrderHistory();
    $orderHistory->order_id = $order->id;
    $orderHistory->user_id = Auth::id();
    $orderHistory->from_status = Order::CHO_XAC_NHA;
    $orderHistory->to_status = Order::CHUA_THANH_TOAN;
    $orderHistory->note = 'Đơn hàng đã được tạo';
    $orderHistory->datetime = now();
    $orderHistory->save();

    // Xóa giỏ hàng sau khi đặt hàng thành công
    $cart->cartDetails()->delete(); // Xóa các chi tiết giỏ hàng
    $cart->delete(); // Xóa giỏ hàng

    // Log thông tin thanh toán
    Log::info('Payment Method Selected:', ['payment_method' => $request->payment_method]);

    // Xử lý thanh toán tương ứng với phương thức
    switch ($order->payment_type) {
        case 'cod':
            // Nếu là COD, trả về trang chi tiết đơn hàng
            return redirect()->route('order.detail', $order->id);

        case 'momo':
            // Gọi phương thức thanh toán MoMo
            $paymentResponse = $this->momo_payment($request, $order);

            // Kiểm tra phản hồi
            if ($paymentResponse['success']) {
                // Nếu có link payUrl, redirect tới đó
                return redirect($paymentResponse['payUrl']);
            } else {
                // Nếu có lỗi, không lưu đơn hàng và quay lại với thông báo lỗi
                return redirect()->back()->with('error', 'Có lỗi xảy ra khi thanh toán MoMo: ' . $paymentResponse['message']);
            }

        case 'vnpay':
            // Gọi phương thức thanh toán VNPAY
            $paymentResponse = $this->vnpay_payment($request, $order);

            // Kiểm tra phản hồi
            if ($paymentResponse['success']) {
                // Nếu có link payUrl, redirect tới đó
                return redirect($paymentResponse['payUrl']);
            } else {
                // Nếu có lỗi, quay lại trang đơn hàng với thông báo lỗi
                return redirect()->back()->with('error', 'Có lỗi xảy ra khi thanh toán VNPAY: ' . $paymentResponse['message']);
            }

        default:
            // Nếu phương thức thanh toán không hợp lệ, quay lại với thông báo lỗi
            return redirect()->route('order.detail', $order->id)->with('error', 'Phương thức thanh toán không hợp lệ.');
    }
}

        public function show($id)
    {
        // Lấy đơn hàng cùng với chi tiết đơn hàng và thông tin sản phẩm
        $order = Order::with(['orderDetails.productVariant.product'])->find($id);

        // Kiểm tra xem đơn hàng có tồn tại không
        if (!$order) {
            return redirect()->route('orders.index')->with('error', 'Đơn hàng không tồn tại.');
        }

        // Trả về view với thông tin đơn hàng và chi tiết
        return view('user.pages.order_detail', compact('order'));
    }

    public function momo_payment(Request $request, $order)
    {
        // Get payment information from the request
        $cardNumber = $request->input('card_number');
        $expiryDate = $request->input('expiry_date'); 
        $cvv = $request->input('cvv');
    
        // Retrieve MoMo configuration from .env
        $endpoint = env('MOMO_ENDPOINT');
        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
    
        // Prepare order details
        $orderInfo = "Thanh toán đơn hàng #" . $order->code;
        $amount = $order->total_price;
        $orderId = $order->code;
        $redirectUrl = route('order.success', $order->id);
        $ipnUrl = route('order.ipn');
        $extraData = "";
        
        // Create request ID and type
        $requestId = time() . "";
        $requestType = "payWithATM";
    
        // Generate the raw hash and signature
        $rawHash = "accessKey=$accessKey&amount=$amount&extraData=$extraData&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$requestId&requestType=$requestType";
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
    
        // Prepare the data to send to MoMo
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
    
        // Send request and get response
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);
    
        // Log the response for debugging
        Log::info('MoMo Response: ', $jsonResult);
    
        // Handle the response from MoMo
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
    
    public function vnpay_payment($request, $order)
    {
        // VNPAY Configuration
        $vnp_TmnCode = "7E31XY46"; 
        $vnp_HashSecret = "JO04I54AIVQB65LX3BDM4SQ95Y6JEZFH"; 
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('order.success', $order->id);
        $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
        $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
        
        // Prepare order information for VNPAY
        $vnp_TxnRef = $order->code;
        $vnp_OrderInfo = "Thanh toán đơn hàng #" . $order->code;
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $order->total_price * 100 ; // Convert to VND x100
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB'; // Replace with actual bank code if needed
        $vnp_IpAddr = $request->ip(); // Use $request object to get IP
        
        // Prepare input data for VNPAY
        $inputData = [
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
        ];
        
        // If BankCode is set, add it to the inputData
        if (!empty($vnp_BankCode)) {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        
        // Log input data for debugging
        Log::info('VNPAY Payment Input Data:', $inputData);
        
        // Sort input data and create the query string for VNPAY
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
    
        // Final VNPAY URL with query
        $vnp_Url .= "?" . rtrim($query, '&');
        
        // Generate VNPAY secure hash and append to the URL
        if (!empty($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);  
            $vnp_Url .= '&vnp_SecureHash=' . $vnpSecureHash;
        }
    
        // Prepare the response array
        $returnData = [
            'success' => true, // You can customize this based on the actual response
            'message' => 'Payment initiated successfully',
            'payUrl' => $vnp_Url,
        ];
    
        return $returnData; // Return the array, not a JsonResponse
    }
    
    
    
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    
        $result = curl_exec($ch);
    
        // Check for cURL errors
        if ($result === false) {
            Log::error("CURL Error: " . curl_error($ch));
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
        $order = Order::where('code', $request->orderId)->first();
        
        if (!$order) {
            Log::error('Đơn hàng không tồn tại cho mã: ' . $request->orderId);
            return response()->json(['status' => 'error', 'message' => 'Đơn hàng không tồn tại'], 404);
        }
    
        $order->status = $request->resultCode == 0 ? 'paid' : 'failed';
        $order->save();
    
        return response()->json(['status' => 'success']);
    }
    
    private function calculateDiscount($promoCode, $totalPrice)
    {
        $discount = 0;
        if ($promoCode) {
            $currentDate = now();
    
            // Check for promotions
            $promotion = Promotion::where('code', $promoCode)
                ->where('status', '1')
                ->whereDate('start_date', '<=', $currentDate)
                ->whereDate('end_date', '>=', $currentDate)
                ->where(function ($query) use ($totalPrice) {
                    $query->where('minimum_spend', '<=', $totalPrice)
                          ->orWhereNull('minimum_spend');
                })
                ->first();
    
            if ($promotion) {
                $discount = $promotion->discount_value; // Assuming discount_value is a percentage
            }
        }
        
        return $discount;
    }
}    