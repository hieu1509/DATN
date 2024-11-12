@extends('user.layout')

@section('css')
    <style>





        .slider-contact {
            display: flex;
            justify-content: center;
            align-items: center;
            /* Nếu muốn căn giữa theo cả chiều ngang và dọc */
        }

        .container .contact-index {
            background-image: url('/image/contact.jpg');
            background-size: cover;
            /* hoặc 'contain' nếu bạn muốn giữ tỉ lệ */
            background-repeat: no-repeat;
            width: 100%;
            /* Đảm bảo chiếm toàn bộ chiều rộng */
            height: 785.52px;
            /* Chiều cao cụ thể */
            position: relative;
            /* Đặt vị trí để hỗ trợ các thành phần con */
        }

        .contact-form {
            position: absolute;
            /* Đặt thẻ này ở vị trí tuyệt đối */
            top: 51%;
            /* Đặt vị trí từ trên xuống */
            left: 27%;
            /* Đặt vị trí từ bên trái */
            transform: translate(-50%, -50%);
            /* Giúp căn giữa thẻ */
            background-color: #f3f3f3;
            /* Màu nền của thẻ */
            padding: 20px;
            /* Khoảng cách bên trong */
            border-radius: 20px;
            padding-top: 52px;
            /* Bo góc cho thẻ */
            z-index: 10;
            height: 548.37px;
            /* Đảm bảo thẻ nằm trên ảnh */
            overflow: hidden;
            /* Giúp nội dung không bị tràn ra ngoài viền */
            border: 2px solid #a57d24;
            width: 733px;
            /* Đặt viền trong suốt */
            /* Viền gradient */
        }

        .contact-form h2 {
            font-weight: 400;
            color: #946423;
            text-align: center;
            font-size: 48px;
            line-height: 26px;
        }

        .contact-form p {
            text-align: center;
            margin-bottom: 20px;
            padding-top: 3%;
            font-size: 18px;
            font-weight: 400;
            line-height: 26px;
        }

        .container .contact-form .form-group {
            display: flex;
            gap: 5px;
            padding-top: 5px;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .container .contact-form .form-group {
            display: flex;
            gap: 5px;
            padding-top: 5px;
            justify-content: space-between;
            margin-bottom: 15px;
        }


        .container .contact-form .form-group {
            display: flex;
            gap: 5px;
            padding-top: 5px;
            justify-content: space-between;
            margin-bottom: 15px;
        }



        .container .contact-form .form-group input[type="text"],
        .container .contact-form .form-group input[type="email"] {
            width: 343px;
            height: 50px;
        }

        .container .contact-form .form-group input[type="tel"] {
            width: 344px;
            height: 50px;
        }

        #form-group1 {
            margin-bottom: 7px;
            /* Khoảng cách dưới form-group1 */
        }

        #form-group2 {
            margin-bottom: 7px;
            /* Khoảng cách dưới form-group2 */
        }

        #form-group3 {
            margin-bottom: 7px;
            /* Khoảng cách dưới form-group3 */
        }

        .form-group input,
        .form-group select {
            width: 344px;
            height: 51px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .form-footer {
            display: flex;
            align-items: center;
            /* Căn giữa các phần tử theo chiều dọc */
            justify-content: space-between;
            /* Tạo khoảng cách đều giữa các phần tử */
            gap: 15px;
            /* Khoảng cách giữa các phần tử, bạn có thể điều chỉnh giá trị này */

        }



        .form-footer button {
            background-color: #946423;
            color: white;
            height: 47px;
            font-family: 'Manrope', sans-serif;
            padding: 10px 20px;
            border: none;
            width: 189.89px;
            font-size: 18px;
            font-weight: 700;
            border-radius: 5px;
            cursor: pointer;
            line-height: 26px;
        }

        .form-footer button:hover {
            background-color: #7b5321;
        }

        .form-footer img {
            margin-right: 10px;
            flex-shrink: 0;
            /* Đảm bảo ảnh không bị co lại */
            width: 23px;
            height: 25px;
            /* Khoảng cách giữa ảnh và chữ */
        }

        .form-footer p {
            display: flex;
            align-items: center;
            /* Căn giữa văn bản và hình ảnh */
            margin: 0;
            font-family: 'Manrope', sans-serif;
            font-weight: 400;
            font-size: 21px;
            line-height: 26px;
            padding-bottom: 21px;
            color: #946423;
        }

        .form-footer p span {
            font-family: 'Manrope', sans-serif;
            font-weight: 400;
            font-size: 27px;
            line-height: 26px;
        }
    </style>
@endsection



@section('content')

    <body class="page home page-template-default">
        <div id="page" class="hfeed site">

            @include('user.partials.header')

            @include('user.partials.menu')

            <!-- .header-v2 -->
            <!-- ============================================================= Header End ============================================================= -->
            {{-- <div id="content" class="site-content">
            <div class="col-full">
                <div class="row">
                    <nav class="woocommerce-breadcrumb">
                        <a href="home-v1.html">Home</a>
                        <span class="delimiter">
                            <i class="tm tm-breadcrumbs-arrow-right"></i>
                        </span>
                        Contact V1
                    </nav>
                    <!-- .woocommerce-breadcrumb -->
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="type-page hentry">
                                <div class="entry-content">
                                    <div class="stretch-full-width-map">
                                        <iframe height="514" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.593303940039!2d-0.15470444843858283!3d51.53901886611164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ae62edd5771%3A0x27f2d823e2be0249!2sPrincess+Rd%2C+London+NW1+8JR%2C+UK!5e0!3m2!1sen!2s!4v1458827996435"></iframe>
                                    </div>
                                    <!-- .stretch-full-width-map -->
                                    <div class="row contact-info">
                                        <div class="col-md-9 left-col">
                                            <div class="text-block">
                                                <h2 class="contact-page-title">Leave us a Message</h2>
                                                <p>Maecenas dolor elit, semper a sem sed, pulvinar molestie lacus. Aliquam dignissim, elit non mattis ultrices,
                                                    <br> neque odio ultricies tellus, eu porttitor nisl ipsum eu massa.</p>
                                            </div>
                                            <div class="contact-form">
                                                <div role="form" class="wpcf7" id="wpcf7-f425-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response"></div>
                                                    <form class="wpcf7-form" novalidate="novalidate">
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="425" />
                                                            <input type="hidden" name="_wpcf7_version" value="4.5.1" />
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f425-o1" />
                                                            <input type="hidden" name="_wpnonce" value="e6363d91dd" />
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xs-12 col-md-6">
                                                                <label>First name
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <br>
                                                                <span class="wpcf7-form-control-wrap first-name">
                                                                    <input type="text" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" size="40" value="" name="first-name">
                                                                </span>
                                                            </div>
                                                            <!-- .col -->
                                                            <div class="col-xs-12 col-md-6">
                                                                <label>Last name
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <br>
                                                                <span class="wpcf7-form-control-wrap last-name">
                                                                    <input type="text" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" size="40" value="" name="last-name">
                                                                </span>
                                                            </div>
                                                            <!-- .col -->
                                                        </div>
                                                        <!-- .form-group -->
                                                        <div class="form-group">
                                                            <label>Subject</label>
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap subject">
                                                                <input type="text" aria-invalid="false" class="wpcf7-form-control wpcf7-text input-text" size="40" value="" name="subject">
                                                            </span>
                                                        </div>
                                                        <!-- .form-group -->
                                                        <div class="form-group">
                                                            <label>Your Message</label>
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea aria-invalid="false" class="wpcf7-form-control wpcf7-textarea" rows="10" cols="40" name="your-message"></textarea>
                                                            </span>
                                                        </div>
                                                        <!-- .form-group-->
                                                        <div class="form-group clearfix">
                                                            <p>
                                                                <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" />
                                                            </p>
                                                        </div>
                                                        <!-- .form-group-->
                                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                    </form>
                                                    <!-- .wpcf7-form -->
                                                </div>
                                                <!-- .wpcf7 -->
                                            </div>
                                            <!-- .contact-form7 -->
                                        </div>
                                        <!-- .col -->
                                        <div class="col-md-3 store-info">
                                            <div class="text-block">
                                                <h2 class="contact-page-title">Our Store</h2>
                                                <address>
                                                    17 Princess Road
                                                    <br> London, Greater London
                                                    <br> NW1 8JR, UK
                                                </address>
                                                <h3>Hours of Operation</h3>
                                                <ul class="list-unstyled operation-hours inner-right-md">
                                                    <li class="clearfix">
                                                        <span class="day">Monday:</span>
                                                        <span class="pull-right flip hours">12-6 PM</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="day">Tuesday:</span>
                                                        <span class="pull-right flip hours">12-6 PM</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="day">Wednesday:</span>
                                                        <span class="pull-right flip hours">12-6 PM</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="day">Thursday:</span>
                                                        <span class="pull-right flip hours">12-6 PM</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="day">Friday:</span>
                                                        <span class="pull-right flip hours">12-6 PM</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="day">Saturday:</span>
                                                        <span class="pull-right flip hours">12-6 PM</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="day">Sunday</span>
                                                        <span class="pull-right flip hours">Closed</span>
                                                    </li>
                                                </ul>
                                                <h3>Careers</h3>
                                                <p class="inner-right-md">If you’re interested in employment opportunities at Techmarket, please email us: <a href="mailto:contact@yourstore.com">contact@yourstore.com</a></p>
                                            </div>
                                            <!-- .text-block -->
                                        </div>
                                        <!-- .col -->
                                    </div>
                                    <!-- .contact-info -->
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
        </div> --}}

            <div class="container">
                <div class="contact-index" style="width: 100%; padding-top: 17%;">
                    <div class="contact-form">
                        <h2>LIÊN HỆ & ĐÓNG GÓP</h2>
                        <p style="padding-top: 4%;">Hãy để TECHSHOP – thương hiệu máy tính và laptop hàng đầu – đồng hành
                            cùng bạn trong công việc và những khoảnh khắc đáng nhớ của cuộc sống.</p>
                        <form action="{{ route('MailContact') }}" method="POST">
                            @csrf
                            <div class="form-group" id="form-group1">
                                <input type="text" name="name" placeholder="Họ tên (*)" required>
                                <input type="phone" name="phone" placeholder="Điện thoại (*)" required>
                            </div>
                            <div class="form-group" id="form-group2">
                                <input type="email" name="email" placeholder="Email (*)" required>
                                <select name="chu_de">
                                    <option>Chủ Đề Bạn Muốn</option>
                                    <option value="liên hệ hỗ trợ">Liên Hệ Hỗ Trợ</option>
                                    <option value="đóng góp ý kiến">Đóng Góp Ý Kiến</option>
                                </select>
                            </div>
                            <div class="form-group" id="form-group3">
                                <input type="text" name="dia_chi" placeholder="Địa Chỉ" required>
                                <select name="phan_hoi">
                                    <option>Bạn muốn nhận phản hồi từ:</option>
                                    <option value="số điện thoại">Số Điện Thoại</option>
                                    <option value="gmail">Gmail</option>
                                </select>
                            </div>
                            <textarea name="contact" placeholder="Lời nhắn"></textarea>
                            <div class="form-footer">
                                <p><img src="/image/Vector2.png" alt="hotline"> <span>Hotline: 1900 066 808</span></p>
                                <button type="submit">Gửi Đi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #content -->

            @include('user.partials.footer')

            <!-- .site-footer -->
        </div>

        @include('user.partials.js')

    </body>
@endsection
