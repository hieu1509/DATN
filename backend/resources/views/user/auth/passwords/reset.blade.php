@extends('user.layout')

@section('styles')
    <style>
        /* Thiết lập container cho form */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Tiêu đề của trang */
        h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Định dạng cho các nhãn và input */
        form div {
            margin-bottom: 15px;
        }

        form label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #555;
        }

        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        /* Định dạng lỗi */
        form span {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }

        /* Nút gửi form */
        form button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #004080; /* Màu xanh dương trung bình */
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #003060; /* Màu đậm hơn khi hover */
        }

        /* Định dạng cho phần yêu cầu mật khẩu */
        #password-contain {
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        #password-contain h5 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .invalid {
            color: red;
        }

        .form-check {
            margin-bottom: 20px;
        }

        /* Responsive cho màn hình nhỏ */
        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h2 {
                font-size: 20px;
            }

            form button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
@endsection

@section('content')

    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            @include('user.partials.header')

            @include('user.partials.menu')
            <div class="container">
                <h2>Đặt lại mật khẩu</h2>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div>
                        <label>Email:</label>
                        <input type="email" name="email" value="{{ $email }}" required>
                        @if ($errors->has('email'))
                            <span>{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password-input">Mật khẩu</label>
                        <div class="position-relative auth-pass-inputgroup">
                            <input type="password" class="form-control pe-5 password-input" onpaste="return false"
                                placeholder="Nhập mật khẩu" id="password-input" aria-describedby="passwordInput"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                            <button
                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                        </div>
                        <div id="passwordInput" class="form-text">Mật khẩu phải có ít nhất 8 ký tự.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="confirm-password-input">Xác nhận mật khẩu</label>
                        <div class="position-relative auth-pass-inputgroup mb-3">
                            <input type="password" class="form-control pe-5 password-input" onpaste="return false"
                                placeholder="Xác nhận mật khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                id="confirm-password-input" required>
                            <button
                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                type="button" id="confirm-password-addon"><i class="ri-eye-fill align-middle"></i></button>
                        </div>
                    </div>

                    <div id="password-contain">
                        <h5>Mật khẩu phải chứa:</h5>
                        <p id="pass-length" class="invalid fs-12 mb-2">Tối thiểu <b>8 ký tự</b></p>
                        <p id="pass-lower" class="invalid fs-12 mb-2">Ít nhất một <b>ký tự viết thường</b> (a-z)</p>
                        <p id="pass-upper" class="invalid fs-12 mb-2">Ít nhất một <b>ký tự viết hoa</b> (A-Z)</p>
                        <p id="pass-number" class="invalid fs-12 mb-0">Ít nhất một <b>số</b> (0-9)</p>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                        <label class="form-check-label" for="auth-remember-check">Nhớ mật khẩu</label>
                    </div>

                    <div class="mt-4">
                        <button class="woocommerce-Button button" type="submit">Đặt lại mật khẩu</button>
                    </div>
                </form>
            </div>
            @include('user.partials.footer')
        </div>

        @include('user.partials.js')
    </body>
@endsection
