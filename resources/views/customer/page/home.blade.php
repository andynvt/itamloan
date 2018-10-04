<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <base href="{{asset('')}}">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="source/img/element/favicon.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>i Tâm Loan - We Love Apple</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="source/css/linearicons.css">
    <link rel="stylesheet" href="source/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/css/nice-select.css">
    <link rel="stylesheet" href="source/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="source/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="source/css/bootstrap.css">
    <link rel="stylesheet" href="source/css/main.css">
    <link rel="stylesheet" href="source/css/custom/style.css">

</head>

<body>
<!-- form search -->
<div id="home-search-form" style="display: hide">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="Nhập từ khoá..." />
        <button type="submit" class="btn-sr view-btn color-2"><span>Tìm kiếm</span> <span class="lnr lnr-arrow-right"></span></button>
    </form>
</div>
<a href="#" id="scroll" style="display: none;"><span></span></a>

<!-- Start Header Area -->
<header class="default-header">
    <div class="menutop-wrap">
        <div class="menu-top container">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="list ct-top">
                    <li><a href="tel:19006459">1900 6459 - 1000đ/phút</a></li>
                    <li><a href="mailto:vipcare@itamloan.vn">vipcare@itamloan.vn</a></li>
                </ul>
                <ul class="list li-icon">
                    <a href="#home-search-form">
                        <li class="nav-item" data-toggle="tooltip" title="Tìm kiếm">
                            <i class="lnr lnr-magnifier lnr-custom"></i>
                        </li>
                    </a>

                    <a href="{{route('wishlist')}}">
                        <li class="nav-item">
                            <span class="lnr lnr-heart lnr-custom"></span>
                            <div class="num-cart">
                                <span>9</span>
                            </div>
                        </li>
                    </a>
                    <a href="{{route('cart')}}">
                        <li>
                            <span class="lnr lnr-cart lnr-custom"></span>
                            <div class="num-cart">
                                <span>27</span>
                            </div>
                        </li>
                    </a>
                    <a href="{{route('user')}}">
                        <li>
                            <span class="lnr lnr-user lnr-custom"></span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="source/img/element/logo.png">
            </a>
            <a href="#home-search-form">
                <div class="nav-item-ct" data-toggle="tooltip" title="Tìm kiếm">
                    <i class="lnr lnr-magnifier lnr-custom"></i>
                </div>
            </a>
            <a href="{{route('wishlist')}}">
                <div class="nav-item-ct">
                    <span class="lnr lnr-heart lnr-custom"></span>
                    <div class="num-cart-ct">
                        <span>9</span>
                    </div>
                </div>
            </a>
            <a href="{{route('cart')}}">
                <div class="nav-item-ct">
                    <span class="lnr lnr-cart lnr-custom"></span>
                    <div class="num-cart-ct">
                        <span>27</span>
                    </div>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><a href="#home">KHUYẾN MÃI</a></li>
                    <li><a href="#iphone">IPHONE</a></li>
                    <li><a href="#ipad">IPAD</a></li>
                    <li><a href="#mac">MAC</a></li>
                    <li><a href="#watch">WATCH</a></li>
                    <li><a href="#" id="dn-index">ĐĂNG NHẬP</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Header Area -->

<!-- start banner Area -->
<!--<section class="banner-area relative" id="home">-->
<!--<div class="container-fluid">-->
<!--<div class="row fullscreen align-items-center justify-content-center">-->
<!--<div class="col-lg-6 col-md-12 d-flex align-self-end img-right no-padding">-->
<!--<img class="img-fluid" src="source/img/header-img.png" alt="">-->
<!--</div>-->
<!--<div class="banner-content col-lg-6 col-md-12">-->
<!--<h1 class="title-top"><span>Flat</span> 75%Off</h1>-->
<!--<h1 class="text-uppercase">-->
<!--It’s Happening <br> this Season!-->
<!--</h1>-->
<!--<button class="primary-btn text-uppercase"><a href="#">Purchase Now</a></button>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->
<!-- End banner Area -->
<div class="p-5"></div>
<!-- Start Count Down Area -->
<div class="countdown-area ection-gap section-gap" id="home">
    <div class="container">
        <div class="countdown-content">
            <div class="title text-center">
                <h1 class="mb-10">iPhone XS / XS MAX Giá cạnh tranh</h1>
                <p>Tổng hợp khuyến mãi</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4"></div>
            <div class="col-xl-6 col-lg-7">
                <div class="countdown d-flex justify-content-center justify-content-md-end" id="js-countdown">
                    <div class="countdown-item">
                        <div class="countdown-timer js-countdown-days time" aria-labelledby="day-countdown">

                        </div>

                        <div class="countdown-label" id="day-countdown">Ngày</div>
                    </div>

                    <div class="countdown-item">
                        <div class="countdown-timer js-countdown-hours" aria-labelledby="hour-countdown">

                        </div>

                        <div class="countdown-label" id="hour-countdown">Giờ</div>
                    </div>

                    <div class="countdown-item">
                        <div class="countdown-timer js-countdown-minutes" aria-labelledby="minute-countdown">

                        </div>

                        <div class="countdown-label" id="minute-countdown">Phút</div>
                    </div>

                    <div class="countdown-item">
                        <div class="countdown-timer js-countdown-seconds" aria-labelledby="second-countdown">

                        </div>

                        <div class="countdown-label text" id="second-countdown">Giây</div>
                    </div>
                    <a href="{{route('ad')}}" class="view-btn primary-btn2"><span>Xem chi tiết</span></a>
                    <img src="source/img/cd.png" class="img-fluid cd-img" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Count Down Area -->

