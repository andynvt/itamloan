<head>
    <title>{{$tenloai[0]->catalog}} | i Tâm Loan</title>
</head>
@extends('customer.master')
@section('content')
    <!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">

    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>{{$tenloai[0]->catalog}}</h1>
                <nav class="d-flex align-items-center justify-content-start">
                    <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="{{route('loai',$tenloai[0]->ptid)}}">{{$tenloai[0]->type}}<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="{{route('catalog',$tenloai[0]->id)}}">{{$tenloai[0]->catalog}}</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-4">
            <div class="sidebar-filter mt-0">
                <div class="top-filter-head head">Lọc sản phẩm</div>
                <div class="common-filter">
                    <div class="head">Loại</div>
                    <form action="#">
                        <ul>
                            @foreach($gr_lssp as $gr => $value)
                                <li class="main-nav-list li-text-loai">
                                    <a data-toggle="collapse" class="text-loai" href="#dong-{{$value[0]->id}}"
                                                             aria-expanded="false"
                                                             aria-controls="{{$gr}}"><span
                                                class="lnr lnr-arrow-right "></span>{{$gr}}</a>
                                    <ul class="collapse " id="dong-{{$value[0]->id}}" data-toggle="collapse"
                                        aria-expanded="false"
                                        aria-controls="{{$value[0]->type}}">
                                        @foreach($value as $v)
                                            <li class="filter-list">
                                                <input class="pixel-radio" type="radio"
                                                                           id="{{$v->ctlid}}" name="type">
                                                <label for="{{$v->ctlid}}">{{$v->catalog}}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Màu</div>
                    <form action="#">
                        <ul>
                            @foreach($color as $cl)
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="{{$cl->color}}" name="color"><label for="{{$cl->color}}">{{$cl->color}}</label></li>
                            @endforeach
                            </ul>
                    </form>
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
                    <select>
                        <option value="1">Sắp xếp</option>
                        <option value="1">Giá tăng dần</option>
                        <option value="1">Giá giảm dần</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select>
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
                <div class="row">
                    @foreach($product as $p)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 single-product">

                        <div class="content" >
                            <a href="{{route('single',$p->id)}}">
                            <div class="content-overlay"></div>
                            </a>
                            @if($p->percent != null)
                            <span class="sp-discount">-{{$p->percent}}%</span>
                            @endif
                            <img class="content-image img-fluid d-block mx-auto" src="storage/product/{{$p->image}}" alt="{{$p->name}}">
                            <div class="content-details fadeIn-bottom">
                                <div class="bottom d-flex align-items-center justify-content-center">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
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
                                <h3 class="gia-ban">{{number_format( $p->price - $p->price * $p->percent / 100 )}} ₫</h3>
                            </a>
                        </div>

                    </div>
                    @endforeach
                </div>
            </section>
            <!-- End Best Seller -->

            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select>
                        <option value="1">Sắp xếp</option>
                        <option value="1">Giá tăng dần</option>
                        <option value="1">Giá giảm dần</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select>
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

