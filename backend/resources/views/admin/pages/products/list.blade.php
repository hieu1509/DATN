@extends('admin.layout')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Danh sách sản phẩm</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Sản phẩm</a></li>
                                <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif

            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16">Filters</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                                </div>
                            </div>

                            <div class="filter-choices-input">
                                <input class="form-control" data-choices data-choices-removeItem type="text"
                                    id="filter-choices-input" value="T-Shirts" />
                            </div>
                        </div>

                        <div class="accordion accordion-flush filter-accordion">

                            <div class="card-body border-bottom">
                                <div>
                                    <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Products</p>
                                    <ul class="list-unstyled mb-0 filter-list">
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Grocery</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Fashion</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">5</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Watches</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Electronics</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">5</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Furniture</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">6</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Automotive Accessories</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Appliances</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">7</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Kids</h5>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body border-bottom">
                                <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Price</p>

                                <div id="product-price-range"></div>
                                <div class="formCost d-flex gap-2 align-items-center mt-3">
                                    <input class="form-control form-control-sm" type="text" id="minCost"
                                        value="0" /> <span class="fw-semibold text-muted">to</span> <input
                                        class="form-control form-control-sm" type="text" id="maxCost" value="1000" />
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingBrands">
                                    <button class="accordion-button bg-transparent shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands"
                                        aria-expanded="true" aria-controls="flush-collapseBrands">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Brands</span> <span
                                            class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                    </button>
                                </h2>

                                <div id="flush-collapseBrands" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingBrands">
                                    <div class="accordion-body text-body pt-0">
                                        <div class="search-box search-box-sm">
                                            <input type="text" class="form-control bg-light border-0"
                                                id="searchBrandsList" placeholder="Search Brands...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                        <div class="d-flex flex-column gap-2 mt-3 filter-check">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Boat"
                                                    id="productBrandRadio5" checked>
                                                <label class="form-check-label" for="productBrandRadio5">Boat</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="OnePlus"
                                                    id="productBrandRadio4">
                                                <label class="form-check-label" for="productBrandRadio4">OnePlus</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Realme"
                                                    id="productBrandRadio3">
                                                <label class="form-check-label" for="productBrandRadio3">Realme</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Sony"
                                                    id="productBrandRadio2">
                                                <label class="form-check-label" for="productBrandRadio2">Sony</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="JBL"
                                                    id="productBrandRadio1" checked>
                                                <label class="form-check-label" for="productBrandRadio1">JBL</label>
                                            </div>

                                            <div>
                                                <button type="button"
                                                    class="btn btn-link text-decoration-none text-uppercase fw-medium p-0">1,235
                                                    More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion-item -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingDiscount">
                                    <button class="accordion-button bg-transparent shadow-none collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseDiscount"
                                        aria-expanded="true" aria-controls="flush-collapseDiscount">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Discount</span> <span
                                            class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                    </button>
                                </h2>
                                <div id="flush-collapseDiscount" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingDiscount">
                                    <div class="accordion-body text-body pt-1">
                                        <div class="d-flex flex-column gap-2 filter-check">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="50% or more"
                                                    id="productdiscountRadio6">
                                                <label class="form-check-label" for="productdiscountRadio6">50% or
                                                    more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="40% or more"
                                                    id="productdiscountRadio5">
                                                <label class="form-check-label" for="productdiscountRadio5">40% or
                                                    more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="30% or more"
                                                    id="productdiscountRadio4">
                                                <label class="form-check-label" for="productdiscountRadio4">
                                                    30% or more
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="20% or more"
                                                    id="productdiscountRadio3" checked>
                                                <label class="form-check-label" for="productdiscountRadio3">
                                                    20% or more
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="10% or more"
                                                    id="productdiscountRadio2">
                                                <label class="form-check-label" for="productdiscountRadio2">
                                                    10% or more
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Less than 10%"
                                                    id="productdiscountRadio1">
                                                <label class="form-check-label" for="productdiscountRadio1">
                                                    Less than 10%
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion-item -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingRating">
                                    <button class="accordion-button bg-transparent shadow-none collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseRating"
                                        aria-expanded="false" aria-controls="flush-collapseRating">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span> <span
                                            class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                    </button>
                                </h2>

                                <div id="flush-collapseRating" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingRating">
                                    <div class="accordion-body text-body">
                                        <div class="d-flex flex-column gap-2 filter-check">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="4 & Above Star"
                                                    id="productratingRadio4" checked>
                                                <label class="form-check-label" for="productratingRadio4">
                                                    <span class="text-muted">
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </span> 4 & Above
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="3 & Above Star"
                                                    id="productratingRadio3">
                                                <label class="form-check-label" for="productratingRadio3">
                                                    <span class="text-muted">
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </span> 3 & Above
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2 & Above Star"
                                                    id="productratingRadio2">
                                                <label class="form-check-label" for="productratingRadio2">
                                                    <span class="text-muted">
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </span> 2 & Above
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1 Star"
                                                    id="productratingRadio1">
                                                <label class="form-check-label" for="productratingRadio1">
                                                    <span class="text-muted">
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </span> 1
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion-item -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-9 col-lg-8">
                    <div>
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="{{ route('admins.products.create') }}" class="btn btn-success"
                                                id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Thêm sản
                                                phẩm</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" id="searchProductList"
                                                    placeholder="Search Products...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-ordering="false">ID</th>
                                            <th data-ordering="false">IMG</th>
                                            <th data-ordering="false">Tên SP</th>
                                            <th data-ordering="false">Danh mục</th>
                                            <th data-ordering="false">Giá</th>
                                            <th data-ordering="false">Giá KM</th>
                                            <th>Lượt xem</th>
                                            <th>Ngày tạo</th>
                                            <th>Trạng thái</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($item->image)
                                                        <img src="{{ Storage::url($item->image) }}"
                                                            alt="{{ $item->name }}" style="width: 100px; height: auto;">
                                                    @else
                                                        <span>Không có ảnh</span>
                                                    @endif
                                                </td>
                                                <td><a href="#!">{{ $item->name }}</a></td>
                                                <td>{{ $item->subCategory->name }}</td>
                                                <td>
                                                    @php
                                                        // Lấy tất cả các giá của biến thể sản phẩm
                                                        $prices = $item->variants->pluck('listed_price')->toArray();

                                                        // Nếu có biến thể thì tính khoảng giá
                                                        if (!empty($prices)) {
                                                            $minPrice = min($prices); // Lấy giá thấp nhất
                                                            $maxPrice = max($prices); // Lấy giá cao nhất
                                                            echo number_format($minPrice, 0, ',', '.') .
                                                                ' - ' .
                                                                number_format($maxPrice, 0, ',', '.') .
                                                                '';
                                                        } else {
                                                            echo 'Chưa có giá';
                                                        }
                                                    @endphp
                                                </td>
                                                <td>
                                                    @php
                                                        // Lấy tất cả các giá của biến thể sản phẩm
                                                        $prices = $item->variants->pluck('sale_price')->toArray();

                                                        // Nếu có biến thể thì tính khoảng giá
                                                        if (!empty($prices)) {
                                                            $minPrice = min($prices); // Lấy giá thấp nhất
                                                            $maxPrice = max($prices); // Lấy giá cao nhất
                                                            echo number_format($minPrice, 0, ',', '.') .
                                                                ' - ' .
                                                                number_format($maxPrice, 0, ',', '.') .
                                                                '';
                                                        } else {
                                                            echo 'Chưa có giá';
                                                        }
                                                    @endphp
                                                </td>
                                                <td>{{ $item->view }}</td>
                                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                                <td> <!-- Hiển thị trạng thái -->
                                                    @if ($item->is_show_home == 1)
                                                        <span class="badge bg-success-subtle text-success">Hoạt Động</span>
                                                    @else
                                                        <span class="badge bg-danger-subtle text-danger">Ẩn</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <!-- Nút Xem Chi Tiết -->
                                                            <li>
                                                                <a href="{{ route('admins.products.show', $item->id) }}" class="dropdown-item">
                                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                    Xem chi tiết
                                                                </a>
                                                            </li>
                                                            <!-- Nút Sửa -->
                                                            <li>
                                                                <a href="{{ route('admins.products.edit', $item->id) }}" class="dropdown-item edit-item-btn">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Sửa
                                                                </a>
                                                            </li>
                                                            <!-- Nút Xóa -->
                                                            <li>
                                                                <form action="{{ route('admins.products.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');" style="background: none; border: none; cursor: pointer; text-decoration: none;">
                                                                            Xóa
                                                                        </button>
                                                                    </a>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- end tab content -->
                                <div>
                                    {{ $data->links() }}
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
@endsection
