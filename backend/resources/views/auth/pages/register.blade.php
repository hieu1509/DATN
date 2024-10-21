@extends('auth.layout')

@section('content')

    <body>
        <div class="auth-page-wrapper pt-5">

            <!-- auth page bg -->
            <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
                <div class="bg-overlay"></div>
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg>
                </div>
            </div>

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb-4 text-white-50">
                                <div>
                                    <a href="index.html" class="d-inline-block auth-logo">
                                        <img src="assets/images/logo-light.png" alt="" height="20">
                                    </a>
                                </div>
                                <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">
                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Tạo tài khoản mới</h5>
                                        <p class="text-muted">Nhận ngay tài khoản TechShop miễn phí của bạn</p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <!-- Form đăng ký -->
                                        <form class="needs-validation" method="POST" action="{{ route('register') }}"
                                            novalidate>
                                            @csrf <!-- Laravel CSRF bảo mật -->

                                            <div class="mb-3">
                                                <label for="username" class="form-label">Tên người dùng <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="username" name="name"
                                                    placeholder="Tên người dùng" required value="{{ old('name') }}">
                                                <div class="invalid-feedback">
                                                    Vui lòng nhập tên người dùng
                                                </div>
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="useremail" name="email"
                                                    placeholder="Địa chỉ Email" required value="{{ old('email') }}">
                                                <div class="invalid-feedback">
                                                    Vui lòng nhập email
                                                </div>
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Mật khẩu <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input type="password" class="form-control pe-5 password-input"
                                                        onpaste="return false" placeholder="Mật khẩu" id="password-input"
                                                        name="password" required>
                                                    <button
                                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                        type="button" id="password-addon"><i
                                                            class="ri-eye-fill align-middle"></i></button>
                                                    <div class="invalid-feedback">
                                                        Vui lòng nhập mật khẩu
                                                    </div>
                                                </div>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password-confirm">Xác nhận mật khẩu</label>
                                                <input type="password" class="form-control" id="password-confirm"
                                                    name="password_confirmation" placeholder="Xác nhận mật khẩu" required>
                                                <div class="invalid-feedback">
                                                    Vui lòng xác nhận mật khẩu
                                                </div>
                                            </div>

                                            <!-- Thêm các trường address và phone -->
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    placeholder="Địa chỉ" value="{{ old('address') }}">
                                            </div>
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Số điện thoại</label>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    placeholder="Số điện thoại" value="{{ old('phone') }}">
                                            </div>
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Đăng ký</button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <div class="signin-other-title">
                                                    <h5 class="fs-13 mb-4 title text-muted">Tạo tài khoản với</h5>
                                                </div>

                                                <div>
                                                    <button type="button"
                                                        class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                            class="ri-facebook-fill fs-16"></i></button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                            class="ri-google-fill fs-16"></i></button>
                                                    <button type="button"
                                                        class="btn btn-dark btn-icon waves-effect waves-light"><i
                                                            class="ri-github-fill fs-16"></i></button>
                                                    <button type="button"
                                                        class="btn btn-info btn-icon waves-effect waves-light"><i
                                                            class="ri-twitter-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Form -->
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            {{-- <div class="mt-4 text-center">
                            <p class="mb-0">Bạn đã có tài khoản? <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline"> Đăng nhập </a></p>
                        </div> --}}

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            <!-- footer -->
            {{-- <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- particles js -->
        <script src="assets/libs/particles.js/particles.js"></script>
        <!-- particles app js -->
        <script src="assets/js/pages/particles.app.js"></script>
        <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>
        <!-- password create init -->
        <script src="assets/js/pages/passowrd-create.init.js"></script>
    </body>
@endsection
