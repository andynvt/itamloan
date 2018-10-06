<head>
    <title>{{$tenloai[0]->type}} | i Tâm Loan</title>
</head>
@extends('customer.master')
@section('content')
    <title>Shop</title>

    <!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">

    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>{{$tenloai[0]->type}}</h1>
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
                <div class="head">Loại sản phẩm</div>
                <ul class="main-categories">
                    <li class="main-nav-list"><a data-toggle="collapse" href="#iphone" aria-expanded="false"
                                                 aria-controls="iphone"><span
                                    class="lnr lnr-arrow-right"></span>iPhone<span class="number">(53)</span></a>
                        <ul class="collapse" id="iphone" data-toggle="collapse" aria-expanded="false"
                            aria-controls="iphone">
                            <li class="main-nav-list child"><a href="#">iPhone X<span class="number">(13)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">iPhone 8 Plus<span
                                            class="number">(09)</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="main-nav-list"><a data-toggle="collapse" href="#ipad" aria-expanded="false" aria-controls="ipad"><span class="lnr lnr-arrow-right"></span>iPad<span class="number">(53)</span></a>
                        <ul class="collapse" id="ipad" data-toggle="collapse" aria-expanded="false" aria-controls="ipad">
                            <li class="main-nav-list child"><a href="#">iPad 2018<span class="number">(13)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">iPad Pro 10.7"<span class="number">(09)</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-nav-list"><a data-toggle="collapse" href="#mac" aria-expanded="false" aria-controls="mac"><span class="lnr lnr-arrow-right"></span>Mac<span class="number">(53)</span></a>
                        <ul class="collapse" id="mac" data-toggle="collapse" aria-expanded="false" aria-controls="mac">
                            <li class="main-nav-list child"><a href="#">Macbook Pro<span class="number">(13)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">The New Macbook 12"<span class="number">(09)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">Macbook Air<span class="number">(17)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">iMac<span class="number">(01)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Mac Mini<span class="number">(11)</span></a></li>
                        </ul>
                    </li>
                    <li class="main-nav-list"><a data-toggle="collapse" href="#watch" aria-expanded="false" aria-controls="beverages"><span class="lnr lnr-arrow-right"></span>Watch<span class="number">(24)</span></a>
                        <ul class="collapse" id="watch" data-toggle="collapse" aria-expanded="false" aria-controls="watch">
                            <li class="main-nav-list child"><a href="#">Apple Watch Series 3<span class="number">(13)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">Apple Watch Series 3<span class="number">(09)</span></a>
                            </li>
                            <li class="main-nav-list child"><a href="#">Apple Watch Series 3<span class="number">(17)</span></a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="sidebar-filter mt-50">
                <div class="top-filter-head">Lọc sản phẩm</div>
                <div class="common-filter">
                    <div class="head">Đã chọn</div>
                    <ul>
                        <li class="filter-list"><i class="fa fa-window-close" aria-hidden="true"></i>iPhone</li>
                        <li class="filter-list"><i class="fa fa-window-close" aria-hidden="true"></i>Đen nhám</li>
                    </ul>
                </div>
                <div class="common-filter">
                    <div class="head">Loại</div>
                    <form action="#">
                        <ul>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="type-iphone" name="type"><label for="type-ipad">iPhone<span></span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="type-ipad" name="type"><label for="type-ipad">iPad<span></span></label>
                            </li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="type-mac" name="type"><label for="type-mac">Mac<span></span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="type-watch" name="type"><label for="type-watch">Watch<span></span></label>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Màu</div>
                    <form action="#">
                        <ul>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span></span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="silver" name="color"><label for="silver">Silver<span></span></label>
                            </li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="rosegold" name="color"><label for="rosegold">Rose Gold<span></span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="matteblack" name="color"><label for="matteblack">Matte Black<span></span></label>
                            </li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="jetblack" name="color"><label for="jetblack">Jet Black<span></span></label>
                            </li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Space Gray<span></span></label></li>
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Giá</div>
                    <div class="price-range-area">
                        <div id="price-range"></div>
                        <div class="value-wrapper d-flex">
                            <div id="lower-value"></div>
                            <!--<span>₫</span>-->
                            <div class="to">-</div>
                            <div id="upper-value"></div>
                            <!--<span>₫</span>-->

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
                <!--
