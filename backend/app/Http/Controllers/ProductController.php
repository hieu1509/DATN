<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\Chip;
use App\Models\Ram;
use App\Models\Storage;
use App\Models\SubCategory;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->with(['subCategory', 'variants'])->latest('id')->paginate(6);

        return view('admin.pages.products.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sub_category = Subcategory::query()->pluck('name', 'id')->all();
        $chips = Chip::query()->pluck('name', 'id')->all();
        $rams = Ram::query()->pluck('name', 'id')->all();
        $storages = Storage::query()->pluck('name', 'id')->all();

        return view('admin.pages.products.create', compact('sub_category', 'chips', 'rams', 'storages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
           
            $product = Product::create([
                'sub_category_id' => $request->sub_category_id,
                'name' => $request->name,
                'description' => $request->description,
                'content' => $request->content,
                'view' => 0,
                'is_hot' => $request->is_hot,
                'is_sale' => $request->is_sale,
                'is_show_home' => $request->is_show_home,
            ]);

            
            if ($request->hasFile('image')) {
                
                $imagePath = $request->file('image')->store('public/product');
                $product->update(['image' => $imagePath]);
            }

            
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $image) {
                    $imagePath = $image->store('products', 'public'); 
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_url' => $imagePath,
                        'alt_text' => 'Hình ảnh sản phẩm ' . ($index + 1),
                        'is_primary' => $index == 0,
                        'sort_order' => $index + 1,
                    ]);
                }
            }

           
            foreach ($request->chip_id as $index => $chipId) {
                ProductVariant::create([
                    'product_id' => $product->id,
                    'chip_id' => $chipId,
                    'ram_id' => $request->ram_id[$index], 
                    'storage_id' => $request->storage_id[$index], 
                    'listed_price' => $request->listed_price[$index], 
                    'sale_price' => $request->sale_price[$index], 
                    'quantity' => $request->quantity[$index], 
                ]);
            }

            DB::commit();
            return redirect()->route('admins.products.index')->with('success', 'Thêm sản phẩm thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Đã có lỗi xảy ra!']);
        }
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
       
        $product = Product::with(['productImages', 'variants'])->findOrFail($id);

        
        $sub_categories = Subcategory::pluck('name', 'id')->all();
        $chips = Chip::pluck('name', 'id')->all();
        $rams = Ram::pluck('name', 'id')->all();
        $storages = Storage::pluck('name', 'id')->all();

        return view('admin.pages.products.edit', compact('product', 'sub_categories', 'rams', 'storages', 'chips'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
    
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'content' => 'required|string',
                'description' => 'required|string',
                'listed_price' => 'required|array',
                'sale_price' => 'required|array',
                'quantity' => 'required|array',
                'chip_id' => 'required|array',
                'ram_id' => 'required|array',
                'storage_id' => 'required|array',
                'is_show_home' => 'required|boolean',
                'sub_category_id' => 'required|exists:sub_categories,id',
                'image' => 'nullable|image|max:2048',
                'images' => 'nullable|array', 
            ]);
    
            $product = Product::findOrFail($id);
    
            $product->update($validatedData);
    
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('public/product');
                $product->update(['image' => $imagePath]);
            }
    
          
            if ($request->hasFile('images')) {
               
                ProductImage::where('product_id', $product->id)->delete();
                foreach ($request->file('images') as $index => $image) {
                    $imagePath = $image->store('products');
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_url' => $imagePath,
                        'alt_text' => 'Hình ảnh sản phẩm ' . ($index + 1),
                        'is_primary' => $index == 0,
                        'sort_order' => $index + 1,
                    ]);
                }
            }
            
            ProductVariant::where('product_id', $product->id)->delete();
    
            if (count($request->chip_id) === count($request->ram_id) &&
                count($request->ram_id) === count($request->storage_id) &&
                count($request->storage_id) === count($request->listed_price) &&
                count($request->listed_price) === count($request->sale_price) &&
                count($request->sale_price) === count($request->quantity)) {
    
                foreach ($request->chip_id as $index => $chipId) {
                    ProductVariant::create([
                        'product_id' => $product->id,
                        'chip_id' => $chipId,
                        'ram_id' => $request->ram_id[$index],
                        'storage_id' => $request->storage_id[$index],
                        'listed_price' => $request->listed_price[$index],
                        'sale_price' => $request->sale_price[$index],
                        'quantity' => $request->quantity[$index],
                    ]);
                }
            } else {
                return redirect()->back()->withErrors(['message' => 'Dữ liệu biến thể không hợp lệ.']);
            }
    
            DB::commit();
            return redirect()->route('admins.products.index')->with('success', 'Cập nhật sản phẩm thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['message' => 'Có lỗi xảy ra: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();

        try {
            $product = Product::findOrFail($id);

            ProductImage::where('product_id', $product->id)->delete();

            ProductVariant::where('product_id', $product->id)->delete();

            $product->delete();

            DB::commit();
            return redirect()->route('admins.products.index')->with('danger', 'Xóa sản phẩm thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Không thể xóa sản phẩm!']);
        }
    }
}