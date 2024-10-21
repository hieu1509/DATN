@extends('user.layout')

@section('content')
<body class="page home page-template-default">
    <div id="page" class="hfeed site">
        @include('user.partials.header')

        @include('user.partials.menu')
        <div id="content" class="site-content">
            <div class="col-full">
                <div class="row">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Trang chủ</a>
                        <span class="delimiter">
                            <i class="tm tm-breadcrumbs-arrow-right"></i>
                        </span>Tài khoản
                    </nav>
                    <!-- .woocommerce-breadcrumb -->
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="type-page hentry">
                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="customer-login-form">
                                            <span class="or-text">Hoặc</span>
                                            <div id="customer_login" class="u-columns col2-set">
                                                <div class="u-column1 col-1">
                                                    <h2>Đăng nhập</h2>
                                                    <!-- Form Đăng Nhập -->
                                                    <form method="POST" action="{{ route('login.post') }}" class="woocomerce-form woocommerce-form-login login">
                                                        @csrf
                                                        <p class="before-login-text">
                                                            Vui lòng đăng nhập để truy cập tài khoản của bạn.
                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <label for="email">Email
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="email" class="input-text" name="email" id="email" value="{{ old('email') }}" required />
                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <label for="password">Mật khẩu
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input class="input-text" type="password" name="password" id="password" required />
                                                        </p>
                                                        <p class="form-row">
                                                            <input class="woocommerce-Button button" type="submit" value="Đăng nhập" name="login">
                                                            <label for="rememberme" class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Nhớ tài khoản
                                                            </label>
                                                        </p>
                                                        <p class="woocommerce-LostPassword lost_password">
                                                            <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
                                                        </p>
                                                    </form>
                                                    <!-- .woocommerce-form-login -->
                                                </div>
                                                <!-- .col-1 -->
                                                <div class="u-column2 col-2">
                                                    <h2>Đăng ký</h2>
                                                    <!-- Form Đăng Ký -->
                                                    <form method="POST" action="{{ route('register.post') }}" class="register">
                                                        @csrf
                                                        <p class="before-register-text">
                                                            Tạo tài khoản mới để trải nghiệm mua sắm một cách tốt nhất.
                                                        </p>
                                                
                                                        <!-- Trường Tên Người Dùng -->
                                                        <p class="form-row form-row-wide">
                                                            <label for="name">Tên người dùng
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="text" value="{{ old('name') }}" id="name" name="name" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                        </p>
                                                
                                                        <!-- Trường Email -->
                                                        <p class="form-row form-row-wide">
                                                            <label for="email">Email
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="email" value="{{ old('email') }}" id="email" name="email" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                        </p>
                                                
                                                        <!-- Trường Địa Chỉ -->
                                                        <p class="form-row form-row-wide">
                                                            <label for="address">Địa chỉ
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="text" value="{{ old('address') }}" id="address" name="address" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                        </p>
                                                
                                                        <!-- Trường Số Điện Thoại -->
                                                        <p class="form-row form-row-wide">
                                                            <label for="phone">Số điện thoại
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="text" value="{{ old('phone') }}" id="phone" name="phone" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                        </p>
                                                
                                                        <!-- Trường Mật Khẩu -->
                                                        <p class="form-row form-row-wide">
                                                            <label for="password">Mật khẩu
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="password" id="password" name="password" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                        </p>
                                                
                                                        <!-- Trường Xác Nhận Mật Khẩu -->
                                                        <p class="form-row form-row-wide">
                                                            <label for="password_confirmation">Xác nhận mật khẩu
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="password" id="password_confirmation" name="password_confirmation" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                        </p>
                                                
                                                        <!-- Nút Đăng Ký -->
                                                        <p class="form-row">
                                                            <input type="submit" class="woocommerce-Button button" name="register" value="Đăng ký" />
                                                        </p>
                                                
                                                        <div class="register-benefits">
                                                            <h3>Đăng ký ngay hôm nay và bạn sẽ có thể:</h3>
                                                            <ul>
                                                                <li>Tăng tốc độ thanh toán của bạn</li>
                                                                <li>Theo dõi đơn hàng của bạn dễ dàng</li>
                                                                <li>Giữ lại hồ sơ về tất cả các giao dịch mua của bạn</li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                    <!-- .register -->
                                                </div>
                                                
                                                <!-- .col-2 -->
                                            </div>
                                            <!-- .col2-set -->
                                        </div>
                                        <!-- .customer-login-form -->
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
        @include('user.partials.footer')
    </div>
    
    @include('user.partials.js')
</body>
@endsection
