<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\Review;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['user', 'product', 'order'])->paginate(10);
        return view('admin.pages.reviews.index', compact('reviews'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        // Lấy danh sách review của sản phẩm
        $reviews = Review::where('product_id', $id)->get();

        // Tính toán số lượng đánh giá cho mỗi sao
        $ratingHistogram = [];
        foreach (range(1, 5) as $i) {
            $ratingHistogram[$i] = $reviews->where('rating', $i)->count();
        }

        // Tính điểm trung bình rating
        $averageRating = $reviews->avg('rating') ?: 0;

        return view('product_detail', compact('reviews', 'product', 'averageRating', 'ratingHistogram'));
    }



    public function create($productId)
    {
        $product = Product::findOrFail($productId);
        return view('reviews.create', compact('product'));
    }

    public function store(StoreReviewRequest $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để đánh giá.');
        }

        // Kiểm tra nếu người dùng đã mua sản phẩm
        $hasPurchased = Order::where('user_id', Auth::id())
            ->whereHas('orderItems', function ($query) use ($request) {
                $query->where('product_id', $request->product_id);
            })
            ->exists();

        if (!$hasPurchased) {
            return back()->with('error', 'Bạn phải mua sản phẩm này trước khi đánh giá.');
        }

        // Lưu review vào cơ sở dữ liệu
        $review = new Review();
        $review->user_id = Auth::id();
        $review->product_id = $request->product_id;
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->author = Auth::user()->name;
        $review->email = Auth::user()->email;

        // Kiểm tra nếu có phản hồi
        if ($request->has('parent_id')) {
            $review->parent_id = $request->parent_id;
        }

        $review->save();

        return back()->with('success', 'Cảm ơn bạn đã đánh giá sản phẩm!');
    }




    public function destroy(Review $review)
    {
        // Kiểm tra quyền xóa bình luận (chỉ admin hoặc chính người tạo có thể xóa)
        if ($review->user_id !== auth()->id() && !auth()->user()->is_admin) {
            return redirect()->back()->with('error', 'Bạn không có quyền xóa bình luận này');
        }

        $review->delete();
        return redirect()->back()->with('success', 'Bình luận đã được xóa');
    }
}
