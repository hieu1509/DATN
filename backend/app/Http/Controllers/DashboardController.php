<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderHistory;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\SubCategory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $totalmoney = Order::sum('money_total');

        $totalBoughtProduct = OrderDetail::sum('quantity');

        $donhangdahuy = OrderHistory::query()->where('to_status', Order::HUY_HANG)->count();

        $donhangdangchoxuly = OrderHistory::query()->where('to_status', Order::CHO_XAC_NHA)->count();

        $tongdonhang = OrderHistory::count();

        $phantramdahuy = number_format(($donhangdahuy / $tongdonhang) * 100, 2);

        $phantramdangchoxuly = number_format(($donhangdangchoxuly / $tongdonhang) * 100, 2);

        // echo "Phần trăm đơn hàng đã hủy: $phantramdahuy%";
        // echo "Phần trăm đơn hàng đang chờ xử lý: $phantramdangchoxuly%";

        // // dd($phantramdangchoxuly);
        $totalProduct = ProductVariant::sum('quantity');
        // dd($totalBoughtProduct);
        // c1:
        $top10Category = SubCategory::select('sub_categories.name', 'sub_categories.id', DB::raw('SUM(Order_details.quantity) as total'))
            // từ bảng subcategory lấy name và id và thực hiện tổng sản phẩm gọi thành total 
            ->join('products', 'sub_categories.id', '=', 'products.sub_category_id')
            // ở đây là nối các bảng 
            ->join('product_variants', 'products.id', '=', 'product_variants.product_id')
            // ở đây là nối các bảng 
            ->join('order_details', 'product_variants.id', '=', 'order_details.productvariant_id')
            // ở đây là nối các bảng 
            ->groupBy('sub_categories.name', 'sub_categories.id')
            // nhóm nó theo name và id  
            ->orderBy('total', 'desc')
            // sắn xếp theo tổng nhiều nhất
            ->limit(10)
            // giời hạn là 10 
            // ->toRawSql();
            // để hiện sql ra check
            ->get();
        // dd($top10Category);
        // đây là nối 4 bảng vào với nhau để có thể lấy được top 10 danh mục sản phẩm bán được nhiều nhất 

        $top5LastestComment = Review::query()
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        $top5productbought = Product::with('variants.orderDetail')
            // gọi thế này thì trong mảng product sẽ có cả productDetail và order (nếu không nhầm)
            ->select('products.id', 'products.name', 'products.image')
            // lấy những cái này
            ->get()
            // map là để nó trả ra từng phần tử (thằng này giống foreach)
            ->map(function ($product) {
                // flatmap sau khi trả ra thì từ cái mảng map đó sẽ thêm dữ liệu total (cái mảng map sẽ thêm những dữ liệu mà flatmap tạo ra)
                $total = $product->variants->flatMap(function ($productDetail) {
                    // pluck là nó sẽ trả về 1 mảng tử order_detail xem có dữ liệu không (trả về 1 mảng gồm tất cả những trường đó)
                    return $productDetail->orderDetail->pluck('quantity');
                })->sum();
                // tính tổng của sản phẩm trong chi tiết sản phẩm
                $stock = $product->variants->sum('quantity');
                // Trả về một mảng với thông tin sản phẩm và tổng số lượng
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'image' => $product->image,
                    'total' => $total,
                    'stock' => $stock,
                ];
            })
            ->sortByDesc('total')
            ->take(5); // Lấy 5 sản phẩm hàng đầu
        // dd($top5productbought);

        $top5Users = Order::select('orders.user_id', 'users.name', 'users.phone', 'users.address', 'users.email')
            ->selectRaw('SUM(order_details.quantity) as total')
            ->selectRaw('COUNT(order_details.productvariant_id) as SoLanMua')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id') // Kết hợp bảng order_details
            ->join('users', 'users.id', '=', 'orders.user_id') // Kết hợp bảng users
            ->whereMonth('orders.created_at', Carbon::now()->month)
            ->groupBy('orders.user_id', 'users.name', 'users.phone', 'users.address', 'users.email') // Nhóm theo user_id và các trường của users
            ->orderBy('total', 'desc')
            ->take(5)
            ->get();
        // dd($top5Users);

        // thống kê theo năm 
        $currentYear = Carbon::now()->year;
        $data = OrderDetail::selectRaw('MONTH(created_at) as month, SUM(quantity) as total_sales')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        $monthlySales = array_fill(0, 12, 0);
        // array_fill là tạo ra 1 mảng gồm 12 phần tử vs giá trị bằng 0
        foreach ($data as $item) {
            $monthlySales[$item->month - 1] = $item->total_sales;
        }
        $percentages = [];

        // Lấy dữ liệu doanh số hàng năm
        $dataYear = OrderDetail::selectRaw('YEAR(created_at) as year, SUM(quantity) as total_sales')
            ->whereBetween('created_at', [now()->startOfYear()->subYears(4), now()->endOfYear()])
            ->groupBy('year')
            ->orderBy('year', 'asc')
            ->get();

        // Khởi tạo mảng doanh số cho các năm từ 2020 đến 2024
        $YearSales = [
            2020 => 0,
            2021 => 0,
            2022 => 0,
            2023 => 0,
            2024 => 0,
        ];

        // Lưu doanh số vào mảng YearSales dựa trên dữ liệu từ cơ sở dữ liệu
        foreach ($dataYear as $dataYears) {
            $YearSales[$dataYears->year] = $dataYears->total_sales;
        }

        // Chuyển mảng sang dạng mảng chỉ số để dùng cho biểu đồ
        $YearSales = array_values($YearSales);
        // dd($percentagesYear);

        // Thống kê biểu đồ tròn theo danh mục sản phẩm đã bán 
        // lấy dữ liệu từ cái trên xuống nhưng bỏ cái limit đi để không bị giowia hạn
        $PieChart = SubCategory::select('sub_categories.name', 'sub_categories.id', DB::raw('SUM(Order_details.quantity) as total'))
            // từ bảng subcategory lấy name và id và thực hiện tổng sản phẩm gọi thành total 
            ->join('products', 'sub_categories.id', '=', 'products.sub_category_id')
            // ở đây là nối các bảng 
            ->join('product_variants', 'products.id', '=', 'product_variants.product_id')
            // ở đây là nối các bảng 
            ->join('order_details', 'product_variants.id', '=', 'order_details.productvariant_id')
            // ở đây là nối các bảng 
            ->groupBy('sub_categories.name', 'sub_categories.id')
            // nhóm nó theo name và id  
            ->orderBy('total', 'desc')
            ->get();

        foreach ($PieChart as $PieCharts) {
            $percen =  ($PieCharts->total / $totalBoughtProduct) * 100;
            $percentages[] = [
                'name' => $PieCharts->name,
                'total' => $PieCharts->total,
                'percent' => $percen
            ];
        }
        // dd($PieChart);
        // Lưu mảng tổng sản phẩm vào biến cho JavaScript
        $totalSales = array_column($percentages, 'percent'); // Lấy ra mảng tổng sản phẩm
        // dd($totalSales);
        return view('admin.pages.dashboard', compact('totalmoney', 'totalBoughtProduct', 'donhangdahuy', 'donhangdangchoxuly', 'tongdonhang', 'phantramdahuy', 'phantramdangchoxuly', 'totalProduct', 'top10Category', 'top5LastestComment', 'top5productbought', 'top5Users', 'monthlySales', 'percentages', 'totalSales', 'YearSales'));
    }
}
