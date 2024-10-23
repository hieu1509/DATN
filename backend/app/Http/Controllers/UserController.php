<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Lấy danh sách người dùng
        $users = User::all();
        return view('admin.pages.users.index', compact('users'));
    }

    public function edit($id)
    {
        // Hiển thị form chỉnh sửa người dùng
    }

    public function update(Request $request, $id)
    {
        // Xác thực và cập nhật thông tin người dùng
    }

    public function destroy($id)
    {
        // Xóa người dùng

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\subCategory;
use App\Models\Chip;
use App\Models\Ram;
use App\Models\Storage;


class UserController extends Controller
{
    public function menu(){
        $categories = Category::with('subCategories')->get();

        return view('user.partials.menu', compact('categories'));
    }
    public function index()
    {
        $latestProducts = Product::with(['subCategory', 'variants'])
            ->where('is_show_home', 1)
            ->latest('created_at')
            ->take(12)
            ->get();

        $hotProducts = Product::with(['subCategory', 'variants'])
            ->where('is_hot', 1)
            ->take(12)
            ->get();

        $saleProducts = Product::with(['subCategory', 'variants'])
            ->where('is_sale', 1)
            ->take(12)
            ->get();

        return view('user.pages.home', compact('latestProducts', 'hotProducts', 'saleProducts'));
    }

    public function showSubCategories(SubCategory $subCategory)
    {
        if ($subCategory) {
            $products = Product::with(['subCategory', 'variants'])
                ->where('sub_category_id', $subCategory->id)
                ->where('is_show_home', 1)
                ->paginate(20);
        } else {
            $products = Product::with(['subCategory', 'variants'])->paginate(20);
        }

        // Lấy dữ liệu cần thiết cho bộ lọc
        $sub_category = SubCategory::pluck('name', 'id')->all();
        $chips = Chip::pluck('name', 'id')->all();
        $rams = Ram::pluck('name', 'id')->all();
        $storages = Storage::pluck('name', 'id')->all();

        // Trả về view với tất cả dữ liệu cần thiết
        return view('user.pages.product_category', compact('products', 'subCategory', 'sub_category', 'chips', 'rams', 'storages'));
    }

    public function filter(Request $request)
    {
        $query = Product::with(['subCategory', 'variants']);
        $isFiltered = false;

        // Lọc theo danh mục con
        if ($request->filled('sub_category_id')) {
            $query->where('sub_category_id', $request->input('sub_category_id'));
            $isFiltered = true;
        }

        // Lọc theo giá (có thể chỉ nhập min_price hoặc max_price)
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        // Nếu chỉ nhập min_price và là giá trị hợp lệ (số)
        if (is_numeric($minPrice)) {
            $query->whereHas('variants', function ($q) use ($minPrice) {
                $q->where('sale_price', '>=', $minPrice)
                    ->orWhere('listed_price', '>=', $minPrice);
            });
            $isFiltered = true;
        }

        // Nếu chỉ nhập max_price và là giá trị hợp lệ (số)
        if (is_numeric($maxPrice)) {
            $query->whereHas('variants', function ($q) use ($maxPrice) {
                $q->where('sale_price', '<=', $maxPrice)
                    ->orWhere('listed_price', '<=', $maxPrice);
            });
            $isFiltered = true;
        }

        // Nếu cả min_price và max_price đều được nhập và là số hợp lệ
        if (is_numeric($minPrice) && is_numeric($maxPrice)) {
            $query->whereHas('variants', function ($q) use ($minPrice, $maxPrice) {
                $q->whereBetween('sale_price', [$minPrice, $maxPrice])
                    ->orWhereBetween('listed_price', [$minPrice, $maxPrice]);
            });
            $isFiltered = true;
        }

        // Lọc theo chip
        if ($request->has('chip_id') && !empty($request->input('chip_id'))) {
            $query->whereHas('variants', function ($q) use ($request) {
                $q->whereIn('chip_id', $request->input('chip_id'));
            });
            $isFiltered = true;
        }

        // Lọc theo RAM
        if ($request->has('ram_id') && !empty($request->input('ram_id'))) {
            $query->whereHas('variants', function ($q) use ($request) {
                $q->whereIn('ram_id', $request->input('ram_id'));
            });
            $isFiltered = true;
        }

        // Lọc theo dung lượng lưu trữ
        if ($request->has('storage_id') && !empty($request->input('storage_id'))) {
            $query->whereHas('variants', function ($q) use ($request) {
                $q->whereIn('storage_id', $request->input('storage_id'));
            });
            $isFiltered = true;
        }

        // Nếu không có lọc, lấy tất cả sản phẩm
        $products = $isFiltered ? $query ->where('is_show_home', 1)->paginate(20) : Product::with(['subCategory', 'variants'])->where('is_show_home', 1)->paginate(20);

        // Lấy các thông tin khác (danh mục con, chip, RAM, dung lượng lưu trữ)
        $chips = Chip::pluck('name', 'id')->all();
        $rams = Ram::pluck('name', 'id')->all();
        $storages = Storage::pluck('name', 'id')->all();
        $sub_category = SubCategory::pluck('name', 'id')->all();

        return view('user.pages.product_category', compact('sub_category', 'products', 'chips', 'rams', 'storages'));
    }

    public function show($id)
    {
        $product = Product::with(['variants', 'subCategory', 'productImages'])->findOrFail($id);

        return view('user.pages.product_detail', compact('product'));

    }
}
