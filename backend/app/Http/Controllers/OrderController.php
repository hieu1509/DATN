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
        $orderHistory->from_status = null;
        $orderHistory->to_status = $order->status;
        $orderHistory->note = 'Đơn hàng đã được tạo';
        $orderHistory->datetime = now();
        $orderHistory->save();

        // Xóa giỏ hàng sau khi đặt hàng thành công
        $cart->cartDetails()->delete(); // Xóa các chi tiết giỏ hàng
        $cart->delete(); // Xóa giỏ hàng

        // Xử lý thanh toán tương ứng với phương thức
        if ($order->payment_type === 'cod') {
            return redirect()->route('order.detail', $order->id);
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
        // Các biến khác
        $endpoint = env('MOMO_ENDPOINT');
        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');

        $orderInfo = "Thanh toán đơn hàng #" . $order->code;
        $amount = $order->total_price;
        $orderId = $order->code;
        $redirectUrl = route('order.detail', $order->id);
        $ipnUrl = route('order.ipn');
        $extraData = "";

        $requestId = time() . "";
        $requestType = "payWithATM";

        $rawHash = "accessKey=$accessKey&amount=$amount&extraData=$extraData&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$requestId&requestType=$requestType";
        $signature = hash_hmac('sha256', $rawHash, $secretKey);

        // Dữ liệu gửi đến MoMo
        $data = [
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'extraData' => $extraData,
            'signature' => $signature,
        ];

        // Gửi request
        $response = Http::post($endpoint, $data);

        // Trả về phản hồi
        return json_decode($response->getBody(), true);
    }
    public function vnpay_payment($order)
    {
        // Retrieve configuration values from the environment
        $vnp_TmnCode = env('VNP_TMN_CODE');
        $vnp_HashSecret = env('VNP_HASH_SECRET');
        $vnp_Url = env('VNP_URL'); // Should not include 'https://' here
        $vnp_ReturnUrl = env('VNP_RETURN_URL');
    
        $vnp_TxnRef = $order->code; // Ensure this is unique for each transaction
        $vnp_Amount = $order->total_price * 100; // VNPAY expects amount in VND x100
        $vnp_OrderInfo = "Thanh toán đơn hàng #" . $order->code;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
    
        // Prepare the input data
        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => $startTime,
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => "other", // Change if needed
            "vnp_ReturnUrl" => $vnp_ReturnUrl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $expire,
        ];
    
        // Sort the input data by key
        ksort($inputData);
        
        // Build the hash data and compute the secure hash
        $hashdata = urldecode(http_build_query($inputData));
        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
    
        // Construct the payment URL
        $vnp_Url .= "?" . http_build_query($inputData) . '&vnp_SecureHash=' . $vnpSecureHash;
    
        // Redirect to the payment URL
        return redirect($vnp_Url);
    }
    

    private function calculateDiscount($promoCode, $totalPrice)
    {
        $discount = 0;
        if ($promoCode) {
            $currentDate = now();

            // Kiểm tra khuyến mãi
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
                if ($promotion->discount_type === 'percentage') {
                    $discount = $totalPrice * ($promotion->discount / 100);
                } else {
                    $discount = $promotion->discount;
                }

                // Áp dụng giới hạn giảm giá
                $discount = min($discount, $totalPrice);
            }
        }

        return $discount;
    }
}
