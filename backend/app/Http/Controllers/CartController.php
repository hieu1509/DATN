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
        $carts_id = $cart->id;
        $total = 0;


        $cartDetail = CartDetail::with(['productVariant.product', 'productVariant.chip', 'productVariant.ram', 'productVariant.storage'])
            ->where('carts_id', $carts_id)
            ->get();
        //  dd($cartDetail);
        foreach ($cartDetail as $detail) {
            $productVariant = $detail->productVariant;


            $total += $productVariant->listed_price * $detail->quantity;
        }

        // Trả về view với cartDetail và total
        return view('user.pages.cart', compact('cartDetail', 'total'));
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

        // Tìm hoặc thêm mới CartDetail
        $cartDetail = CartDetail::firstOrNew([
            'carts_id' => $cart->id,
            'product_variant_id' => $variant_id,
        ]);

        // Nếu CartDetail đã tồn tại, cập nhật số lượng
        $cartDetail->quantity = $cartDetail->exists ? $cartDetail->quantity + $quantity : $quantity;
        $cartDetail->save();

        return redirect()->route('cart.index')->with('success', 'Thêm vào giỏ hàng thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        // dd($request->all());
        $cartDetail = CartDetail::findOrFail($id);

        if ($request->isMethod('PUT')) {
            $cartDetail->quantity = $request->quantity;
            $cartDetail->save();

            return redirect()->back()->with('success', 'Cập nhật giỏ hàng thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cartDetail = CartDetail::findOrFail($id);
        $cartDetail->delete();
        return redirect()->back()->with('success', 'xóa giỏ hàng thành công');
    }
}
