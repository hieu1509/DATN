<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    // Lấy tất cả các khuyến mãi
    public function index()
    {
        return Promotion::all();
    }

    // Tạo khuyến mãi mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'discount_amount' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        return Promotion::create($validated);
    }

    // Lấy thông tin khuyến mãi theo ID
    public function show($id)
    {
        return Promotion::findOrFail($id);
    }

    // Cập nhật khuyến mãi
    public function update(Request $request, $id)
    {
        $promotion = Promotion::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'discount_amount' => 'sometimes|required|numeric',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'sometimes|required|date|after_or_equal:start_date',
        ]);

        $promotion->update($validated);

        return $promotion;
    }

    // Xóa khuyến mãi
    public function destroy($id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();

        return response()->noContent();
    }
}

