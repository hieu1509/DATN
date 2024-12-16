<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderHistory;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = OrderHistory::query()->with('order');
    
        // Lọc theo khoảng thời gian (từ ngày - đến ngày)
        if ($request->has('from_date') && $request->has('to_date')) {
            $query->whereBetween('created_at', [
                $request->from_date,
                $request->to_date,
            ]);
        }

        // Lọc theo trạng thái đơn hàng
        if ($request->has('filter_status') && $request->filter_status !== '' && $request->filter_status !== 'all') {
            $query->where('to_status', $request->filter_status);
        }
    
        // Tìm kiếm theo mã sản phẩm hoặc thông tin liên quan
        if ($request->has('search') && $request->search !== '') {
            $searchTerm = $request->search;
            $query->whereHas('order', function ($query) use ($searchTerm) {
                $query->where('code', 'LIKE', '%' . $searchTerm . '%')
                      ->orWhere('name', 'LIKE', '%' . $searchTerm . '%');
            });
        }
    
        $listDonHang = $query->orderByDesc('id')->get();
        $trangThaiDonHang = Order::TRANG_THAI_DON_HANG;
    
        return view('admin.order.index', compact('listDonHang', 'trangThaiDonHang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Lấy đơn hàng với các mối quan hệ cần thiết
        $order = Order::with([
            'orderDetails.productVariant.product',
            'shipping',
            'promotion',
            'orderHistories'
        ])->find($id);

        // Kiểm tra nếu đơn hàng không tồn tại
        if (!$order) {
            return redirect()->route('orders.index')->with('error', 'Đơn hàng không tồn tại.');
        }

        // Lấy lịch sử đơn hàng chính xác theo id đơn hàng
        $latestHistory = $order->orderHistories->where('order_id', $id)->first();

        // Nếu không tìm thấy lịch sử đơn hàng
        if (!$latestHistory) {
            return redirect()->route('orders.index')->with('error', 'Lịch sử đơn hàng không tồn tại.');
        }

        // Trạng thái đơn hàng
        $orderStatus = Order::TRANG_THAI_DON_HANG[$latestHistory->to_status] ?? 'Không xác định';

        // Trạng thái thanh toán
        $paymentStatus = Order::TRANG_THAI_THANH_TOAN[$latestHistory->from_status] ?? 'Không xác định';

        // Trả về view với thông tin đơn hàng và chi tiết
        return view('admin.order.show', compact('order', 'orderStatus', 'paymentStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $donHang = OrderHistory::query()->findOrFail($id);
        $currentTrangThai = $donHang->to_status;
        // dd($currentTrangThai);
        $newTrangThai = $request->input('order_status');
        $trangThais = array_keys(Order::TRANG_THAI_DON_HANG);
        // kiếm tra nếu đơn hàng đã bị hủy thì không được thay đổi trạng thái nữa
        if ($currentTrangThai == Order::HUY_HANG) {
            return redirect()->route('admins.orders.index')->with('error', 'đơn hàng đã bị hủy không thể thay đổi được trạng thái đơn hàng');
        }
        // kiểm tra nếu  trạng thái mới không được nằm sau trạng thái hiện tại
        if (array_search($newTrangThai, $trangThais) < array_search($currentTrangThai, $trangThais)) {
            return redirect()->route('admins.orders.index')->with('error', 'không thể cập nhật ngược lại trạng thái');
        }
        $donHang->to_status = $newTrangThai;
        $donHang->save();
        return redirect()->route('admins.orders.index')->with('success', 'cập nhật trạng thái thành công'.' '. $donHang->order->code);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


   
}
