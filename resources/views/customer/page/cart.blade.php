
@extends('customer.master')
@section('head')
    <title>Giỏ hàng | i Tâm loan</title>
@endsection
@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>Giỏ hàng</h1>
                <nav class="d-flex align-items-center justify-content-start">
                    <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="{{route('cart')}}">Giỏ hàng</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Cart Area -->
@if(Session::has('cart'))
<div class="container">
    <div class="cart-title">
        <div class="row">
            <div class="col-md-5">
                <h4 class="ml-15">Sản phẩm</h4>
            </div>
            <div class="col-md-2">
                <h4>Đơn giá</h4>
            </div>
            <div class="col-md-2">
                <h4>Số lượng</h4>
            </div>
            <div class="col-md-2">
                <h4>Tổng</h4>
            </div>
            <div class="col-md-1">
                <h4>Xoá</h4>
            </div>
        </div>
    </div>
    <div class="cart-single-item">
        <div class="row align-items-center">
            <div class="col-md-5 col-12 mb-10">
                <div class="product-item d-flex align-items-center">
                    <img src="source/img/element/iphone%208%20plus.jpg" class="img-fluid-cart" alt="">
                    <h5 class="pl-2">iPhone 8 Plus 256GB Space Gray</h5>
                </div>
            </div>
            <div class="col-md-2 col-4 pr-0">
                <div class="price">25.000.000 ₫</div>
            </div>
            <div class="col-md-2 col-3 pr-0">
                <div class="quantity-container d-flex align-items-center">
                    <input type="text" class="quantity-amount" value="2" />
                    <div class="arrow-btn d-inline-flex flex-column">
                        <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-4 pr-0">
                <div class="total">50.000.000 ₫</div>
            </div>
            <div class="col-md-1 col-1 x-del">
                <button class="genric-btn default circle btn-x-cart" style="height: 30px;"><span class="lnr lnr-cross"></span></button>
            </div>
        </div>
    </div>
    <div class="cart-single-item">
        <div class="row align-items-center">
            <div class="col-md-5 col-12 mb-10">
                <div class="product-item d-flex align-items-center">
                    <img src="source/img/element/iphone%208%20plus.jpg" class="img-fluid-cart" alt="">
                    <h5 class="pl-2">iPhone 8 Plus 256GB Space Gray</h5>
                </div>
            </div>
            <div class="col-md-2 col-4 pr-0">
                <div class="price">25.000.000 ₫</div>
            </div>
            <div class="col-md-2 col-3 pr-0">
                <div class="quantity-container d-flex align-items-center">
                    <input type="text" class="quantity-amount" value="2" />
                    <div class="arrow-btn d-inline-flex flex-column">
                        <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-4 pr-0">
                <div class="total">50.000.000 ₫</div>
            </div>
            <div class="col-md-1 col-1 x-del">
                <button class="genric-btn default circle btn-x-cart" style="height: 30px;"><span class="lnr lnr-cross"></span></button>
            </div>
        </div>
    </div>
    <div class="cart-single-item">
        <div class="row align-items-center">
            <div class="col-md-5 col-12 mb-10">
                <div class="product-item d-flex align-items-center">
                    <img src="source/img/element/iphone%208%20plus.jpg" class="img-fluid-cart" alt="">
                    <h5 class="pl-2">iPhone 8 Plus 256GB Space Gray</h5>
                </div>
            </div>
            <div class="col-md-2 col-4 pr-0">
                <div class="price">25.000.000 ₫</div>
            </div>
            <div class="col-md-2 col-3 pr-0">
                <div class="quantity-container d-flex align-items-center">
                    <input type="text" class="quantity-amount" value="2" />
                    <div class="arrow-btn d-inline-flex flex-column">
                        <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-4 pr-0">
                <div class="total">50.000.000 ₫</div>
            </div>
            <div class="col-md-1 col-1 x-del">
                <button class="genric-btn default circle btn-x-cart" style="height: 30px;"><span class="lnr lnr-cross"></span></button>
            </div>
        </div>
    </div>

    <div class="cupon-area d-flex align-items-center justify-content-end flex-wrap">
        <a href="#" class="view-btn color-2"><span>cập nhật giỏ hàng</span></a>

        <!--<div class="cuppon-wrap d-flex align-items-center flex-wrap">-->
        <!--<div class="cupon-code">-->
        <!--<input type="text">-->
        <!--<button class="view-btn color-2"><span>Apply</span></button>-->
        <!--</div>-->
        <!--<a href="#" class="view-btn color-2 have-btn"><span>Have a Coupon?</span></a>-->
        <!--<a href="#" class="view-btn color-2"><span>Update Cart</span></a>-->

        <!--</div>-->
    </div>
    <div class="subtotal-area d-flex align-items-center justify-content-end">
        <h4 class="title text-uppercase">tạm tính</h4>
        <div class="subtotal ">100.000.000 ₫</div>
    </div>


    <div class="shipping-area d-flex justify-content-end">
        <!--<form action="#" class="d-inline-flex flex-column align-items-end">-->

        <!--<input type="text" placeholder="Postcode/Zipcode" onfocus="this.placeholder=''" onblur="this.placeholder = 'Postcode/Zipcode'" required class="common-input mt-10">-->
        <!--<button class="view-btn color-2 mt-10"><span>Update Details</span></button>-->
        <!--</form>-->
        <a href="#" class="view-btn color-2 text-heading"><span>Thanh toán</span></a>
    </div>
</div>
@else
    <div class="container">
        <div class="text-heading text-center">
            Giỏ hàng trống
        </div>
    </div>
@endif
<!-- End Cart Area -->

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