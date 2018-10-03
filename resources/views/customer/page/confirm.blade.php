@extends('customer.master')
@section('content')


<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>Xác nhận đơn đặt hàng</h1>
                <nav class="d-flex align-items-center justify-content-start">
                    <a href="#">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="#">Giỏ hàng<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="#">Thanh toán<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="#">Xác nhận đơn đặt hàng</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Checkout Area -->
<div class="container">
    <p class="text-center text-confirm">Cảm ơn bạn đã đặt hàng tại iTamLoan. Đơn hàng của bạn đang được xử lý.<br>Chúng tôi sẽ thông báo cho bạn sớm nhất thông qua số điện thoại và email.</p>
    <div class="row mt-50">
        <div class="col-lg-6 col-md-6">
            <h3 class="billing-title mt-20 pl-15">Thông tin đơn hàng</h3>
            <table class="order-rable">
                <tr>
                    <td>Mã số</td>
                    <td>: 60235</td>
                </tr>
                <tr>
                    <td>Ngày</td>
                    <td>: 03/08/2018</td>
                </tr>
                <tr>
                    <td>Tổng tiền</td>
                    <td>: 100.000.000 ₫</td>
                </tr>
                <tr>
                    <td>Hình thức</td>
                    <td>: Thanh toán tại nhà</td>
                </tr>
            </table>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3 class="billing-title mt-20 pl-15">Địa chỉ giao hàng</h3>
            <table class="order-rable">
                <tr>
                    <td>Địa chỉ</td>
                    <td>: 56/8 panthapath</td>
                </tr>
                <tr>
                    <td>Quận / Huyện</td>
                    <td>: Dhaka</td>
                </tr>
                <tr>
                    <td>Tỉnh / Thành phố</td>
                    <td>: Bangladesh</td>
                </tr>
                <tr>
                    <td>Ghi chú</td>
                    <td>: 1205</td>
                </tr>
            </table>
        </div>
        <!--<div class="col-md-4">-->
        <!--<h3 class="billing-title mt-20 pl-15">Shipping Address</h3>-->
        <!--<table class="order-rable">-->
        <!--<tr>-->
        <!--<td>Street</td>-->
        <!--<td>: 56/8 panthapath</td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--<td>City</td>-->
        <!--<td>: Dhaka</td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--<td>Country</td>-->
        <!--<td>: Bangladesh</td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--<td>Postcode</td>-->
        <!--<td>: 1205</td>-->
        <!--</tr>-->
        <!--</table>-->
        <!--</div>-->
    </div>
</div>
<!-- End Checkout Area -->
<!-- Start Billing Details Form -->
<div class="container">
    <div class="billing-form">
        <div class="row">
            <div class="col-12">
                <div class="order-wrapper mt-50">
                    <h3 class="billing-title mb-10">Đơn hàng</h3>
                    <div class="order-list">
                        <div class="list-row d-flex justify-content-between">
                            <h6>Sản phẩm</h6>
                            <h6>Số lượng</h6>
                        </div>
                        <div class="list-row d-flex justify-content-between">
                            <div>iPhone 8 Plus 256GB Space Gray</div>
                            <div>x 02</div>
                        </div>
                        <div class="list-row d-flex justify-content-between">
                            <div>iPhone 8 Plus 256GB Space Gray</div>
                            <div>x 02</div>
                        </div>
                        <div class="list-row border-bottom-0 d-flex justify-content-between">
                            <h6>tổng cộng</h6>
                            <div class="total">100.000.000 ₫</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Billing Details Form -->

<!-- Start Most Search Product Area -->
<section class="section-half">
    <div class="container">
        <div class="organic-section-title text-center">
            <h3>ĐANG KHUYẾN MÃI</h3>
        </div>
        <div class="row mt-30">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="source/img/r9.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="">Pixelstore fresh Strawberry</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="source/img/r10.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="">Prixma MG2 Light Inkjet</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="source/img/r11.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="">Pixelstore fresh Cherry</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $240.00
                            <del>$340.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="source/img/r12.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="">Pixelstore fresh Beans</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $240.00
                            <del>$340.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Most Search Product Area -->


@endsection