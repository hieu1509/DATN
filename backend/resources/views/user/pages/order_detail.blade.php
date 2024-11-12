@extends('user.layout')

@section('content')
<body class="page-template-default woocommerce-checkout woocommerce-page woocommerce-order-received can-uppercase woocommerce-active">
    <div id="page" class="hfeed site">

        @include('user.partials.header')

        @include('user.partials.menu')

        <!-- .header-v2 -->
        <!-- ============================================================= Header End ============================================================= -->
        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">
                <div class="row">
                    <nav class="woocommerce-breadcrumb">
                        <a href="home-v1.html">Home</a>
                        <span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
                        <a href="checkout.html">Đơn hàng</a>
                        <span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Chi tiết đơn hàng
                    </nav>
                    <!-- .woocommerce-breadcrumb -->
        
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="page hentry">
        
                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="woocommerce-order">
                                            <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</p>

                                            <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">
        
                                                <li class="woocommerce-order-overview__order order">
                                                    Mã đơn hàng: <strong>{{ $order->code }}</strong>
                                                </li>
        
                                                <li class="woocommerce-order-overview__date date">
                                                    Ngày đặt hàng :<strong>{{ $order->created_at }}</strong>
                                                </li>
        
                                                
                                                <li class="woocommerce-order-overview__total total">
                                                    Tổng cộng: <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₫</span>{{ number_format($order->money_total) }}</span></strong>
                                                </li>
        
                                                <li class="woocommerce-order-overview__payment-method method">
                                                        Phương thức thanh toán: <strong>{{ $order->payment_type }}</strong>
                                                </li>
                                                
                                            </ul>
                                            <!-- .woocommerce-order-overview -->
        
                                        
                                            <section class="woocommerce-order-details">
                                                <h2 class="woocommerce-order-details__title">Thông tin khách hàng</h2>
                                            
                                                <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                                                    <thead>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="label">Tên khách hàng:</td>
                                                            <th class="value">{{ $order->name }}</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="label">Địa chỉ:</td>
                                                            <th class="value">{{ $order->address }}</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="label">Số điện thoại:</td>
                                                            <th class="value">{{ $order->phone }}</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="label">Ghi chú:</td>
                                                            <th class="value">{{ $order->note ?? 'Không có' }}</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                                <!-- .woocommerce-table -->
                                            </section>

                                            <section class="woocommerce-order-details">
                                                <h2 class="woocommerce-order-details__title">Chi tiết đơn hàng</h2>
                                            
                                                <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
        
                                                    <thead>
                                                        <tr>
                                                            <th class="woocommerce-table__product-name product-name">Product</th>
                                                            <th class="woocommerce-table__product-table product-total">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($order->orderDetails as $detail)
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                        <img src="{{ asset('storage/' . $detail->image) }}" alt="{{ $detail->name }}" style="width: 100px; height: auto; margin-right: 10px;">
                                                                        {{ $detail->name }}
                                                                    <strong class="product-quantity">× {{ $detail->quantity }}</strong>
                                                                </td>
                                                                <td class="product-total">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                        {{ number_format($detail->sale_price * $detail->quantity, 0, ',', '.') }}
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <!-- .woocommerce-table -->
                                            </section>
                                            <!-- .woocommerce-order-details -->
                                        </div>
                                        <!-- .woocommerce-order -->
                                    </div>
                                    <!-- .woocommerce -->
                                </div>
                                <!-- .entry-content -->
                            </div>
                            <!-- .hentry -->
                        </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- .row -->
            </div>
            <!-- .col-full -->
        </div>
        <!-- #content -->
    
        @include('user.partials.footer')

        <!-- .site-footer -->
    </div>
    
    @include('user.partials.js')
    
</body>
@endsection