<!-- Start category Area -->
<section class="category-area section-gap" id="iphone">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-10">
                <div class="title text-center">
                    <h1 class="mb-50">iPhone</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%20x.png" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">iPhone X</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">iPhone X</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-30">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%208%20plus.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">iPhone 8 Plus</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title">A beautiful mind.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">iPhone 8 Plus</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-30">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%208.png" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">iPhone 8</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title">A beautiful mind.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">iPhone 8</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%20x.png" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">iPhone X</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">iPhone X</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-30">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%208%20plus.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">iPhone 8 Plus</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title">A beautiful mind.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">iPhone 8 Plus</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-30">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%208.png" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">iPhone 8</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title">A beautiful mind.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">iPhone 8</h3>
                </a>
            </div>
            <a class="view-btn color-2 mt-20 w-100" style="font-size: 20px"><span>Xem thêm</span></a>



        </div>
    </div>
</section>
<!-- End category Area -->

<!-- Start men-product Area -->
<section class="men-product-area section-gap relative" id="ipad">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40">
                <div class="title text-center">
                    <h1 class="text-white mb-10">iPad</h1>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/ipad2018.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">iPad 2018</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center text-white">iPad 2018</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/ipad2018.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">iPad 2018</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center text-white">iPad 2018</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/ipad2018.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">iPad 2018</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center text-white">iPad 2018</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/ipad2018.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">iPad 2018</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center text-white">iPad 2018</h3>
                </a>
            </div>

            <!--<div class="col-lg-3 col-md-6 single-product">-->
            <!--<div class="content">-->
            <!--<div class="content-overlay"></div>-->
            <!--<img class="content-image img-fluid d-block mx-auto" src="source/img/l1.jpg" alt="">-->
            <!--<div class="content-details fadeIn-bottom">-->
            <!--<div class="bottom d-flex align-items-center justify-content-center">-->
            <!--<a href="#"><span class="lnr lnr-heart"></span></a>-->
            <!--<a href="#"><span class="lnr lnr-layers"></span></a>-->
            <!--<a href="#"><span class="lnr lnr-cart"></span></a>-->
            <!--<a href="#" data-toggle="modal" data-target="#exampleModal"><span-->
            <!--class="lnr lnr-frame-expand"></span></a>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="price">-->
            <!--<h5 class="text-white">Long Sleeve shirt</h5>-->
            <!--<h3 class="text-white">$150.00</h3>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
        </div>
    </div>
</section>
<!-- End men-product Area -->

<!-- Start women-product Area -->
<section class="women-product-area section-gap" id="mac">
    <div class="container">
        <div class="countdown-content pb-40">
            <div class="title text-center">
                <h1 class="mb-10">Mac</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/macbook.jpeg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Macbook 12"</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Macbook</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/macbook.jpeg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Macbook 12"</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Macbook</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/macbook.jpeg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Macbook 12"</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Macbook</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/macbook.jpeg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Macbook 12"</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Macbook</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/macbook.jpeg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Macbook 12"</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Macbook</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/macbook.jpeg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Macbook 12"</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Macbook</h3>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End women-product Area -->

