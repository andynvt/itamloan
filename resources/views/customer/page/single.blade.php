<head>
    <title>{{$s_product->id}}| i Tâm Loan</title>
</head>

@extends('customer.master')

@section('content')


<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>iPhone X 256GB Space Gray</h1>
                <nav class="d-flex align-items-center justify-content-start">
                    <a href="#">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="#">iPhone<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="#">iPhone X 256GB Space Gray</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Product Details -->
<div class="container">

    <div class="product-quick-view">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-12 pr-0">
                <div class="container-img">
                    <a class="gallery" href="source/img/element/iphone%20x.png"><img src="source/img/element/iphone%20x.png"></a>
                    <a class="gallery" href="source/img/element/iphone%208%20plus.jpg"><img src="source/img/element/iphone%208%20plus.jpg"></a>
                    <a class="gallery" href="source/img/element/iphone%208%20plus.jpg"><img src="source/img/element/iphone%208%20plus.jpg"></a>
                    <a class="gallery" href="source/img/element/iphone%20x.png"><img src="source/img/element/iphone%20x.png"></a>
                    <!--
<a class="gallery" href="source/img/element/iphone%208%20plus.jpg"><img src="source/img/element/iphone%208%20plus.jpg"></a>
<a class="gallery" data-flashy-type="video" href="https://youtu.be/dzNvk80XY9s">Video Giới
thiệu</a>
-->
                </div>
                <script src="source/js/jquery.flashy.min.js"></script>

                <script>
                    $('.gallery ').flashy({

                        // Applied when a new item is shown
                        showClass: 'fx-fadeIn',

                        // Applied when a new item is hidden
                        hideClass: 'fx-fadeOut',

                        // Applied when a new item is shown on prev event
                        prevShowClass: 'fx-bounceInLeft',

                        // Applied when a new item is shown on next event
                        nextShowClass: 'fx-bounceInRight',

                        // Applied when the current item is hidden on prev event
                        prevHideClass: 'fx-bounceOutRight',

                        // Applied when the current item is hidden on next event
                        nextHideClass: 'fx-bounceOutLeft',


                        // image, inline, ajax, iframe, video
                        // type: 'image',
                        //
                        // // show title
                        // title: true,
                        //
                        // // can be any CSS valid unit - px, %, and etc
                        // width: null,
                        // height: null,
                        //
                        // // enable/disable gallery mode
                        // gallery: true,
                        //
                        // // enable/disable infinite loop
                        // galleryLoop: true,
                        //
                        // // show item counter
                        // galleryCounter: true,
                        //
                        // // show prev and next navigation controls
                        // galleryPrevNext: true,
                        //
                        // // message used in the item counter. If empty, no counter will be displayed
                        // galleryCounterMessage: '[index] / [total]',
                        //
                        // // enable/disable swipe on desktop
                        // gallerySwipeDesktop: true,
                        //
                        // // enable/disable swipe on mobile devices
                        // gallerySwipeMobile: true,
                        //
                        // // set swipe threshold in px
                        // gallerySwipeThreshold: 100,
                        //
                        // // enable/disable keyboard navigation with arrows and close with ESC
                        // keyboard: true,
                        //
                        // // close lightbox via the close button or overlay click
                        // overlayClose: false,
                        //
                        // // additional css classes for customization
                        // themeClass: null,
                        //
                        // // enable/Disable video autoplay
                        // videoAutoPlay: false,
                        //
                        // // error message displayed when a content fails to load
                        // loadError: 'Sorry, an error occured while loading the content...'
                    });
                </script>

            </div>
            <div class="col-lg-7 col-md-7 col-12">
                <div class="quick-view-content">
                    <div class="top">
                        <h3 class="head">iPhone 8 Plus 256GB Space Gray</h3>
                        <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-7 p1-gradient-color">25.000.000₫</span>&nbsp;&nbsp;<h5 class="de-text">30.000.000₫</h5>
                        </div>
                    </div>
                    <div class="middle">
                        <div class="p-1"></div>
                        <h4>Khuyến mãi:</h4>
                        <p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.</p>
                    </div>
                    <div>
                        <form action="#">
                            <div class=" d-flex align-items-center mt-15">
                                Chọn màu: &nbsp;&nbsp;
                                <div class="default-select" id="default-select">
                                    <select style="display: none;">
                                        <option value="1">Gold</option>
                                        <option value="1">Silver</option>
                                        <option value="1">Rose Gold</option>
                                        <option value="1">Mattle Black</option>
                                        <option value="1">Jet Black</option>
                                        <option value="1">Space Gray</option>
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">Gold</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">Gold</li>
                                            <li data-value="1" class="option">Silver</li>
                                            <li data-value="1" class="option">Rose Gold</li>
                                            <li data-value="1" class="option">Matte Black</li>
                                            <li data-value="1" class="option">Jet Black</li>
                                            <li data-value="1" class="option">Space Gray</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity-container d-flex align-items-center mt-15">
                                Số lượng:
                                <input type="text" class="quantity-amount ml-15" value="1" />
                                <div class="arrow-btn d-inline-flex flex-column">
                                    <button class="increase arrow" type="button" title="Increase Quantity">
                                        <span class="lnr lnr-chevron-up"></span></button>
                                    <button class="decrease arrow" type="button" title="Decrease Quantity">
                                        <span class="lnr lnr-chevron-down"></span></button>
                                </div>

                            </div>
                            <div class="d-flex mt-20">
                                <a href="#" class="view-btn color-2"><span>Thêm vào giỏ</span></a>
                                <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="details-tab-navigation d-flex justify-content-center mt-30">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li>
                <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-expanded="true">Thông tin</a>
            </li>
            <li>
                <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="description" aria-expanded="true">Video</a>
            </li>
            <li>
                <a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification" role="tab" aria-controls="specification">Cấu hình</a>
            </li>
            <li>
                <a class="nav-link active" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Đánh giá</a>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description">
            <div class="description">
                <p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and still hangs in their house today</p>
                <p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less waste. The mission</p>
            </div>
        </div>
        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="description">
            <div class="description">
                <div class="videoWrapper">
                    <!-- Copy & Pasted from YouTube -->
                    <iframe width="560" height="349" src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification">
            <div class="specification-table">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td colspan="2"><strong>Apple iPhone 8 Plus 256GB</strong></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="20%">3G</td>
                        <td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
                    </tr>
                    <tr>
                        <td width="20%">4G</td>
                        <td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
                    </tr>
                    <tr>
                        <td width="20%">Bluetooth</td>
                        <td>5.0, A2DP, LE</td>
                    </tr>
                    <tr>
                        <td width="20%">Bộ Nhớ Trong</td>
                        <td>64GB/256GB</td>
                    </tr>
                    <tr>
                        <td width="20%">Camera Sau</td>
                        <td>12 MP, f/1.8, 28mm, tự động lấy nét nhận diện theo giai đoạn, OIS, 4 LED flash
                            (2 tone)
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">Camera Trước</td>
                        <td>7 MP, f/2.2, 1080p@30fps, 720p@240fps, nhận diện khuôn mặt, HDR, panorama</td>
                    </tr>
                    <tr>
                        <td width="20%">CHIP (CPU)</td>
                        <td>Apple A11 Bionic</td>
                    </tr>
                    <tr>
                        <td width="20%">Chuẩn PIN</td>
                        <td>Li-Ion 1821 mAh</td>
                    </tr>
                    <tr>
                        <td width="20%">Chuẩn WIFI</td>
                        <td>Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot</td>
                    </tr>
                    <tr>
                        <td width="20%">GPS</td>
                        <td>A-GPS, GLONASS, BDS, GALILEO</td>
                    </tr>
                    <tr>
                        <td width="20%">GPU</td>
                        <td>M11</td>
                    </tr>
                    <tr>
                        <td width="20%">Hệ Điều Hành</td>
                        <td>iOS 11</td>
                    </tr>
                    <tr>
                        <td width="20%">Hỗ Trợ Cảm Biến</td>
                        <td>Vân tay, gia tốc, la bàn, khoảng cách, con quay quy hồi, phong vũ biểu</td>
                    </tr>
                    <tr>
                        <td width="20%">Kích Thước</td>
                        <td>138.4 x 67.3 x 7.3 mm (5.45 x 2.65 x 0.29 in)</td>
                    </tr>
                    <tr>
                        <td width="20%">Kích Thước Màn Hình</td>
                        <td>750 x 1334 pixels, 4.7 inches (~326 ppi mật độ điểm ảnh)</td>
                    </tr>
                    <tr>
                        <td width="20%">Màn Hình</td>
                        <td>Cảm ứng điện dung LED-backlit IPS LCD, 16 triệu màu</td>
                    </tr>
                    <tr>
                        <td width="20%">NFC</td>
                        <td>Chỉ sử dụng Apple Pay</td>
                    </tr>
                    <tr>
                        <td width="20%">Quay Phim</td>
                        <td>2160p@24/30/60fps, 1080p@30/60/120/240fps</td>
                    </tr>
                    <tr>
                        <td width="20%">SIM</td>
                        <td>Nano-SIM</td>
                    </tr>
                    <tr>
                        <td width="20%">Thời Gian Chờ</td>
                        <td>240 giờ</td>
                    </tr>
                    <tr>
                        <td width="20%">Thời Gian Nghe Nhạc</td>
                        <td>40 giờ (không dây)</td>
                    </tr>
                    <tr>
                        <td width="20%">Thời Gian Thoại</td>
                        <td>14 giờ (3G)</td>
                    </tr>
                    <tr>
                        <td width="20%">Trọng Lượng</td>
                        <td>148 g (5.22 oz)</td>
                    </tr>
                    <tr>
                        <td width="20%">USB</td>
                        <td>2.0</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews">
            <div class="review-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="review-stat d-flex align-items-center flex-wrap">
                            <div class="review-overall">
                                <h3>Trung bình</h3>
                                <div class="main-review">4.0</div>
                                <span>(03 Đánh giá)</span>
                            </div>
                            <div class="review-count">
                                <h4>Có 03 đánh giá</h4>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>5 Sao</span>
                                    <div class="total-star five-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>01</span>
                                </div>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>4 Sao</span>
                                    <div class="total-star four-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>01</span>
                                </div>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>3 Sao</span>
                                    <div class="total-star three-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>01</span>
                                </div>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>2 Sao</span>
                                    <div class="total-star two-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>00</span>
                                </div>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>1 Sao&nbsp; </span>
                                    <div class="total-star one-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>00</span>
                                </div>
                            </div>
                        </div>
                        <div class="total-comment">
                            <div class="single-comment">
                                <div class="user-details d-flex align-items-center">
                                    <img src="source/img/organic-food/u1.png" class="img-fluid" alt="">
                                    <div class="user-name">
                                        <h5>Blake Ruiz</h5>
                                        <div class="total-star five-star d-flex align-items-center">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="user-comment">
                                    Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                </p>
                            </div>
                            <div class="single-comment">
                                <div class="user-details d-flex align-items-center">
                                    <img src="source/img/organic-food/u2.png" class="img-fluid" alt="">
                                    <div class="user-name">
                                        <h5>Logan May</h5>
                                        <div class="total-star four-star d-flex align-items-center">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="user-comment">
                                    Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                </p>
                            </div>
                            <div class="single-comment">
                                <div class="user-details d-flex align-items-center">
                                    <img src="source/img/organic-food/u3.png" class="img-fluid" alt="">
                                    <div class="user-name">
                                        <h5>Aaron Anderson</h5>
                                        <div class="total-star three-star d-flex align-items-center">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="user-comment">
                                    Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="add-review">
                            <h3>Gửi đánh giá</h3>
                            <div class="single-review-count mb-15 d-flex align-items-center">
                                <!--                                    <span>Số sao: &nbsp;</span>-->
                                <!--
                                <div class="total-star five-star d-flex align-items-center">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
