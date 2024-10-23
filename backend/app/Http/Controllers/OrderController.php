<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Phương thức để xử lý đặt hàng
    public function placeOrder(Request $request)
    {
        // dd($request->all());
        // Xác thực dữ liệu nhập vào
        $request->validate([
            'billing_first_name' => 'required|string',
            'billing_last_name' => 'required|string',
            'billing_address_1' => 'required|string',
            'billing_city' => 'required|string',
            'billing_phone' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        // Lưu đơn hàng
        $order = new Order();
        $order->code = uniqid(); // Tạo mã đơn hàng ngẫu nhiên
        $order->status = 'Chờ xác nhận'; // Đơn hàng đang chờ xác nhận
        $order->payment_type = $request->payment_method;
        $order->total_price = $request->total_price; // Giá trị từ giỏ hàng
        $order->user_id = Auth::id();
        $order->name = $request->billing_first_name . ' ' . $request->billing_last_name;
        $order->address = $request->billing_address_1 . ', ' . $request->billing_city;
        $order->phone = $request->billing_phone;

        $order->save();

        // Kiểm tra phương thức thanh toán
        if ($order->payment_type === 'cod') {
            // Xử lý thanh toán COD, chuyển hướng đến trang thành công
            return redirect()->route('order.success', $order->id);
        } elseif ($order->payment_type === 'momo') {
            // Xử lý thanh toán Momo
            return $this->momo_payment($request, $order);
        }

        // Chuyển hướng đến trang chi tiết đơn hàng nếu phương thức thanh toán không được hỗ trợ
        return redirect()->route('order.detail', $order->id);
    }
    public function show($id)
    {
        // Lấy thông tin giỏ hàng dựa trên ID đơn hàng
        $cartDetail = CartDetail::with(['productVariant.product', 'productVariant.chip', 'productVariant.ram', 'productVariant.storage'])
            ->where('order_id', $id) // điều kiện để lấy đơn hàng
            ->get();

        $total = 0;

        // Tính tổng số tiền
        foreach ($cartDetail as $detail) {
            $total += $detail->productVariant->listed_price * $detail->quantity;
        }

        // Trả về view với các biến
        return view('user.pages.order_detail', compact('cartDetail', 'total'));
    }
    // Phương thức xử lý thanh toán qua MoMo
    public function momo_payment(Request $request, $order)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán đơn hàng #" . $order->code;
        $amount = $order->total_price;
        $orderId = $order->code; // Sử dụng mã đơn hàng
        $redirectUrl = route('order.success', $order->id); // Redirect về trang thành công
        $ipnUrl = route('order.ipn'); // Webhook IPN
        $extraData = "";

        $requestId = time() . "";
        $requestType = "captureWallet";
        $rawHash = "accessKey=$accessKey&amount=$amount&extraData=$extraData&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$requestId&requestType=$requestType";
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = [
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            'storeId' => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        ];

        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);

        return redirect($jsonResult['payUrl']);
    }

    // Hàm POST request tới MoMo
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    // Phương thức để xử lý khi thanh toán thành công
    public function success($orderId)
    {
        $order = Order::find($orderId);
        return view('user.pages.order_detail', compact('order'));
    }

    // Phương thức xử lý IPN của MoMo (nếu cần)
    public function ipn(Request $request)
    {
        // Xử lý phản hồi từ MoMo (IPN)
        // Tùy thuộc vào phản hồi từ MoMo để cập nhật trạng thái đơn hàng.
        $order = Order::where('code', $request->orderId)->first();

        if ($request->resultCode == 0) { // Nếu thanh toán thành công
            $order->status = 'paid';
        } else { // Nếu thanh toán thất bại
            $order->status = 'failed';
        }

        $order->save();

        return response()->json(['status' => 'success']);
    }
}
