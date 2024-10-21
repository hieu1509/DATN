@extends('user.layout')

@section('styles')
    <style>
        /* Đặt chiều rộng và căn giữa form */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px; /* Tăng padding để có không gian thoáng hơn */
            background-color: #f9f9f9;
            border-radius: 10px; /* Thay đổi radius cho đẹp hơn */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Tăng độ mạnh của bóng */
        }

        /* Tiêu đề của trang */
        h5 {
            text-align: center;
            font-size: 26px; /* Tăng kích thước tiêu đề */
            margin-bottom: 15px; /* Điều chỉnh khoảng cách dưới tiêu đề */
            color: #004080; /* Màu xanh dương mà bạn thích */
        }

        /* Định dạng các nhãn và input */
        .form-label {
            font-size: 18px; /* Tăng kích thước nhãn */
            margin-bottom: 8px; /* Điều chỉnh khoảng cách dưới nhãn */
            color: #555;
        }

        /* Định dạng input email */
        .form-control {
            width: 100%;
            padding: 12px; /* Tăng padding cho input */
            border: 1px solid #ccc; /* Sử dụng màu border nhẹ hơn */
            border-radius: 5px; /* Thay đổi radius cho input */
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s; /* Thêm hiệu ứng khi focus */
        }

        .form-control:focus {
            border-color: #004080; /* Thay đổi màu border khi focus */
            outline: none; /* Loại bỏ outline mặc định */
        }

        /* Định dạng lỗi */
        .alert {
            color: #856404; /* Màu sắc cho thông báo cảnh báo */
            background-color: #fff3cd; /* Màu nền cho cảnh báo */
            border-color: #ffeeba; /* Màu border cho cảnh báo */
            border-radius: 5px; /* Thay đổi radius cho thông báo */
        }

        /* Nút gửi form */
        .btn-success {
            padding: 14px; /* Tăng padding cho nút */
            background-color: #004080; /* Màu xanh dương */
            border: none;
            border-radius: 5px;
            font-size: 18px; /* Tăng kích thước chữ cho nút */
            cursor: pointer;
            transition: background-color 0.3s; /* Thêm hiệu ứng khi hover */
        }

        .btn-success:hover {
            background-color: #003060; /* Màu đậm hơn khi hover */
        }

        /* Responsive cho màn hình nhỏ */
        @media (max-width: 600px) {
            .container {
                padding: 20px; /* Giảm padding cho màn hình nhỏ */
            }

            h5 {
                font-size: 24px; /* Giảm kích thước tiêu đề cho màn hình nhỏ */
            }
        }
    </style>
@endsection

@section('content')
    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            @include('user.partials.header')

            @include('user.partials.menu')
            <nav class="woocommerce-breadcrumb">
                <a href="{{ route('home') }}">Trang chủ</a>
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span>Quên mật khẩu
            </nav>
            <div class="col-lg-12">
                <div class="p-lg-5 p-4">
                    <h5 class="text-primary">Quên Mật Khẩu?</h5>
                    <p class="text-muted">Khôi phục mật khẩu với TechShop</p>

                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl">
                        </lord-icon>
                    </div>

                    <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                        Nhập email của bạn và hướng dẫn sẽ được gửi đến bạn!
                    </div>
                    <div class="p-2">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập địa chỉ email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="text-center mt-4">
                                <button class="woocommerce-Button button" type="submit">Gửi Link Khôi Phục</button>
                            </div>
                        </form><!-- end form -->
                    </div>

                    <div class="mt-5 text-center">
                        <p class="mb-0">Chờ đã, tôi nhớ mật khẩu của mình... <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline"> Nhấp vào đây </a> </p>
                    </div>
                </div>
            </div>
            @include('user.partials.footer')
        </div>

        @include('user.partials.js')
    </body>
@endsection
