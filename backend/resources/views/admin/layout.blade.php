<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('velzon/assets/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('velzon/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- Plugins css -->
    <link href="{{ asset('velzon/assets/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('velzon/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('velzon/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('velzon/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('velzon/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('velzon/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('velzon/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Begin page -->
    @include('admin.layout.begin_page');
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    @include('admin.layout.tart_back_to_top');
    <!--end back-to-top-->

    <!--preloader-->
    @include('admin.layout.preloader');

    <!-- Theme Settings -->
    @include('admin.layout.theme_settings');

    <!-- JAVASCRIPT -->
    <script src="{{ asset('velzon/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('velzon/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('velzon/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('velzon/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('velzon/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('velzon/assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('velzon/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('velzon/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('velzon/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!-- ckeditor -->
    <script src="{{ asset('velzon/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <!-- dropzone js -->
    <script src="{{ asset('velzon/assets/libs/dropzone/dropzone-min.js') }}"></script>

    <script src="{{ asset('velzon/assets/js/pages/ecommerce-product-create.init.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('velzon/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('velzon/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('velzon/assets/js/app.js') }}"></script>
</body>

</html>
