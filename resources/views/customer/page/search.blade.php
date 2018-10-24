@extends('customer.master')
@section('head')
    <title>Tìm kiếm | i Tâm Loan</title>
@endsection
@section('content')


<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>Tìm kiếm: {{$key}}</h1>
                <!--<nav class="d-flex align-items-center justify-content-start">-->
                <!--<a href="#">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
                <!--<a href="#">iPhone</a>-->
                <!--</nav>-->
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-4">
            <div class="sidebar-filter mt-0">
                <div class="top-filter-head">Lọc sản phẩm</div>
                <div class="common-filter">
                    <div class="head">Loại</div>
                    <ul class="">
                        @foreach($gr_lssp as $gr => $value)
                            <li class="main-nav-list li-text-loai">
                                <a data-toggle="collapse" class="text-loai" href="#dong-{{$value[0]->id}}"
                                   aria-expanded="false"
                                   aria-controls="{{$gr}}"><span class="lnr lnr-arrow-right"></span> {{$gr}}</a>
                                <ul class="collapse filters" id="dong-{{$value[0]->id}}" data-toggle="collapse"
                                    aria-expanded="false"
                                    aria-controls="{{$gr}}">
                                    @foreach($value as $v)
                                        <li class="filter-list">
                                            <input class="pixel-radio" type="radio" value=".ctl-{{$v->ctlid}}" id="{{$v->ctlid}}" name="type">
                                            <label for="{{$v->ctlid}}">{{$v->catalog}}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="common-filter">
                    <div class="head">Màu</div>
                    <ul class="filters">
                        <li class="filter-list"><input class="pixel-radio"  value="*" type="radio" id="all-color" name="filter"><label for="all-color">Tất cả</label></li>
                        @foreach($color as $cl)
                            <li class="filter-list"><input class="pixel-radio"  value=".{{$cl->color}}" type="radio" id="{{$cl->color}}" name="filter"><label for="{{$cl->color}}">{{$cl->color}}</label></li>
                        @endforeach
                    </ul>
                </div>
                <div class="common-filter">
                    <div class="head">Giá</div>
                    <div class="price-range-area">
                        <div id="price-range"></div>
                        <div class="value-wrapper d-flex">
                            <div id="lower-value"></div>
                            <div class="to">-</div>
                            <div id="upper-value"></div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="p-2"></div>
                    <a href="#" class="view-btn color-2"><span>LỌC</span> <span class="lnr lnr-arrow-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-8">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select class="nice-select">
                        <option value="1">Sắp xếp</option>
                        <option value="1">Giá tăng dần</option>
                        <option value="1">Giá giảm dần</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select class="nice-select">
                        <option value="1">Hiển thị</option>
                        <option value="1">12</option>
                        <option value="1">24</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->


            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="grid">
                    @foreach($product as $p)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 element-item {{$p->color}} ctl-{{$p->ctlid}}" data-category="{{$p->color}}">
                            <div class="single-product">
                                <div class="content item-cart-ct">
                                    <a href="{{route('single',$p->id)}}">
                                        <div class="content-overlay"></div>
                                    </a>
                                    @if($p->percent != null)
                                        <span class="sp-discount">-{{$p->percent}}%</span>
                                    @endif
                                    <img class="content-image img-fluid d-block mx-auto img-cart"
                                         src="storage/product/{{$p->image}}" alt="{{$p->name}}">
                                    <div class="content-details fadeIn-bottom">
                                        <div class="bottom d-flex align-items-center justify-content-center">
                                            <a href="{{route('addwl',$p->id)}}"><span
                                                        class="lnr lnr-heart"></span></a>
                                            <a href="{{route('addcart',$p->id)}}" class="add-to-cart"><span
                                                        class="lnr lnr-cart"></span></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="price text-center">
                                    <a href="{{route('single',$p->id)}}">
                                        <div class="p-1"></div>
                                        <h5>{{$p->name}}</h5>
                                        @if($p->percent != null)
                                            <span class="de-text">{{number_format($p->price)}} ₫</span>
                                        @endif
                                        <h3 class="gia-ban">{{number_format( $p->price - $p->price * $p->percent / 100 )}}
                                            ₫</h3>
                                    </a>
                                </div>

                            </div>
                        </div>

                    @endforeach
                </div>
            </section>
            <!-- End Best Seller -->

            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select class="nice-select">
                        <option value="1">Sắp xếp</option>
                        <option value="1">Giá tăng dần</option>
                        <option value="1">Giá giảm dần</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select class="nice-select">
                        <option value="1">Hiển thị</option>
                        <option value="1">12</option>
                        <option value="1">24</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
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
