<div class="top-bar top-bar-v2">
    <div class="col-full">
        <ul id="menu-top-bar-left" class="nav menu-top-bar-left">
            <li class="menu-item animate-dropdown">
                <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">TechShop &#8211; Giao hàng
                    miễn phí</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="Quality Guarantee of products" href="shop.html">Đảm bảo chất lượng sản phẩm</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="Fast returnings program" href="track-your-order.html">Chương trình hoàn trả hàng nhanh</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="No additional fees" href="contact-v2.html">Không bổ sung chi phí</a>
            </li>
        </ul>
        <!-- .nav -->
        <ul id="menu-top-bar-right" class="nav menu-top-bar-right">
            <li class="hidden-sm-down menu-item animate-dropdown">
                <a title="Track Your Order" href="track-your-order.html">
                    <i class="tm tm-order-tracking"></i>Theo dõi đơn hàng</a>
            </li>
            <li class="menu-item">
                @if (Auth::check())
                    <a title="My Account" href="#">
                        <i class="tm tm-login-register"></i>{{ Auth::user()->name }}
                    </a>
                @else
                    <a title="My Account" href="{{ route('login.user') }}">
                        <i class="tm tm-login-register"></i>Đăng nhập & Đăng ký
                    </a>
                @endif
            </li>
            @if(Auth::check())
            <li class="menu-item">
                <a title="Logout" href="{{ route('logout.user') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="tm tm-logout"></i>Đăng xuất
                </a>
        
                <!-- Form Đăng Xuất Ẩn -->
                <form id="logout-form" action="{{ route('logout.user') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endif
        </ul>
        <!-- .nav -->
    </div>
    <!-- .col-full -->
</div>
<!-- .top-bar-v2 -->
