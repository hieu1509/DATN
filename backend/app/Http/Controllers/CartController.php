<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = Auth::user()->carts()->orderBy('id', 'desc')->first();

        if (!$cart) {
            return view('user.pages.cart', [
                'cartDetail' => [],
                'total' => 0,
            ])->with('error', 'Giỏ hàng của bạn trống.');
        }

        $carts_id = $cart->id;

        $cartDetail = CartDetail::with(['productVariant.product', 'productVariant.chip', 'productVariant.ram', 'productVariant.storage'])
            ->where('carts_id', $carts_id)
            ->get();

        $total = $cartDetail->sum(function ($detail) {
            $price = $detail->productVariant->sale_price ?? $detail->productVariant->listed_price;
            return $price * $detail->quantity;
        });

        return view('user.pages.cart', compact('cartDetail', 'total'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để mua hàng.');
        }

        $variant_id = $request->variant_id;
        $quantity = $request->quantity;

        // Tìm hoặc tạo giỏ hàng cho người dùng
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);

        // Kiểm tra xem biến thể sản phẩm có tồn tại không
        $productVariant = ProductVariant::find($variant_id);
        if (!$productVariant) {
            return redirect()->back()->with('error', 'Không có sản phẩm cần mua.');
        }

        // Tìm hoặc thêm mới CartDetail cho biến thể sản phẩm
        $cartDetail = CartDetail::firstOrNew([
            'carts_id' => $cart->id,
            'product_variant_id' => $variant_id,
        ]);

        // Cập nhật số lượng cho biến thể cụ thể
        $cartDetail->quantity = $cartDetail->exists ? $cartDetail->quantity + $quantity : $quantity;
        $cartDetail->save();

        return redirect()->route('cart.index')->with('success', 'Thêm vào giỏ hàng thành công!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cartDetail = CartDetail::findOrFail($id);

        // Cập nhật số lượng từ request
        $cartDetail->quantity = $request->quantity;
        $cartDetail->save();

        return redirect()->back()->with('success', 'Cập nhật giỏ hàng thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cartDetail = CartDetail::findOrFail($id);
        $cartDetail->delete();
        return redirect()->back()->with('success', 'Xóa giỏ hàng thành công');
    }
}