-->
                                <div class="star-place">
                                    <fieldset class="rating ">
                                        <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Tuyệt vời - 5 sao"></label>
                                        <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Rất tốt - 4.5 sao"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Tốt - 4 sao"></label>
                                        <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Bình thường - 3.5 sao"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Ổn - 3 sao"></label>
                                        <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Có vẻ tệ - 2.5 sao"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Hơi tệ - 2 sao"></label>
                                        <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Tệ - 1.5 sao"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Quá tệ - 1 sao"></label>
                                        <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Cực kỳ tệ - 0.5 sao"></label>
                                    </fieldset>
                                </div>
                                <!--<span>Outstanding</span>-->
                                <script>
                                    $('.rating').on('change', function () {
                                        var star = $('.rating input:checked').val();
{{--//                        var id = '{{$places[0]->id}}';--}}
                                        $('.rating input').attr('disabled', 'disabled');

                                        // alert(star);
//                        $.ajax({
// type: 'GET',
// url: 'dg',
// dataType: "json",
// data: {id:id, star: star},
// success: function (data) {
// $('.rating input').attr('disabled', 'disabled');
// $('#cc').text(data[1] + "/5");
// $('#cc').next('b').text(data[0]);
// }
// });
                                    });
                                    //
                                    {{--// var mod = {{$avg_fb}} % {{$floor_fb}};--}}
                                    {{--// var fl = {{$floor_fb}};--}}
                                    // var flhalf = fl+0.5;
                                    // if(mod == 0){
                                    // $('.rating input[value="'+fl+'"]').attr('checked','checked');
                                    // }
                                    // else{
                                    // $('.rating input[value="'+flhalf+'"]').attr('checked','checked');
                                    // }
                                </script>
                            </div>
                            <form action="#" class="main-form">
                                <input type="text" placeholder="Tên" onfocus="this.placeholder=''" onblur="this.placeholder = 'Tên'" required class="common-input">
                                <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email'" class="common-input">
                                <input type="text" placeholder="Số điện thoại" onfocus="this.placeholder=''" onblur="this.placeholder = 'Số điện thoại'" required class="common-input">
                                <textarea placeholder="Nội dung đánh giá" onfocus="this.placeholder=''" onblur="this.placeholder = 'Nội dung đánh giá'" required class="common-textarea"></textarea>
                                <button class="view-btn color-2"><span>Gửi</span></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Details -->

<!-- Start Most Search Product Area -->
<section class="section-half">
    <div class="container">
        <div class="organic-section-title text-center">
            <h3>SẢN PHẨM CÓ LIÊN QUAN</h3>
        </div>
        <div class="row mt-30">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-search-product d-flex">
                    <a href="#"><img src="source/img/element/ipad2018.jpg" alt=""></a>
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
@endsection
