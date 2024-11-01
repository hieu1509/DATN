<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonHangController extends Controller
{
    //
    public function index(){
       
            $donhang = Auth::user()->OrderHistory()->with('order')->orderBy('id','desc')->paginate(5);
            $TrangThaiDonHang = Order::TRANG_THAI_DON_HANG;
            $TrangThaiThanhToan = Order::TRANG_THAI_THANH_TOAN;
            // dd($donhang);
        //   dd($TrangThaiThanhToan);
            // dd( $TrangThaiDonHang['cho_xac_nhan']);
            return view('user.order.Order',compact('donhang','TrangThaiDonHang','TrangThaiThanhToan'));
            
       }
    }

