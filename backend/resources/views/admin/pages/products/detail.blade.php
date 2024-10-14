@extends('admin.layout') 

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- Start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Chi tiết sản phẩm</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Sản phẩm</a></li>
                                <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End page title -->

            <div class="row">
                <!-- Product details -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <!-- Product Name -->
                            <div class="mb-3">
                                <label class="form-label">Tên sản phẩm</label>
                                <p>{{ $product->name }}</p>
                            </div>

                            <!-- Product Description -->
                            <div class="mb-3">
                                <label class="form-label">Mô tả sản phẩm</label>
                                <p>{!! $product->content !!}</p>
                            </div>

                            <!-- Image upload -->
                            <h5 class="card-title mb-0">Thư viện ảnh</h5>
                            <div class="text-center mb-4">
                                <h5 class="fs-14 mb-1">Ảnh sản phẩm chính</h5>
                                @if($product->image)
                                    <img src="{{ Storage::url($product->image) }}" class="img-fluid rounded" alt="Product Image" style="height: 300px; width: 300px; object-fit: cover;">
                                @else
                                    <p>Chưa có ảnh sản phẩm</p>
                                @endif
                            </div>
                
                            <div class="mb-4">
                                <h5 class="fs-14 mb-1">Thư viện ảnh sản phẩm</h5>
                                <div class="row">
                                    @if($product->productImages && $product->productImages->isNotEmpty())
                                        @foreach($product->productImages as $image)
                                            @if($image->image_url)
                                                <div class="col-lg-3 mb-2 text-center">
                                                    <img src="{{ Storage::url($image->image_url) }}" class="img-fluid rounded" alt="Product Image" style="height: 300px; width: 300px; object-fit: cover;">
                                                </div>
                                            @else
                                                <div class="col-lg-3 mb-2 text-center">
                                                    <p>Ảnh không hợp lệ.</p>
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                        <div class="col-12 text-center">
                                            <p>Chưa có ảnh thư viện.</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Product Status and Specifications -->
                <div class="col-lg-4">
                    <!-- Product Status -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Trạng thái sản phẩm</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Sản phẩm Sale</label>
                                <p>{{ $product->is_sale ? 'Có' : 'Không' }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sản phẩm Hot</label>
                                <p>{{ $product->is_hot ? 'Có' : 'Không' }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Trạng thái hiển thị</label>
                                <p>{{ $product->is_show_home ? 'Hiển thị' : 'Ẩn' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product Category -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Danh mục sản phẩm</h5>
                        </div>
                        <div class="card-body">
                            <p>{{ $product->category->name ?? 'Chưa có danh mục' }}</p>
                        </div>
                    </div>

                    <!-- Product Specifications -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Thông số kỹ thuật</h5>
                        </div>
                        <div class="card-body">
                            <p>{!! $product->description !!}</p>
                        </div>
                    </div>
                </div>

                <!-- Product Variants -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Biến thể sản phẩm</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Chip</th>
                                        <th>RAM</th>
                                        <th>SSD</th>
                                        <th>Giá</th>
                                        <th>Giá khuyến mãi</th>
                                        <th>Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($product->variants as $variant)
                                        <tr>
                                            <td>{{ $variant->chip->name ?? 'N/A' }}</td>
                                            <td>{{ $variant->ram->name ?? 'N/A' }}</td>
                                            <td>{{ $variant->storage->name ?? 'N/A' }}</td>
                                            <td>{{ number_format($variant->listed_price) }} VND</td>
                                            <td>{{ number_format($variant->sale_price) }} VND</td>
                                            <td>{{ $variant->quantity }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
