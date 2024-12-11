@extends('user.layout')

@section('content') 

    <body class="page home page-template-default">
        <div id="page" class="hfeed site">

            @include('user.partials.header')

            @include('user.partials.menu')

            <!-- .header-v2 -->
            <!-- ============================================================= Header End ============================================================= -->
            <div id="content" class="site-content">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="{{ route('users.index') }}">Trang chủ</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                            Lịch sử đơn hàng
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="type-page hentry">
                                    <header class="entry-header">
                                        <div class="page-header-caption">
                                            <h1 class="entry-title">Lịch sử đơn hàng</h1>
                                        </div>
                                    </header>
                                    <!-- .entry-header -->
                                    <div class="entry-content">
                                        <form class="woocommerce" method="post" action="#">
                                            <table class="shop_table cart wishlist_table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name"
                                                        style="color: black; font-size: 18px">
                                                            <span class="nobr">Mã đơn</span>
                                                        </th>
                                                        <th class="product-name"
                                                        style="color: black; font-size: 18px">
                                                            <span class="nobr">Ngày đặt</span>
                                                        </th>
                                                        <th class="product-name"
                                                        style="color: black; font-size: 18px">
                                                            <span class="nobr">Khách hàng</span>
                                                        </th>
                                                        <th class="product-name"
                                                        style="color: black; font-size: 18px">
                                                            <span class="nobr">
                                                              Trạng thái đơn hàng
                                                            </span>
                                                        </th>
                                                        <th class="product-stock-status"
                                                        style="color: black; font-size: 18px">
                                                            <span class="nobr">
                                                                Trạng thái thanh toán
                                                            </span>
                                                        </th>
                                                        <th class="product-price"
                                                        style="color: black; font-size: 18px">
                                                            <span class="nobr">
                                                               Tổng tiền
                                                            </span>
                                                        </th>
                                                        <th ></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($donhang as $items)
                                                        <tr>
                                                            <td class="product-name">
                                                                <a href="single-product-fullwidth.html">{{ $items->order->code }}</a>
                                                            </td>
                                                            <td class="product-name">
                                                                <a href="single-product-fullwidth.html">{{ $items->datetime }}</a>
                                                            </td>
                                                            <td class="product-name">
                                                                <a href="single-product-fullwidth.html">{{ $items->users['name'] }}</a>
                                                            </td>
                                                            <td class="product-name">
                                                                @if ($TrangThaiDonHang[$items->to_status] == "Hủy hàng")
                                                                    <span style="color: #d32f2f">{{ $TrangThaiDonHang[$items->to_status] }}</span>
                                                                @else
                                                                    <span class="wishlist-in-stock">{{ $TrangThaiDonHang[$items->to_status] }}</span>
                                                                @endif
                                                            </td>
                                                            <td class="product-name">
                                                                @if ($TrangThaiThanhToan[$items->from_status] == "Đã thanh toán")
                                                                    <span class="wishlist-in-stock">{{ $TrangThaiThanhToan[$items->from_status] }}</span>
                                                                @else
                                                                    <span style="color: #d32f2f">{{ $TrangThaiThanhToan[$items->from_status] }}</span>
                                                                @endif
                                                            </td>
                                                            <td class="product-price">
                                                                <ins>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span>{{ number_format($items->order->money_total, 0, ',', '.') }}VNĐ</span>
                                                                </ins>
                                                            </td>
                                                            <td style="display: flex; align-items: center; gap: 10px;">
                                                                <a 
                                                                    style="color: aliceblue; text-align: center; padding: 5px 10px;text-decoration: none;" 
                                                                    class="button" 
                                                                    href="{{ route('order.detail', $items->order->id) }}">
                                                                    Xem
                                                                </a>
                                                                <form action="{{ route('cart.editOrder', $items->id) }}" method="POST" style="margin: 0;">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    @if ($items->to_status === $typeChoXacNha)
                                                                        <input type="hidden" name="to_status" value="huy_hang">
                                                                        <button 
                                                                            style="color: aliceblue; padding: 5px 10px; background-color: #d32f2f; border: none; cursor: pointer;" 
                                                                            type="submit">
                                                                            Hủy hàng
                                                                        </button>
                                                                    @elseif($items->to_status === $typeDangVanChuyen)
                                                                        <input type="hidden" name="to_status" value="da_nhan_hang">
                                                                        <button 
                                                                            style="color: aliceblue; padding: 5px 10px; border: none; cursor: pointer;" 
                                                                            type="submit">
                                                                            Đã nhận hàng
                                                                        </button>
                                                                    @endif
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <div>
                                                        {{ $donhang->links() }}
                                                    </div>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="6">
                                                            <div class="yith-wcwl-share">
                                                                <h4 class="yith-wcwl-share-title">Share on:</h4>
                                                                <ul>
                                                                    <li style="list-style-type: none; display: inline-block;">
                                                                        <a title="Facebook" href="https://www.facebook.com/sharer.php?s=100&amp;p%5Btitle%5D=My+wishlist+on+Tech+Market&amp;p%5Burl%5D=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F" class="facebook" target="_blank"></a>
                                                                    </li>
                                                                    <li style="list-style-type: none; display: inline-block;">
                                                                        <a title="Twitter" href="https://twitter.com/share?url=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F&amp;text=" class="twitter" target="_blank"></a>
                                                                    </li>
                                                                    <li style="list-style-type: none; display: inline-block;">
                                                                        <a onclick="window.open(this.href); return false;" title="Pinterest" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F&amp;description=&amp;media=" class="pinterest" target="_blank"></a>
                                                                    </li>
                                                                    <li style="list-style-type: none; display: inline-block;">
                                                                        <a onclick="javascript:window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;" title="Google+" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F&amp;title=My+wishlist+on+Tech+Market" class="googleplus" target="_blank"></a>
                                                                    </li>
                                                                    <li style="list-style-type: none; display: inline-block;">
                                                                        <a title="Email" href="mailto:?subject=I+wanted+you+to+see+this+site&amp;body=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F&amp;title=My+wishlist+on+Tech+Market" class="email"></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <!-- .wishlist_table -->
                                        </form>
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
            <!-- .col-full -->
            @include('user.partials.footer')
        </div>
        <!-- #content -->

        @include('user.partials.js')

    </body>
@endsection