<a href="#" class="grid-btn active"><i class="fa fa-th" aria-hidden="true"></i></a>
<a href="#" class="list-btn"><i class="fa fa-th-list" aria-hidden="true"></i></a>
-->
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
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 single-product">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <span class="sp-discount">-50%</span>
                            <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%20x.png" alt="iphone x 256gb">
                            <div class="content-details fadeIn-bottom">
                                <div class="bottom d-flex align-items-center justify-content-center">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="price text-center">
                            <div class="p-1"></div>
                            <h5>iPhone X iPhone XiPhone XiPhone XiPhone XiPhone XiPhone X</h5>
                            <span class="de-text">30.000.000 ₫</span>
                            <h3>25.000.000 ₫</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 single-product">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <span class="sp-discount">-50%</span>
                            <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%20x.png" alt="iphone x 256gb">
                            <div class="content-details fadeIn-bottom">
                                <div class="bottom d-flex align-items-center justify-content-center">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="price text-center">
                            <div class="p-1"></div>
                            <h5>iPhone X iPhone XiPhone XiPhone XiPhone XiPhone XiPhone X</h5>
                            <span class="de-text">30.000.000 ₫</span>
                            <h3>25.000.000 ₫</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 single-product">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%20x.png" alt="iphone x 256gb">
                            <div class="content-details fadeIn-bottom">
                                <div class="bottom d-flex align-items-center justify-content-center">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="price text-center">
                            <div class="p-1"></div>
                            <h5>iPhone X iPhone XiPhone XiPhone XiPhone XiPhone XiPhone X</h5>
                            <span class="de-text">30.000.000 ₫</span>
                            <h3>25.000.000 ₫</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 single-product">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <span class="sp-discount">-50%</span>
                            <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%20x.png" alt="iphone x 256gb">
                            <div class="content-details fadeIn-bottom">
                                <div class="bottom d-flex align-items-center justify-content-center">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="price text-center">
                            <div class="p-1"></div>
                            <h5>iPhone X iPhone XiPhone XiPhone XiPhone XiPhone XiPhone X</h5>
                            <span class="de-text">30.000.000 ₫</span>
                            <h3>25.000.000 ₫</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 single-product">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%20x.png" alt="iphone x 256gb">
                            <div class="content-details fadeIn-bottom">
                                <div class="bottom d-flex align-items-center justify-content-center">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="price text-center">
                            <div class="p-1"></div>
                            <h5>iPhone X iPhone XiPhone XiPhone XiPhone XiPhone XiPhone X</h5>
                            <span class="de-text">30.000.000 ₫</span>
                            <h3>25.000.000 ₫</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 single-product">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%20x.png" alt="iphone x 256gb">
                            <div class="content-details fadeIn-bottom">
                                <div class="bottom d-flex align-items-center justify-content-center">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="price text-center">
                            <div class="p-1"></div>
                            <h5>iPhone X iPhone XiPhone XiPhone XiPhone XiPhone XiPhone X</h5>
                            <span class="de-text">30.000.000 ₫</span>
                            <h3>25.000.000 ₫</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 single-product">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%20x.png" alt="iphone x 256gb">
                            <div class="content-details fadeIn-bottom">
                                <div class="bottom d-flex align-items-center justify-content-center">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="price text-center">
                            <div class="p-1"></div>
                            <h5>iPhone X iPhone XiPhone XiPhone XiPhone XiPhone XiPhone X</h5>
                            <span class="de-text">30.000.000 ₫</span>
                            <h3>25.000.000 ₫</h3>
                        </div>
                    </div>


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

