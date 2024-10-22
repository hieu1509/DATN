@extends('user.layout')

@section('content')
<body class="woocommerce-active page-template-template-homepage-v4 can-uppercase">
    <div id="page" class="hfeed site">

        @include('user.partials.header')

        @include('user.partials.menu')

        <!-- .header-v2 -->
        <!-- ============================================================= Header End ============================================================= -->
        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">
                <div class="row"> 
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="home-v4-slider home-slider">
                                <div class="slider-1" >
                                    <img src="{{ asset('template2/assets/images/5.png') }}" alt="">
                                    <div class="caption">
                                        <div class="title">Công nghệ đỉnh cao,
                                            <br>hiệu năng vượt trội. </div>
                                        <div class="sub-title">Khám phá bộ sưu tập laptop hàng đầu ngay hôm nay! </div>
                                        <div class="button">Mua ngay
                                            <i class="tm tm-long-arrow-right"></i>
                                        </div>
                                        <div class="bottom-caption">Miễn phí vân chuyển trên toàn quốc.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="banners">
                                <div class="row">
                                    <div class="banner small-banner text-in-left">
                                        <a href="shop.html">
                                            <div style="background-size: cover; background-position: center center; background-image: url( {{ asset('template2/assets/images/banner/3-1.jpg ') }}); height: 259px;" class="banner-bg">
                                                <div class="caption">
                                                    <div class="banner-info">
                                                        <h3 class="title">Sản phẩm phụ kiện
                                                            <br>
                                                            <strong> với giá tốt nhất.</strong>
                                                            <br></h3>
                                                    </div>
                                                    <!-- .banner-info -->
                                                    <span class="banner-action button">Xem tất cả</span>
                                                </div>
                                                <!-- .caption -->
                                            </div>
                                            <!-- .banner-bg -->
                                        </a>
                                    </div>
                                    <!-- .banner -->
                                    <div class="banner large-banner text-in-right">
                                        <a href="shop.html">
                                            <div style="background-size: cover; background-position: center center; background-image: url({{ asset('template2/assets/images/banner/3-4.jpg ') }}); height: 259px;" class="banner-bg">
                                                <div class="caption">
                                                    <div class="banner-info">
                                                        <h3 class="title">Laptop gaming học tốt
                                                            <br>
                                                            <strong>chơi game ngon!!</strong> 
                                                            <br></h3>
                                                    </div>
                                                    <!-- .banner-info -->
                                                    <span class="banner-action button">Xem</span>
                                                </div>
                                                <!-- .caption -->
                                            </div>
                                            <!-- .banner-bg -->
                                        </a>
                                    </div>
                                    <!-- .banner -->
                                    <div class="banner small-banner text-in-left">
                                        <a href="shop.html">
                                            <div style="background-size: cover; background-position: center center; background-image: url({{ asset('template2/assets/images/banner/3-3.jpg') }} ); height: 259px;" class="banner-bg">
                                                <div class="caption">
                                                    <div class="banner-info">
                                                        <h3 class="title">
                                                            <strong>1000 mAh</strong>
                                                            <br> Pin dự phòng</h3>
                                                    </div>
                                                    <!-- .banner-info -->
                                                    <span class="price"></span>
                                                    <span class="banner-action button">Mua ngay</span>
                                                </div>
                                                <!-- .caption -->
                                            </div>
                                            <!-- .banner-bg -->
                                        </a>
                                    </div>
                                    <!-- .banner -->
                                </div>
                                <!-- .row -->
                            </div>
                            <!-- .banners -->
                            <section class="section-single-carousel-with-tab-product type-2">
                                <div class="row">
                                    <section class="carousel-tabs-with-no-hover section-single-carousel column-1-single-carousel " id="section-single-carousel">
                                        <header class="section-header">
                                            <h2 class="section-title">Xu hướng</h2>
                                            <nav class="custom-slick-nav"></nav>
                                            <!-- .custom-slick-nav -->
                                        </header>
                                        <!-- .section-header -->
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-single-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:766,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:799,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-1">
                                                    <div class="products">
                                                        @foreach ($hotProducts as $product)
                                                        <div class="product product-featured">
                                                            <a href="{{ route('users.products.show', $product->id) }}" class="woocommerce-LoopProduct-link">
                                                                @if ($product->image)
                                                                <img width="224" height="197" src="{{ Storage::url($product->image) }}" class="wp-post-image" alt="$product->name">
                                                            @else
                                                                <span>Không có ảnh</span>
                                                            @endif
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"></span>
                                                                    </ins>
                                                                    <span class="amount"> @php
                                                                        // Lấy tất cả các giá của biến thể sản phẩm
                                                                        $prices = $product->variants->pluck('listed_price')->toArray();
                
                                                                        // Nếu có biến thể thì tính khoảng giá
                                                                        if (!empty($prices)) {
                                                                            $minPrice = min($prices); // Lấy giá thấp nhất
                                                                            $maxPrice = max($prices); // Lấy giá cao nhất
                                                                            echo number_format($minPrice, 0, ',', '.') .
                                                                                'đ - ' .
                                                                                number_format($maxPrice, 0, ',', '.') .
                                                                                'đ';
                                                                        } else {
                                                                            echo 'Chưa có giá';
                                                                        }
                                                                    @endphp</span>
                                                                </span>
                                                                <!-- /.price -->
                                                                <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                            </a>
                                                            <div class="techmarket-product-rating">
                                                                <div class="star-rating" title="Rated 0 out of 5">
                                                                    <span style="width:0%">
                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(5)</span>
                                                            </div>
                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Thêm vào giỏ hàng</a>
                                                        </div>
                                                        @endforeach
                                                        <!-- /.product-outer -->
                                                    </div>
                                                </div>
                                                <!-- .woocommerce-->
                                            </div>
                                            <!-- .container-fluid -->
                                        </div>
                                        <!-- .products-carousel -->
                                    </section>
                                    <section class="carousel-tabs-with-no-hover column-2 section-products-carousel-tabs">
                                        <div class="section-products-carousel-tabs-wrap">
                                            <header class="section-header">
                                                <ul role="tablist" class="nav justify-content-end">
                                                    <li class="nav-item"><a class="nav-link active" href="#tab-59f89f0aa8cdd0" data-toggle="tab">Hàng mới về</a></li>
                                                    <li class="nav-item"><a class="nav-link " href="#tab-59f89f0aa8cdd1" data-toggle="tab">Sản phẩm hot</a></li>
                                                    <li class="nav-item"><a class="nav-link " href="#tab-59f89f0aa8cdd2" data-toggle="tab">Đang sale</a></li>
                                                </ul>
                                            </header>
                                            <div class="tab-content">
                                                <div id="tab-59f89f0aa8cdd0" class="tab-pane active" role="tabpanel">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-3">
                                                                <div class="products">
                                                                    @foreach ($latestProducts as $product)
                                                                        <div class="product product-featured">
                                                                            <a href="{{ route('users.products.show', $product->id) }}" class="woocommerce-LoopProduct-link">
                                                                            @if ($product->image)
                                                                                <img width="224" height="197" src="{{ Storage::url($product->image) }}" class="wp-post-image" alt="$product->name">
                                                                            @else
                                                                                <span>Không có ảnh</span>
                                                                            @endif
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"></span>
                                                                                    </ins>
                                                                                    <span class="amount">  
                                                                                        @php
                                                                                            // Lấy tất cả các giá của biến thể sản phẩm
                                                                                            $prices = $product->variants->pluck('listed_price')->toArray();
                                    
                                                                                            // Nếu có biến thể thì tính khoảng giá
                                                                                            if (!empty($prices)) {
                                                                                                $minPrice = min($prices); // Lấy giá thấp nhất
                                                                                                $maxPrice = max($prices); // Lấy giá cao nhất
                                                                                                echo number_format($minPrice, 0, ',', '.') .
                                                                                                    'đ - ' .
                                                                                                    number_format($maxPrice, 0, ',', '.') .
                                                                                                    'đ';
                                                                                            } else {
                                                                                                echo 'Chưa có giá';
                                                                                            }
                                                                                        @endphp
                                                                                    </span>
                                                                                </span>
                                                                                <!-- /.price -->
                                                                                <h2 class="woocommerce-loop-product__title">{{ $product->name }}</h2>
                                                                            </a>
                                                                            <div class="techmarket-product-rating">
                                                                                <div class="star-rating" title="Rated 0 out of 5">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(5)</span>
                                                                            </div>
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Thêm vào giỏ hàng</a>
                                                                        </div>
                                                                    <!-- /.product-outer -->
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div id="tab-59f89f0aa8cdd1" class="tab-pane " role="tabpanel">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-3">
                                                                <div class="products">
                                                                    @foreach ($hotProducts as $product)
                                                                        <div class="product product-featured">
                                                                            <a href="{{ route('users.products.show', $product->id) }}" class="woocommerce-LoopProduct-link">
                                                                            @if ($product->image)
                                                                                <img width="224" height="197" src="{{ Storage::url($product->image) }}" class="wp-post-image" alt="$product->name">
                                                                            @else
                                                                                <span>Không có ảnh</span>
                                                                            @endif
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"></span>
                                                                                    </ins>
                                                                                    <span class="amount">  
                                                                                        @php
                                                                                            // Lấy tất cả các giá của biến thể sản phẩm
                                                                                            $prices = $product->variants->pluck('listed_price')->toArray();
                                    
                                                                                            // Nếu có biến thể thì tính khoảng giá
                                                                                            if (!empty($prices)) {
                                                                                                $minPrice = min($prices); // Lấy giá thấp nhất
                                                                                                $maxPrice = max($prices); // Lấy giá cao nhất
                                                                                                echo number_format($minPrice, 0, ',', '.') .
                                                                                                    'đ - ' .
                                                                                                    number_format($maxPrice, 0, ',', '.') .
                                                                                                    'đ';
                                                                                            } else {
                                                                                                echo 'Chưa có giá';
                                                                                            }
                                                                                        @endphp
                                                                                    </span>
                                                                                </span>
                                                                                <!-- /.price -->
                                                                                <h2 class="woocommerce-loop-product__title">{{ $product->name }}</h2>
                                                                            </a>
                                                                            <div class="techmarket-product-rating">
                                                                                <div class="star-rating" title="Rated 0 out of 5">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(5)</span>
                                                                            </div>
                                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Thêm vào giỏ hàng</a>
                                                                        </div>
                                                                    <!-- /.product-outer -->
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div id="tab-59f89f0aa8cdd2" class="tab-pane " role="tabpanel">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-3">
                                                                <div class="products">
                                                                    @foreach ($saleProducts as $product)
                                                                    <div class="product product-featured">
                                                                        <a href="{{ route('users.products.show', $product->id) }}" class="woocommerce-LoopProduct-link">
                                                                        @if ($product->image)
                                                                            <img width="224" height="197" src="{{ Storage::url($product->image) }}" class="wp-post-image" alt="$product->name">
                                                                        @else
                                                                            <span>Không có ảnh</span>
                                                                        @endif
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"></span>
                                                                                </ins>
                                                                                <span class="amount">  
                                                                                    @php
                                                                                        // Lấy tất cả các giá của biến thể sản phẩm
                                                                                        $prices = $product->variants->pluck('sale_price')->toArray();
                                
                                                                                        // Nếu có biến thể thì tính khoảng giá
                                                                                        if (!empty($prices)) {
                                                                                            $minPrice = min($prices); // Lấy giá thấp nhất
                                                                                            $maxPrice = max($prices); // Lấy giá cao nhất
                                                                                            echo number_format($minPrice, 0, ',', '.') .
                                                                                                'đ - ' .
                                                                                                number_format($maxPrice, 0, ',', '.') .
                                                                                                'đ';
                                                                                        } else {
                                                                                            echo 'Chưa có giá';
                                                                                        }
                                                                                    @endphp
                                                                                </span>
                                                                                <del>
                                                                                    <span class="amount">{{ number_format($product->variants->first()->listed_price, 0, ',', '.') }}đ</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">{{ $product->name }}</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Thêm vào giỏ hàng</a>
                                                                    </div>
                                                                <!-- /.product-outer -->
                                                                @endforeach
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-pane -->
                                            </div>
                                            <!-- .tab-content -->
                                        </div>
                                        <!-- .section-products-carousel-tabs-wrap -->
                                    </section>
                                    <!-- .section-products-carousel-tabs -->
                                </div>
                            </section>
                            <!-- .section-single-carousel-with-tab-product -->
                            <div class="fullwidth-notice stretch-full-width">
                                <div class="col-full">
                                    <p class="message">Chất lượng hàng đầu, trải nghiệm công nghệ - Mua sắm laptop dễ dàng, nhanh chóng!</p>
                                </div>
                                <!-- .col-full -->
                            </div>
                            <!-- .fullwidth-notice -->
                            <section id="section-landscape-product-card-with-gallery" class="section-landscape-product-card-with-gallery">
                                <div class="products-carousel">
                                    <div class="container-fluid">
                                        <div class="woocommerce columns-1">
                                            <div class="products">
                                                <div class="content-landscape-product-card-with-gallery product">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <header class="section-header">
                                                                <h4 class="pretitle">Sản phẩm nổi bật!!</h4>
                                                                <h2 class="section-title">
                                                                    <strong>Các tính năng bạn muốn,</strong>
                                                                    <br>tất cả ở một nơi.</h2>
                                                            </header>
                                                            <!-- /.section-header -->
                                                            <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link" tabindex="0">
                                                                <div class="ribbon green-label">
                                                                    <span>S++</span>
                                                                </div>
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span>
                                                                    </ins>
                                                                    <del>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span>
                                                                    </del>
                                                                </span>
                                                                <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                <div class="techmarket-product-rating">
                                                                    <div class="star-rating" title="Rated 0 out of 5">
                                                                        <span style="width:0%">
                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                    </div>
                                                                    <span class="review-count">(0)</span>
                                                                </div>
                                                            </a>
                                                            <a rel="nofollow" href="single-product-fullwidth.html" class="button product_type_simple ajax_add_to_cart" tabindex="0">Xem ngay</a>
                                                        </div>
                                                        <!-- /.media-body -->
                                                        <div class="product-images-wrapper">
                                                            <div class="card-gallery techmarket-product-gallery techmarket-product-gallery--with-images techmarket-product-gallery--columns-4 images" data-columns="4">
                                                                <div class="techmarket-wc-product-gallery__wrapper big-image">
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/big-1.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/big-2.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/big-3.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/big-4.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                </div>
                                                                <div class="techmarket-wc-product-gallery-thumbnails__wrapper small-images">
                                                                    <figure data-thumb="assets/images/products/small-1.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/small-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure data-thumb="assets/images/products/small-2.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/small-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" title="">
                                                                    </figure>
                                                                    <figure data-thumb="assets/images/products/small-3.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/small-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" title="">
                                                                    </figure>
                                                                    <figure data-thumb="assets/images/products/small-4.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/small-4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" title="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.product-images-wrapper -->
                                                    </div>
                                                    <!-- /.media -->
                                                </div>
                                                <!-- .content-landscape-product-card-with-gallery -->
                                                <div class="content-landscape-product-card-with-gallery product">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <header class="section-header">
                                                                <h4 class="pretitle">Featured Product</h4>
                                                                <h2 class="section-title">
                                                                    <strong>The features you want,</strong>
                                                                    <br>all in one place</h2>
                                                            </header>
                                                            <!-- /.section-header -->
                                                            <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link" tabindex="0">
                                                                <div class="ribbon green-label">
                                                                    <span>A++</span>
                                                                </div>
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span>
                                                                    </ins>
                                                                    <del>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span>
                                                                    </del>
                                                                </span>
                                                                <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                <div class="techmarket-product-rating">
                                                                    <div class="star-rating" title="Rated 0 out of 5">
                                                                        <span style="width:0%">
                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                    </div>
                                                                    <span class="review-count">(0)</span>
                                                                </div>
                                                            </a>
                                                            <a rel="nofollow" href="single-product-fullwidth.html" class="button product_type_simple ajax_add_to_cart" tabindex="0">Read more</a>
                                                        </div>
                                                        <!-- /.media-body -->
                                                        <div class="product-images-wrapper">
                                                            <div class="card-gallery techmarket-product-gallery techmarket-product-gallery--with-images techmarket-product-gallery--columns-4 images" data-columns="4">
                                                                <div class="techmarket-wc-product-gallery__wrapper big-image">
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/big-card.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/big-card-2.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/big-card-1.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/big-card-2.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                </div>
                                                                <div class="techmarket-wc-product-gallery-thumbnails__wrapper small-images">
                                                                    <figure data-thumb="assets/images/products/small-1.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/sm-card-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure data-thumb="assets/images/products/small-2.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/sm-card-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" title="">
                                                                    </figure>
                                                                    <figure data-thumb="assets/images/products/small-3.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/sm-card-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" title="">
                                                                    </figure>
                                                                    <figure data-thumb="assets/images/products/small-4.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/sm-card-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" title="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.product-images-wrapper -->
                                                    </div>
                                                    <!-- /.media -->
                                                </div>
                                                <!-- .content-landscape-product-card-with-gallery -->
                                                <div class="content-landscape-product-card-with-gallery product">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <header class="section-header">
                                                                <h4 class="pretitle">Featured Product</h4>
                                                                <h2 class="section-title">
                                                                    <strong>The features you want,</strong>
                                                                    <br>all in one place</h2>
                                                            </header>
                                                            <!-- /.section-header -->
                                                            <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link" tabindex="0">
                                                                <div class="ribbon green-label">
                                                                    <span>A++</span>
                                                                </div>
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span>
                                                                    </ins>
                                                                    <del>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span>
                                                                    </del>
                                                                </span>
                                                                <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                <div class="techmarket-product-rating">
                                                                    <div class="star-rating" title="Rated 0 out of 5">
                                                                        <span style="width:0%">
                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                    </div>
                                                                    <span class="review-count">(0)</span>
                                                                </div>
                                                            </a>
                                                            <a rel="nofollow" href="single-product-fullwidth.html" class="button product_type_simple ajax_add_to_cart" tabindex="0">Read more</a>
                                                        </div>
                                                        <!-- /.media-body -->
                                                        <div class="product-images-wrapper">
                                                            <div class="card-gallery techmarket-product-gallery techmarket-product-gallery--with-images techmarket-product-gallery--columns-4 images" data-columns="4">
                                                                <div class="techmarket-wc-product-gallery__wrapper big-image">
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/deals-1.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/deals-2.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/deals-3.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure class="techmarket-wc-product-gallery__image ">
                                                                        <img width="600" height="600" src="assets/images/products/deals-2.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                                                                    </figure>
                                                                </div>
                                                                <div class="techmarket-wc-product-gallery-thumbnails__wrapper small-images">
                                                                    <figure data-thumb="assets/images/products/small-1.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/deals-sm-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="">
                                                                    </figure>
                                                                    <figure data-thumb="assets/images/products/small-2.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/deals-sm-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" title="">
                                                                    </figure>
                                                                    <figure data-thumb="assets/images/products/small-3.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/deals-sm-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" title="">
                                                                    </figure>
                                                                    <figure data-thumb="assets/images/products/small-4.jpg" class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" src="assets/images/products/deals-sm-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" title="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.product-images-wrapper -->
                                                    </div>
                                                    <!-- /.media -->
                                                </div>
                                                <!-- .content-landscape-product-card-with-gallery -->
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .container-fluid -->
                                </div>
                                <!-- .products-carousel -->
                            </section>
                            <!-- .section-landscape-product-card-with-gallery -->
                            <div class="banners home4-banner techmarket-banner">
                                <div class="row">
                                    <div class="banner text-in-right">
                                        <a href="#">
                                            <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/4-1.jpg ); height: 484px;" class="banner-bg">
                                                <div class="caption">
                                                    <div class="banner-info">
                                                        <h3 class="title">Màn hình 4k
                                                            <br> đáp ứng mọi trải nghiệm
                                                            <br></h3>
                                                    </div>
                                                    <!-- .banner-info -->
                                                    <span class="banner-action button">Xem ngay</span>
                                                </div>
                                                <!-- .caption -->
                                            </div>
                                            <!-- .banner-bg -->
                                        </a>
                                    </div>
                                    <!-- .banner -->
                                    <div class="banner text-in-left">
                                        <a href="#">
                                            <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/4-2.jpg ); height: 484px;" class="banner-bg">
                                                <div class="caption">
                                                    <div class="banner-info">
                                                        <h3 class="title">No worry anymore
                                                            <br> with Fast Charge</h3>
                                                        <h4 class="subtitle">Discover up to 6000mAh in one device</h4>
                                                    </div>
                                                    <!-- .banner-info -->
                                                    <span class="banner-action button">Mua ngay</span>
                                                </div>
                                                <!-- .caption -->
                                            </div>
                                            <!-- .banner-bg -->
                                        </a>
                                    </div>
                                    <!-- .banner -->
                                </div>
                                <!-- .row -->
                            </div>
                            <!-- .banners -->
                            <div class="row section-products-carousel-widget-with-tabs">
                                <div class="products-carousel-with-brands">
                                    <section class="section-landscape-products-widget-carousel">
                                        <header class="section-header">
                                            <h2 class="section-title">Sản phẩm được đánh giá cao</h2>
                                        </header>
                                        <div class="products-carousel">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-1">
                                                    <div class="products">
                                                        <div class="landscape-product-widget product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 50.99</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">26.99</span>
                                                                            </del>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <div class="landscape-product-widget product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 50.99</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">26.99</span>
                                                                            </del>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <div class="landscape-product-widget product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 50.99</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">26.99</span>
                                                                            </del>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <div class="landscape-product-widget product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 50.99</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">26.99</span>
                                                                            </del>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .products-carousel -->
                                    </section>
                                    <!-- .section-landscape-products-widget-carousel -->
                                    <div class="columns-2 section-brands">
                                        <header class="section-header">
                                            <h2 class="section-title">Featured Brands</h2>
                                        </header>
                                        <div class="brands">
                                            <div class="item">
                                                <a href="#">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>apple</h4>
                                                            </div>
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="assets/images/brands/1.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>bosch</h4>
                                                            </div>
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="assets/images/brands/2.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>cannon</h4>
                                                            </div>
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="assets/images/brands/3.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>connect</h4>
                                                            </div>
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="connect" src="assets/images/brands/4.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>galaxy</h4>
                                                            </div>
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="assets/images/brands/5.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>gopro</h4>
                                                            </div>
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="assets/images/brands/6.png">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .section-brands -->
                                </div>
                                <div class="products-carousel-tabs-block">
                                    <section class="section-hot-new-arrivals section-products-carousel-tabs">
                                        <div class="section-products-carousel-tabs-wrap">
                                            <header class="section-header">
                                                <h2 class="section-title">Sản phẩm mới nhất 2024!</h2>
                                                <ul role="tablist" class="nav justify-content-end">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#top-20" data-toggle="tab" role="tab" aria-controls="top-20">Top 20</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#laptops-computers" data-toggle="tab" role="tab" aria-controls="laptops-computers">Laptops</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#video-cameras" data-toggle="tab" role="tab" aria-controls="video-cameras">Bàn phím</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#audio-video" data-toggle="tab" role="tab" aria-controls="audio-video">Chuột</a>
                                                    </li>
                                                </ul>
                                            </header>
                                            <!-- .section-header -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="top-20">
                                                    <div class="products-carousel carousel-tabs-with-no-hover section-products-carousel-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-4">
                                                                <div class="products">
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/11.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .slick-dots -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div role="tabpanel" class="tab-pane" id="audio-video">
                                                    <div class="products-carousel carousel-tabs-with-no-hover section-products-carousel-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-4">
                                                                <div class="products">
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/11.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .slick-dots -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div role="tabpanel" class="tab-pane" id="laptops-computers">
                                                    <div class="products-carousel carousel-tabs-with-no-hover section-products-carousel-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-4">
                                                                <div class="products">
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/11.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .slick-dots -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div role="tabpanel" class="tab-pane" id="video-cameras">
                                                    <div class="products-carousel carousel-tabs-with-no-hover section-products-carousel-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-4">
                                                                <div class="products">
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/11.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .slick-dots -->
                                                </div>
                                                <!-- .tab-pane -->
                                            </div>
                                            <!-- .tab-content -->
                                        </div>
                                        <!-- .section-products-carousel-tabs-wrap -->
                                    </section>
                                    <!-- .section-products-carousel-tabs -->
                                    <section class="section-hot-new-arrivals section-products-carousel-tabs">
                                        <div class="section-products-carousel-tabs-wrap">
                                            <header class="section-header">
                                                <h2 class="section-title">Tai nghe & Loa</h2>
                                                <ul role="tablist" class="nav justify-content-end">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#top-20-2" data-toggle="tab" role="tab" aria-controls="top-20-2">Top 20</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#audio-video-2" data-toggle="tab" role="tab" aria-controls="audio-video-2">Tai nghe</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#laptops-computers-2" data-toggle="tab" role="tab" aria-controls="laptops-computers-2">Loa</a>
                                                    </li>
                                                </ul>
                                            </header>
                                            <!-- .section-header -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="top-20-2">
                                                    <div class="products-carousel carousel-tabs-with-no-hover section-products-carousel-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-4">
                                                                <div class="products">
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/11.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .slick-dots -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div role="tabpanel" class="tab-pane" id="audio-video-2">
                                                    <div class="products-carousel carousel-tabs-with-no-hover section-products-carousel-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-4">
                                                                <div class="products">
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/11.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .slick-dots -->
                                                </div>
                                                <!-- .tab-pane -->
                                                <div role="tabpanel" class="tab-pane" id="laptops-computers-2">
                                                    <div class="products-carousel carousel-tabs-with-no-hover section-products-carousel-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-4">
                                                                <div class="products">
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/11.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product product-featured">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img width="224" height="197" src="assets/images/products/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        </a>
                                                                        <div class="techmarket-product-rating">
                                                                            <div class="star-rating" title="Rated 0 out of 5">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(5)</span>
                                                                        </div>
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce -->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .slick-dots -->
                                                </div>
                                                <!-- .tab-pane -->
                                            </div>
                                            <!-- .tab-content -->
                                        </div>
                                        <!-- .section-products-carousel-tabs-wrap -->
                                    </section>
                                    <!-- .section-products-carousel-tabs -->
                                </div>
                            </div>
                            <section class="section-product-cards-carousel-tabs stretch-full-width section-products-carousel-tabs">
                                <div class="section-products-carousel-tabs-wrap">
                                    <header class="section-header">
                                        <h2 class="section-title">Nhanh tay!
                                            <span>Khuyến mại đặc biệt!</span>
                                        </h2>
                                        <ul role="tablist" class="nav justify-content-center">
                                            <li class="nav-item"><a class="nav-link active" href="#cameras" data-toggle="tab">Cameras</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#audio" data-toggle="tab">Audio</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#gps-navigation" data-toggle="tab">GPS &amp; Navigation</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#tv-video" data-toggle="tab">TV &amp; Video</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#cell-phones" data-toggle="tab">Cell Phones</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#computers" data-toggle="tab">Computers</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#accessories" data-toggle="tab">Accessories</a></li>
                                        </ul>
                                    </header>
                                    <div class="tab-content">
                                        <div id="cameras" class="tab-pane active" role="tabpanel">
                                            <div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1160,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce columns-3">
                                                        <div class="products">
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">65UH7700 65-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-3.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .products-->
                                                    </div>
                                                    <!-- .woocommerce-->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="audio" class="tab-pane" role="tabpanel">
                                            <div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1160,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce columns-3">
                                                        <div class="products">
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-3.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">65UH7700 65-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .products-->
                                                    </div>
                                                    <!-- .woocommerce-->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="gps-navigation" class="tab-pane" role="tabpanel">
                                            <div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1160,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce columns-3">
                                                        <div class="products">
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-3.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">65UH7700 65-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .products-->
                                                    </div>
                                                    <!-- .woocommerce-->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tv-video" class="tab-pane" role="tabpanel">
                                            <div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1160,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce columns-3">
                                                        <div class="products">
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">65UH7700 65-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-3.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .products-->
                                                    </div>
                                                    <!-- .woocommerce-->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="cell-phones" class="tab-pane" role="tabpanel">
                                            <div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1160,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce columns-3">
                                                        <div class="products">
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">65UH7700 65-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-3.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .products-->
                                                    </div>
                                                    <!-- .woocommerce-->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="computers" class="tab-pane" role="tabpanel">
                                            <div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1160,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce columns-3">
                                                        <div class="products">
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">65UH7700 65-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-3.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .products-->
                                                    </div>
                                                    <!-- .woocommerce-->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="accessories" class="tab-pane" role="tabpanel">
                                            <div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1160,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce columns-3">
                                                        <div class="products">
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-3.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD Crystal Colour HDR Smart TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A++</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">65UH7700 65-Inch 4K Ultra HD Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55UP130 55-Inch 4K Ultra HD Roku Smart LED TV</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <img class="wp-post-image" src="assets/images/products/1-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link " href="single-product-fullwidth.html">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> $939.99</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">$627.99</span>
                                                                                </del>
                                                                            </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">UN40H5003 40-Inch 1080p LED TV with Backlight</h2>
                                                                            <div class="ribbon green-label">
                                                                                <span>A+</span>
                                                                            </div>
                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                                    <span style="width:0%">
                                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                            <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .products-->
                                                    </div>
                                                    <!-- .woocommerce-->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                    </div>
                                    <!-- .tab-content -->
                                </div>
                                <!-- .section-products-carousel-tabs-wrap -->
                            </section>
                            <!-- .section-product-cards-carousel-tabs-->
                            <section class="section-products-carousel-tabs">
                                <div class="section-products-carousel-tabs-wrap">
                                    <header class="section-header">
                                        <h2 class="section-title">Hot Best Sellers</h2>
                                        <ul role="tablist" class="nav justify-content-end">
                                            <li class="nav-item"><a class="nav-link active" href="#tab-59f89f0aa989c0" data-toggle="tab">Top 20</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#tab-59f89f0aa989c1" data-toggle="tab">Audio &amp; Video</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#tab-59f89f0aa989c2" data-toggle="tab">Laptops &amp; Computers</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#tab-59f89f0aa989c3" data-toggle="tab">Video Cameras</a></li>
                                        </ul>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="tab-content">
                                        <div id="tab-59f89f0aa989c0" class="tab-pane active" role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/15.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 399.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/13.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Drone WIFI FPV With 4K</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 789.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">999.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 262.81</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">399.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 309.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">459.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/16.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 262.81</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f0aa989c1" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 309.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">459.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 789.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">999.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 262.81</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">399.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/15.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 399.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/13.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Drone WIFI FPV With 4K</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/16.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 262.81</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f0aa989c2" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/13.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Drone WIFI FPV With 4K</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 309.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">459.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/16.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 262.81</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 789.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">999.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/15.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 399.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 262.81</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">399.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f0aa989c3" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/16.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 262.81</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 789.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">999.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/13.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Drone WIFI FPV With 4K</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 309.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">459.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/15.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 399.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 262.81</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">399.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                    </div>
                                    <!-- .tab-content -->
                                </div>
                                <!-- .section-products-carousel-tabs-wrap -->
                            </section>
                            <!-- .section-products-carousel-tabs -->
                            <div class="banner full-width-banner">
                                <a href="shop.html">
                                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/full-width.png ); height: 236px;" class="banner-bg">
                                        <div class="caption">
                                            <div class="banner-info">
                                                <h3 class="title">
                                                    <strong>Extremely Portable</strong>, learn
                                                    <br> to ride in just 3 minutes</h3>
                                                <h4 class="subtitle">Travel up to 22km in a single charge</h4>
                                            </div>
                                            <span class="banner-action button">Browse now
                                                <i class="feature-icon d-flex ml-4 tm tm-long-arrow-right"></i>
                                            </span>
                                        </div>
                                        <!-- /.caption -->
                                    </div>
                                    <!-- /.banner-b -->
                                </a>
                                <!-- /.section-header -->
                            </div>
                            <!-- /.banner -->
                            <div class="products-4-column-widgets">
                                <section id="section-products-carousel-1" class="section-landscape-products-widget-carousel type-3">
                                    <header class="section-header">
                                        <h2 class="section-title">Best Rated Products</h2>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-1">
                                                <div class="products">
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                </div>
                                                <!-- .products -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-landscape-products-widget-carousel -->
                                <section id="section-products-carousel-2" class="section-landscape-products-widget-carousel type-3">
                                    <header class="section-header">
                                        <h2 class="section-title">Virtual Reality Headsets</h2>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-1">
                                                <div class="products">
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                </div>
                                                <!-- .products -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-landscape-products-widget-carousel -->
                                <section id="section-products-carousel-3" class="section-landscape-products-widget-carousel type-3">
                                    <header class="section-header">
                                        <h2 class="section-title">Deals of the Day</h2>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-1">
                                                <div class="products">
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                </div>
                                                <!-- .products -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-landscape-products-widget-carousel -->
                                <section id="section-products-carousel-4" class="section-landscape-products-widget-carousel type-3">
                                    <header class="section-header">
                                        <h2 class="section-title">Video Cameras</h2>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-1">
                                                <div class="products">
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div>
                                                </div>
                                                <!-- .products -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-landscape-products-widget-carousel -->
                            </div>
                            <!-- .products-4-column-widgets -->
                            <section class="brands-carousel">
                                <h2 class="sr-only">Brands Carousel</h2>
                                <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                    <div class="brands">
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>apple</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="assets/images/brands/1.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>bosch</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="assets/images/brands/2.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>cannon</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="assets/images/brands/3.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>connect</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="connect" src="assets/images/brands/4.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>galaxy</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="assets/images/brands/5.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>gopro</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="assets/images/brands/6.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>handspot</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="handspot" src="assets/images/brands/7.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>kinova</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="kinova" src="assets/images/brands/8.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>nespresso</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="nespresso" src="assets/images/brands/9.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>samsung</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="samsung" src="assets/images/brands/10.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>speedway</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="speedway" src="assets/images/brands/11.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                        <div class="item">
                                            <a href="shop.html">
                                                <figure>
                                                    <figcaption class="text-overlay">
                                                        <div class="info">
                                                            <h4>yoko</h4>
                                                        </div>
                                                        <!-- /.info -->
                                                    </figcaption>
                                                    <img width="145" height="50" class="img-responsive desaturate" alt="yoko" src="assets/images/brands/12.png">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- .item -->
                                    </div>
                                </div>
                                <!-- .col-full -->
                            </section>
                            <!-- .brands-carousel -->
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