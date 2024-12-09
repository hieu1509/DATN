<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
@extends('admin.layout')
@section('title')
    danh sách đơn hàng
@endsection
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Chi tiết đơn hàng</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Đơn hàng</a></li>
                            <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Đơn hàng: {{ $order->code }}</h5>
                            <div class="flex-shrink-0">
                                {{-- <a href="apps-invoices-details.html" class="btn btn-success btn-sm"><i class="ri-download-2-fill align-middle me-1"></i> Invoice</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap align-middle table-borderless mb-0">
                                <thead class="table-light text-muted">
                                    <tr>
                                        <th scope="col">Sản phẩm</th>
                                        <th></th>
                                        <th></th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col" class="text-end">Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->orderDetails as $detail)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                        <img src="{{ asset('storage/' . $detail->image) }}" alt="{{ $detail->name }}" style="width: 100px; height: auto; margin-right: 10px;">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-15"><a href="#" class="link-primary">{{ $detail->name }}</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $detail->quantity }}</td>
                                            <td class="fw-medium text-end">
                                                {{ number_format($detail->sale_price * $detail->quantity, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr class="border-top border-top-dashed">
                                        <td colspan="3"></td>
                                        <td colspan="2" class="fw-medium p-0">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td>Shipping:</td>
                                                        <td class="text-end">{{number_format($order->shipping->cost, 0, ',', '.')}}đ - {{$order->shipping->name}}</td>
                                                    </tr>
                                                    @if($order->promotion)
                                                        @if($order->promotion->discount_type == 'fixed')
                                                            <!-- Nếu discount_type là 'fixed' thì hiển thị giảm giá theo tiền -->
                                                            <tr>
                                                                <td>Giảm giá: <span class="text-muted"></span></td>
                                                                <td class="text-end"> {{ number_format($order->promotion->discount, 0) }}VNĐ</td>
                                                            </tr>
                                                        @elseif($order->promotion->discount_type == 'percentage')
                                                            <!-- Nếu discount_type là 'percentage' thì hiển thị phần trăm giảm giá -->
                                                            <tr>
                                                                <td>Giảm giá: <span class="text-muted"></span></td>
                                                                <td class="text-end">{{ $order->promotion->discount }} %</td>
                                                            </tr>
                                                        @else
                                                            <p>Không xác định loại giảm giá.</p>
                                                        @endif
                                                    @else
                                                            <p>Không có mã giảm giá.</p>
                                                    @endif
                                                    <tr class="border-top border-top-dashed">
                                                        <th scope="row">Tổng :</th>
                                                        <th class="text-end">{{ number_format($order->money_total) }}VNĐ</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end card-->
                <div class="card">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Trạng thái đơn hàng</h5>
                            <div class="flex-shrink-0 mt-2 mt-sm-0">
                                {{-- <a href="javascript:void(0);" class="btn btn-soft-info btn-sm mt-2 mt-sm-0"><i class="ri-map-pin-line align-middle me-1"></i> Change Address</a>
                                <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Order</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="profile-timeline">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item border-0">
                                    <div class="accordion-header" id="headingOne">
                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title bg-success rounded-circle">
                                                        <i class="ri-shopping-bag-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-15 mb-0 fw-semibold"> <span class="fw-normal">Ngày mua</span> - {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="accordion-header" id="headingOne">
                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title bg-success rounded-circle">
                                                        <i class="ri-shopping-bag-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-15 mb-0 fw-semibold"> <span class="fw-normal">Phương thức thanh toán</span> - {{$order->payment_type}}</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="accordion-header" id="headingOne">
                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title bg-success rounded-circle">
                                                        <i class="ri-shopping-bag-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-15 mb-0 fw-semibold"> <span class="fw-normal">Trạng thái đơn hàng</span> - {{ $orderStatus }}</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="accordion-header" id="headingOne">
                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title bg-success rounded-circle">
                                                        <i class="ri-shopping-bag-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-15 mb-0 fw-semibold"> <span class="fw-normal">Trạng thái thanh toán</span> - {{ $paymentStatus }}</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                {{-- <div class="accordion-item border-0">
                                    <div class="accordion-header" id="headingTwo">
                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title bg-success rounded-circle">
                                                        <i class="mdi mdi-gift-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-15 mb-1 fw-semibold">Packed - <span class="fw-normal">Thu, 16 Dec 2021</span></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body ms-2 ps-5 pt-0">
                                            <h6 class="mb-1">Your Item has been picked up by courier partner</h6>
                                            <p class="text-muted mb-0">Fri, 17 Dec 2021 - 9:45AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0">
                                    <div class="accordion-header" id="headingThree">
                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title bg-success rounded-circle">
                                                        <i class="ri-truck-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-15 mb-1 fw-semibold">Shipping - <span class="fw-normal">Thu, 16 Dec 2021</span></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body ms-2 ps-5 pt-0">
                                            <h6 class="fs-14">RQK Logistics - MFDS1400457854</h6>
                                            <h6 class="mb-1">Your item has been shipped.</h6>
                                            <p class="text-muted mb-0">Sat, 18 Dec 2021 - 4.54PM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0">
                                    <div class="accordion-header" id="headingFour">
                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title bg-light text-success rounded-circle">
                                                        <i class="ri-takeaway-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-14 mb-0 fw-semibold">Out For Delivery</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item border-0">
                                    <div class="accordion-header" id="headingFive">
                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFile" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title bg-light text-success rounded-circle">
                                                        <i class="mdi mdi-package-variant"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-14 mb-0 fw-semibold">Delivered</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div> --}}
                            </div>
                            <!--end accordion-->
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-xl-3">
                {{-- <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <h5 class="card-title flex-grow-1 mb-0"><i class="mdi mdi-truck-fast-outline align-middle me-1 text-muted"></i> Logistics Details</h5>
                            <div class="flex-shrink-0">
                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary fs-11">Track Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:80px;height:80px"></lord-icon>
                            <h5 class="fs-16 mt-2">RQK Logistics</h5>
                            <p class="text-muted mb-0">ID: MFDS1400457854</p>
                            <p class="text-muted mb-0">Payment Mode : Debit Card</p>
                        </div>
                    </div>
                </div> --}}
                <!--end card-->

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <h5 class="card-title flex-grow-1 mb-0">Khách hàng</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0 vstack gap-3">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="fs-14 mb-1">{{ $order->name }}</h6>
                                    </div>
                                </div>
                            </li>
                            <li><i class="ri-phone-line me-2 align-middle text-muted fs-16"></i>{{ $order->phone }}</li>
                        </ul>
                    </div>
                </div>
                <!--end card-->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"><i class="ri-map-pin-line align-middle me-1 text-muted"></i> Địa chỉ</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                            <li class="fw-medium fs-14">{{ $order->address }}</li>
                            <li>Ghi chú: {{ $order->note ?? 'Không có' }}</li>
                        </ul>
                    </div>
                </div>
                <!--end card-->

                {{-- <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"><i class="ri-secure-payment-line align-bottom me-1 text-muted"></i> Payment Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Transactions:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">#VLZ124561278124</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Payment Method:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Debit Card</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Card Holder Name:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Joseph Parker</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Card Number:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">xxxx xxxx xxxx 2456</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Total Amount:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">$415.96</h6>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div><!-- End Page-content -->
@endsection