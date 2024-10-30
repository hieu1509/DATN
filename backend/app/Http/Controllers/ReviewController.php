<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function create($orderId, $productId)
    {
        $order = $this->getOrderIfProductPurchased($orderId, $productId);

        if (!$order) {
            return redirect()->route('products.show', $productId)
                ->withErrors('Bạn chưa mua sản phẩm này.');
        }

        $product = Product::findOrFail($productId);
        return view('reviews.create', compact('product', 'orderId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'product_id' => 'required|exists:products,id',
            'order_id' => 'required|exists:orders,id',
        ]);

        if (!$this->getOrderIfProductPurchased($request->order_id, $request->product_id)) {
            return redirect()->back()->withErrors('Bạn không thể đánh giá sản phẩm chưa mua.');
        }

        Review::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'order_id' => $request->order_id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect()->route('products.show', $request->product_id)
            ->with('success', 'Đánh giá của bạn đã được gửi.');
    }

    private function getOrderIfProductPurchased($orderId, $productId)
    {
        return Order::where('id', $orderId)
            ->where('user_id', Auth::id())
            ->whereHas('products', function ($query) use ($productId) {
                $query->where('product_id', $productId);
            })->first();
    }
}
