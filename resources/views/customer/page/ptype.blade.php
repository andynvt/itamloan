@extends('customer.master')
@section('head')
    <title>{{$tenloai[0]->type}} | i Tâm Loan</title>
@endsection
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">

        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h2 class="text-white">{{$tenloai[0]->type}}</h2>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('loai',$tenloai[0]->id)}}">{{$tenloai[0]->type}}</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="sidebar-categories">
                    {{--<div class="head">Loại sản phẩm</div>--}}
                    {{--<ul class="main-categories">--}}
                    {{--@foreach($gr_lssp as $gr => $value)--}}
                    {{--<li class="main-nav-list"><a data-toggle="collapse" style="font-weight: 600"--}}
                    {{--href="#loai-{{$value[0]->id}}" aria-expanded="false"--}}
                    {{--aria-controls="{{$gr}}"><span--}}
                    {{--class="lnr lnr-arrow-right"></span>{{$gr}}</a>--}}
                    {{--<ul class="collapse" id="loai-{{$value[0]->id}}" data-toggle="collapse"--}}
                    {{--aria-expanded="false"--}}
                    {{--aria-controls="{{$gr}}">--}}
                    {{--@foreach($value as $v)--}}
                    {{--<li class="main-nav-list child">--}}
                    {{--<a href="{{route('catalog',$v->ctlid)}}" style="z-index: 99999">{{$v->catalog}}</a>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                </div>
                <div class="sidebar-filter mt-0">
                    <div class="top-filter-head">LỌC SẢN PHẨM</div>
                    <div class="">
                        <ul class="filters">
                            <li class="main-nav-list common-filter" >
                                <a data-toggle="collapse" class="text-loai head" href="#loc_dong" aria-expanded="false"
                                   aria-controls="loc_dong">DÒNG</a>
                                <ul class="collapse filters button-group" id="loc_dong" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="loc_dong" data-filter-group="catalog">
                                    <li class="filter-list">
                                        <input class="pixel-radio is-checked" type="radio" value="*" id="all_catalog"
                                               name="catalog">
                                        <label for="all_catalog">Tất cả</label>
                                    </li>
                                    @foreach($dsp as $index => $value)
                                        <li class="filter-list">
                                            <input class="pixel-radio" type="radio" value=".ctl-{{$index}}"
                                                   id="ctl_{{$index}}" name="catalog">
                                            <label for="ctl_{{$index}}">{{$value}}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="main-nav-list common-filter">
                                <a data-toggle="collapse" class="text-loai head" href="#loc_mau" aria-expanded="false"
                                   aria-controls="loc_mau">MÀU</a>
                                <ul class="collapse filters button-group" id="loc_mau" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="loc_mau" data-filter-group="color">
                                    <li class="filter-list">
                                        <input class="pixel-radio is-checked" type="radio" value="*" id="all_color"
                                               name="color">
                                        <label for="all_color">Tất cả</label>
                                    </li>
                                    @foreach($color as $index => $value)
                                        <li class="filter-list">
                                            <input class="pixel-radio" type="radio" value=".cl-{{$value->colorid}}"
                                                   id="cl_{{$value->colorid}}" name="color">
                                            <label for="cl_{{$value->colorid}}">{{$value->color}}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="main-nav-list common-filter">
                                <a data-toggle="collapse" class="text-loai head" href="#loc_dl" aria-expanded="false"
                                   aria-controls="loc_dl">DUNG LƯỢNG</a>
                                <ul class="collapse filters button-group" id="loc_dl" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="loc_dl" data-filter-group="dl">
                                    <li class="filter-list">
                                        <input class="pixel-radio is-checked" type="radio" value="*" id="all_dl"
                                               name="dl">
                                        <label for="all_dl">Tất cả</label>
                                    </li>
                                    @foreach($dl as $index => $value)
                                    <li class="filter-list">
                                        <input class="pixel-radio" type="radio" value=".dl-{{$value}}GB"
                                               id="dl_{{$value}}" name="dl">
                                        <label for="dl_{{$value}}">{{$value}} GB
                                        </label>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="common-filter">
                        <div class="head">Giá</div>
                        <div class="price-range-area">
                            <div id="price-range"></div>
                            <div class="value-wrapper d-flex" style="color: black">
                                <div id="lower-value"></div>
                                <div class="to">-</div>
                                <div id="upper-value"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting div-sorts-btn-grp">
                        <select class="nice-select mr-auto">
                            <option value="">Sắp xếp</option>
                            <option value="tangdan">Giá tăng dần</option>
                            <option value="giamdan">Giá giảm dần</option>
                        </select>
                    </div>
                    <div class="sorting mr-auto">
                    </div>
                    {{$product->links('vendor.pagination.default')}}

                </div>
                <!-- End Filter Bar -->


                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="">
                        <div class="grid ">
                            @foreach($product as $p)
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 element-item dl-{{$p->dl}} cl-{{$p->colorid}} ctl-{{$p->ctlid}}" data-category="{{$p->color}}">
                                    {{--<span style="display: none" class="product-price">{{$p->price}}</span>--}}
                                    @if($p->percent == null)
                                        <span style="display: none" class="product-price">{{$p->price}}</span>
                                    @else
                                        <span style="display: none" class="product-price">{{$p->price - ($p->price * $p->percent / 100)}}</span>
                                    @endif
                                    <div class="single-product">
                                        <div class="content item-cart-ct">
                                            <a href="{{route('single',$p->id)}}">
                                                <div class="content-overlay"></div>
                                            </a>
                                            @if($p->percent != null)
                                                <span class="sp-discount">-{{$p->percent}}%</span>
                                            @endif
                                            <img class="content-image img-fluid d-block mx-auto img-cart"
                                                 src="storage/product/{{$p->image}}" alt="{{$p->name}}" >
                                            <div class="content-details fadeIn-bottom">
                                                <div class="bottom d-flex align-items-center justify-content-center">
                                                    <a href="{{route('addwl',$p->id)}}"><span
                                                                class="lnr lnr-heart"></span></a>
                                                    <a href="{{route('addcart',$p->id)}}" class="add-to-cart"><span
                                                                class="lnr lnr-cart"></span></a>
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{route('single',$p->id)}}" target="_blank">
                                                        <span class="fa fa-facebook" aria-hidden="true"></span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div ></div>
                                        <script>
                                            (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s); js.id = id;
                                                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=1687905644786313&autoLogAppEvents=1';
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>

                                        <div class="price text-center">
                                            <a href="{{route('single',$p->id)}}">
                                                <div class="p-1"></div>
                                                <h5>{{$p->name}}</h5>
                                                @if($p->percent != null)
                                                    <span class="de-text">{{number_format($p->price)}} ₫</span>
                                                    <h3 class="gia-ban">{{number_format( $p->price - $p->price * $p->percent / 100 )}}₫</h3>
                                                @else
                                                    <h3 class="gia-ban">{{number_format( $p->price )}}₫</h3>
                                                @endif
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </section>

                <!-- End Best Seller -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting div-sorts-btn-grp">
                        <select class="nice-select mr-auto">
                            <option value="">Sắp xếp</option>
                            <option value="tangdan">Giá tăng dần</option>
                            <option value="giamdan">Giá giảm dần</option>
                        </select>
                    </div>
                    <div class="sorting mr-auto">
                    </div>
                    {{$product->links('vendor.pagination.default')}}

                </div>
            </div>
        </div>
    </div>

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

