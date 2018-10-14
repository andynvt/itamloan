
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
    <form action="{{route('updatecart')}}" method="post">
        @foreach($product_cart as $p)
            {{ csrf_field() }}
            <input type="hidden" name="ids[]" value="{{$p['item']['id']}}">
            <div class="cart-single-item">
                <div class="row align-items-center">
                    <div class="col-md-5 col-12 mb-10">
                        <div class="product-item d-flex align-items-center">
                            <a href="{{route('single',$p['item']['id'])}}">
                                <img src="storage/product/{{$p['image']}}" class="img-fluid-cart" alt="">
                            </a>
                            <a href="{{route('single',$p['item']['id'])}}">
                                <h5 class="pl-2">{{$p['item']['name']}}</h5>
                            </a>

                        </div>
                    </div>
                    <div class="col-md-2 col-4 pr-0">
                        <div class="price">{{number_format( $p['price'] )}} ₫</div>
                    </div>
                    <div class="col-md-2 col-3 pr-0">
                        <div class="quantity-container d-flex align-items-center">
                            <input type="number" name="sls[]" class="quantity-amount" value="{{$p['qty']}}"/>
                            <div class="arrow-btn d-inline-flex flex-column">
                                <button class="increase arrow" type="button" title="Increase Quantity"><span
                                            class="lnr lnr-chevron-up"></span></button>
                                <button class="decrease arrow" type="button" title="Decrease Quantity"><span
                                            class="lnr lnr-chevron-down"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 pr-0">
                        <div class="total">{{number_format( $p['price'] * $p['qty'] )}} ₫</div>
                    </div>
                    <div class="col-md-1 col-1 x-del">
                        <a href="{{route('delcart',$p['item']['id'])}}"
                           onclick="return confirm('Xoá {{$p['item']['name']}} ra khỏi giỏ hàng ?')"
                           class="genric-btn default circle btn-x-cart" style="height: 30px;"><span
                                    class="lnr lnr-cross"></span></a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="cupon-area d-flex align-items-center justify-content-end flex-wrap">
            <button type="submit" class="view-btn color-2"><span>cập nhật giỏ hàng</span></button>
        </div>
    </form>

    <div class="subtotal-area d-flex align-items-center justify-content-end" style="border-bottom: none">
        <h6 class="title text-uppercase">Phí vận chuyển</h6>
        <div class="subtotal "><h6>{{number_format( $tax )}} ₫</h6></div>
    </div>


    <div class="subtotal-area d-flex align-items-center justify-content-end">
        <h4 class="title text-uppercase">tạm tính</h4>
        <div class="subtotal "><h4>{{number_format( $totalPriceFinal )}} ₫</h4></div>
    </div>


    <div class="shipping-area d-flex justify-content-end">
        <a href="{{route('checkout')}}" class="view-btn color-2 text-heading"><span>Thanh toán</span></a>
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
            @foreach($promo_product as $p)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-search-product d-flex">
                        <a href="{{route('single',$p->id)}}"><img src="storage/product/{{$p->image}}" alt="{{$p->name}}"></a>
                        <div class="desc">
                            <a href="{{route('single',$p->id)}}" class="text-km">{{$p->name}}</a>
                            <div class="price gia-ban" style="font-size: 15px;"><span class="lnr lnr-tag"></span>{{ number_format( $p->price - $p->price * $p->percent / 100 )  }} ₫</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Most Search Product Area -->
@endsection