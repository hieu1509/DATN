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
            // Chuyển hướng người dùng đến trang đăng nhập
            return redirect()->route('login')->with('error','bạn cần đăng nhập để mau hàng.');
        }
    
        // Nếu người dùng đã đăng nhập, thực hiện tiếp các logic thêm sản phẩm vào giỏ hàng
        $product_id = $request->id;
        $chip_id = $request->chip_id;
        $ram_id = $request->ram_id;
        $storage_id = $request->storage_id;

        $quantity = $request->quantity;
    
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        $productVariant = ProductVariant::query()
            ->where('product_id', $product_id)
            ->where('chip_id', $chip_id)
            ->where('ram_id', $ram_id)
            ->where('storage_id', $storage_id)
            ->first();
        if (!$productVariant) {
            return redirect()->back()->with('error','Không có sản phẩm cần mua.');
        }
    
        $carts_id = $cart->id;
        $product_variant_id  = $productVariant->id;
    
        $CartDetail = CartDetail::where('carts_id', $carts_id)
            ->where('product_variant_id ', $product_variant_id)
            ->first();
        if ($CartDetail) {
            $CartDetail->update([
                'quantity' => $CartDetail->quantity + $quantity,
            ]);
        } else {
            CartDetail::create([
                'carts_id' => $carts_id,
                'product_variant_id ' => $product_variant_id ,
                'quantity' => $quantity,
            ]);
        }
    
        return redirect()->route('cart')->with('success', 'Thêm vào giỏ hàng thành công!');
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
        return redirect()->back()->with('success','xóa giỏ hàng thành công');
    }
}
