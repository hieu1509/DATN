<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function momo_payment(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        // Lấy các giá trị từ yêu cầu
        $partnerCode = $request->input("partnerCode", 'MOMOBKUN20180529');
        $accessKey = $request->input("accessKey", 'klm05TvNBzhg7h7j');
        $secretKey = $request->input("secretKey", 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa');
        $orderInfo = $request->input("orderInfo", "Thanh toán qua MoMo");
        $amount = $request->input("amount", "10000");
        $orderId = time() . "";
        $redirectUrl = $request->input("redirectUrl", "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b");
        $ipnUrl = $request->input("ipnUrl", "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b");
        $extraData = $request->input("extraData", "");

        $requestId = time() . "";
        $requestType = "payWithATM";

        // Tạo chuỗi hash để ký
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
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
        );

        // Gọi hàm execPostRequest
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);

        // Chuyển hướng đến URL thanh toán
        return redirect($jsonResult['payUrl']);
    }

    public function placeOrder(Request $request)
    {
        // Xác thực dữ liệu nhập vào
        $request->validate([
            'billing_first_name' => 'required|string',
            'billing_last_name' => 'required|string',
            'billing_address_1' => 'required|string',
            'billing_city' => 'required|string',
            'billing_phone' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        // Lấy danh sách categories
        $categories = Category::with('subCategories')->get();

        $order = new Order();
        $order->code = uniqid(); // Tạo mã đơn hàng ngẫu nhiên
        $order->status = Order::CHO_XAC_NHA; // Trạng thái đơn hàng ban đầu
        $order->payment_type = $request->payment_method; // Thay đổi tên biến cho đúng với tên input
        $order->total_price = $request->total; // Tổng tiền từ giỏ hàng
        $order->user_id = Auth::id(); // ID của người dùng
        $order->name = $request->billing_first_name . ' ' . $request->billing_last_name;
        $order->address = $request->billing_address_1 . ', ' . $request->billing_city;
        $order->phone = $request->billing_phone;

        // Lưu đơn hàng
        $order->save();

        // Kiểm tra phương thức thanh toán
        if ($order->payment_type === 'cod') {
            // Chuyển hướng đến trang thanh toán thành công
            return redirect()->route('order.success', $order->id);
        } elseif ($order->payment_type === 'momo') {
            // Gọi phương thức xử lý thanh toán Momo
            return $this->momo_payment($request);
        }

        // Chuyển hướng đến trang chi tiết đơn hàng nếu không phải COD hoặc Momo
        return redirect()->route('order.detail', $order->id)->with(compact('categories'));
    }
}