<!-- Start related-product Area -->
<section class="related-product-area section-gap" id="watch">
    <div class="container">
        <div class="related-content">
            <div class="title text-center">
                <h1 class="mb-10">Apple Watch</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/aw.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Apple Watch Series 3</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Apple Watch Series 3</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/aw.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Apple Watch Series 3</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Apple Watch Series 3</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/aw.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Apple Watch Series 3</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Apple Watch Series 3</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/aw.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Apple Watch Series 3</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Apple Watch Series 3</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/aw.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Apple Watch Series 3</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Apple Watch Series 3</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-10">
                <a href="#" target="_blank">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/aw.jpg" alt="iPhone X">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title text-white">Apple Watch Series 3</h3>
                            <h3 class="p-2"></h3>
                            <h3 class="content-title text-white">Say hello to the future.</h3>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <h3 class="text-center">Apple Watch Series 3</h3>
                </a>
            </div>

        </div>
</section>
<!-- End related-product Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Thông Tin</h6>
                    <ul style="font-family: Helvetica,Arial, sans-serif;">
                        <li>Giới thiệu</li>
                        <li>Hướng dẫn thanh toán</li>
                        <li>Điều khoản sử dụng</li>
                        <li>Chính sách bảo mật</li>
                        <li>Tuyển dụng</li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Hỗ Trợ</h6>
                    <ul style="font-family: Helvetica,Arial, sans-serif;">
                        <li>Chính sách bảo hành</li>
                        <li>Chính sách đổi trả</li>
                        <li>Chính sách thu đổi máy</li>
                        <li>Chính sách vận chuyển</li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Dịch Vụ</h6>
                    <ul style="font-family: Helvetica,Arial, sans-serif;">
                        <li>Sửa chữa iPhone, iPad, Macbook</li>
                        <li>Mở mạng - unlock</li>
                        <li>Ép kính</li>
                        <li>Cài đặt iPhone, iPad, Macbook</li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Giới thiệu</h6>
                    <b>Showroom i-Tâm Loan</b><br>
                    <a style="color: #616E76 " href="https://www.google.com/maps/place/Showroom+i-T%C3%A2m+Loan/@10.0449458,105.7826973,17z/data=!3m1!4b1!4m5!3m4!1s0x31a0881d822023af:0x97c7f979608ccdf2!8m2!3d10.0449458!4d105.784886">46-48
                        Trần Văn Khéo, P.Cái khế, Q. Ninh Kiều, TP. Cần Thơ</a>
                    <div class="p-1"></div>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">

            <p class="footer-text m-0">Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                All rights reserved | Template by Colorlib</a></p>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="source/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="source/js/vendor/bootstrap.min.js"></script>
<script src="source/js/jquery.ajaxchimp.min.js"></script>
<script src="source/js/jquery.nice-select.min.js"></script>
<script src="source/js/jquery.sticky.js"></script>
<script src="source/js/ion.rangeSlider.js"></script>
<script src="source/js/jquery.magnific-popup.min.js"></script>
<script src="source/js/owl.carousel.min.js"></script>
<script src="source/js/main.js"></script>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
    // search form
    $(function() {
        $('a[href="#home-search-form"]').on('click', function(event) {
            event.preventDefault();
            $('#home-search-form').addClass('open');
            $('#home-search-form > form > input[type="search"]').focus();
        });

        $('#home-search-form, #home-search-form button.close').on('click keyup', function(event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });
    });
    // end search form
</script>

{{--dem nguoc khuyen mai--}}
<script>
    if (document.getElementById("js-countdown")) {

        var countdown = new Date("October 10 2018");

        function getRemainingTime(endtime) {
            var milliseconds = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor(milliseconds / 1000 % 60);
            var minutes = Math.floor(milliseconds / 1000 / 60 % 60);
            var hours = Math.floor(milliseconds / (1000 * 60 * 60) % 24);
            var days = Math.floor(milliseconds / (1000 * 60 * 60 * 24));

            return {
                'total': milliseconds,
                'seconds': seconds,
                'minutes': minutes,
                'hours': hours,
                'days': days
            };
        }

        function initClock(id, endtime) {
            var counter = document.getElementById(id);
            var daysItem = counter.querySelector('.js-countdown-days');
            var hoursItem = counter.querySelector('.js-countdown-hours');
            var minutesItem = counter.querySelector('.js-countdown-minutes');
            var secondsItem = counter.querySelector('.js-countdown-seconds');

            function updateClock() {
                var time = getRemainingTime(endtime);

                daysItem.innerHTML = time.days;
                hoursItem.innerHTML = ('0' + time.hours).slice(-2);
                minutesItem.innerHTML = ('0' + time.minutes).slice(-2);
                secondsItem.innerHTML = ('0' + time.seconds).slice(-2);

                if (time.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }

        initClock('js-countdown', countdown);
    };
</script>

</body>

</html>
