<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $totalmoney = Order::sum('money_total');
        $totalBoughtProduct = OrderDetail::sum('quantity');
        $totalProduct = ProductVariant::sum('quantity');

        $top5Users = Order::select('orders.user_id', 'users.name', 'users.phone', 'users.address','users.email')
            ->selectRaw('SUM(order_details.quantity) as total')
            ->selectRaw('COUNT(order_details.product_variant_id) as SoLanMua')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id') // Kết hợp bảng order_details
            ->join('users', 'users.id', '=', 'orders.user_id') // Kết hợp bảng users
            ->groupBy('orders.user_id', 'users.name', 'users.phone', 'users.address', 'users.email') // Nhóm theo user_id và các trường của users
            ->orderBy('total', 'desc')
            ->take(5)
            ->get();
// dd($totalmoney);
            return view('admin.pages.dashboard', compact('totalmoney', 'totalBoughtProduct', 'totalProduct', 'top5Users'));
    }
}
