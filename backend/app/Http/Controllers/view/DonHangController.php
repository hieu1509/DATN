<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonHangController extends Controller
{
  //
  public function index()
  {

    $donhang = Auth::user()->OrderHistory()->with('order')->orderBy('id', 'desc')->paginate(5);
    $TrangThaiDonHang = Order::TRANG_THAI_DON_HANG;
    $TrangThaiThanhToan = Order::TRANG_THAI_THANH_TOAN;
    $typeChoXacNha = Order::CHO_XAC_NHA;
    $typeDaXacNhan = Order::DA_XAC_NHA;
    $typeDangChuanBi = Order::DANG_CHUAN_BI;
    $typeDangVanChuyen = Order::DANG_VAN_CHUYEN;

    // dd($donhang);
    //   dd($TrangThaiThanhToan);
    // dd( $TrangThaiDonHang['cho_xac_nhan']);
    return view('user.order.Order', compact('donhang', 'TrangThaiDonHang', 'typeChoXacNha', 'typeDaXacNhan', 'typeDangChuanBi', 'typeDangVanChuyen', 'TrangThaiThanhToan'));
  }
  public function editOrder(Request $request, String $id)
  {
    // dd($request->all());
    $TrangThaiDonHang = Order::TRANG_THAI_DON_HANG;
    $typeDangVanChuyen = Order::DANG_VAN_CHUYEN;
    $orderHistory = OrderHistory::findOrFail($id);
//     $huyHang = $request->from_status;
// // dd($huyHang);
    $param = $request->all();
    if ($request->from_status=="huy_hang") {
      if($orderHistory->from_status == $typeDangVanChuyen){
        return redirect()->back()->with('error', 'Hủy thất bại');
      }
      $check =  $orderHistory->update($param);
      return redirect()->back()->with('success', 'cập nhật thành công');
    }else{
      $check =  $orderHistory->update($param);
      return redirect()->back()->with('success', 'cập nhật thành công');
    }
    // $check =  $orderHistory->update($param);
    // if ($check) {

    //   return redirect()->back()->with('success', 'cập nhật thành công');
    // } else {
    //   return redirect()->back()->with('success', 'cập nhật không thành công');
    // }
  }
  public function myordetail(string $id) {}
}
