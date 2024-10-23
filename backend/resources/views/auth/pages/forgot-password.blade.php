@extends('auth.layout')

@section('content')

    <body>

        <div class="auth-page-wrapper pt-5">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


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
                                        <h5 class="text-primary">Quên mật khẩu?</h5>
                                        <p class="text-muted">Đặt lại mật khẩu với TechShop</p>

                                        <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop"
                                            colors="primary:#0ab39c" class="avatar-xl"></lord-icon>

                                    </div>

                                    <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                                        Nhập email của bạn và hướng dẫn sẽ được gửi đến bạn!
                                    </div>
                                    <div class="p-2">
                                        <form action="{{ route('password.email') }}" method="POST">
                                            @csrf
                                            <div class="mb-4">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Nhập Email" required>
                                            </div>

                                            <div class="text-center mt-4">
                                                <button class="btn btn-success w-100" type="submit">Gửi liên kết đặt
                                                    lại</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">Đợi đã, tôi nhớ mật khẩu của mình...
                                    <a href="{{ route('login.user') }}"
                                        class="fw-semibold text-primary text-decoration-underline"> Nhấn vào đây </a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->
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
    </body>
@endsection
