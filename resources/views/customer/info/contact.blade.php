
@extends('customer.master')
@section('head')
    <title>Liên hệ | i Tâm loan</title>
@endsection
@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>Liên hệ </h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('contact')}}">Liên hệ</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!-- Start Checkout Area -->
    <div class="container">
        <div id="content">
            <div>
                <h3>Thông tin liên hệ</h3>
                <hr>
            </div>
            <div class="col-12 row">
                <div class="col-lg-4 col-md-4 col-12">
                    <strong>i Tâm Loan - Chuyên Apple, Audio, Hitech và Phụ kiện Chính Hãng</strong><br>
                    <a target="_blank" href="https://www.google.com/maps/place/Showroom+i-T%C3%A2m+Loan/@10.0449458,105.7826973,17z/data=!3m1!4b1!4m5!3m4!1s0x31a0881d822023af:0x97c7f979608ccdf2!8m2!3d10.0449458!4d105.784886">
                        46-48, Trần Văn Khéo, p. Cái Khế, q. Ninh Kiều, Tp. Cần Thơ</a><br><br>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <strong>Thời gian mở cửa</strong><br> -
                    Bán hàng: Từ 7:30 ~ 21:30<br>
                    - Kỹ thuật: Từ 8:00 ~ 20:00<br>
                    - Bảo hành: Từ 8:00 ~ 17:00 <br><br>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <strong>Điện thoại: </strong><a href="tel:19006459">19006459</a><br>
                    <strong>Email: </strong> <a href="mailto:VipCare@itamloan.vn">vipcare@itamloan.vn</a><br>
                    <strong>Facebook: </strong> <a href="https://www.facebook.com/itamloan.vn/" target="_blank">itamloan.vn</a><br>
                    <strong>Website: </strong> <a href="http://itamloan.vn/">itamloan.vn</a>
                    <br>
                </div>
            </div>
            <hr>

            <div class="pt-3">
                <h3>Gửi liên hệ</h3>
                <hr>
            </div>
            <div class="row ">
                    <form class="row col-12" action="{{route('postcontact')}}" method="post">
                        <div class="col-lg-6">
                            <input type="text" name="name" placeholder="Họ tên " onfocus="this.placeholder=''"
                                   onblur="this.placeholder = 'Họ tên '" required class="common-input">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" placeholder="Email " onfocus="this.placeholder=''"
                                   onblur="this.placeholder = 'Email '" required class="common-input">
                        </div>
                        <div class="col-lg-12">
                                <textarea placeholder="Nội dung liên hệ" name="ctn" onfocus="this.placeholder=''"
                                          onblur="this.placeholder = 'Nội dung liên hệ'"
                                          class="common-textarea"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="view-btn color-2 mt-20 w-100"><span>GỬI LIÊN HỆ</span></button>
                        </div>
                        {{ csrf_field() }}
                    </form>
            </div>
        </div>
    </div>
    <!-- End Checkout Area -->
    <!-- Start Billing Details Form -->
    <div class="container">
    </div>
    <div class="p-3"></div>
    <!-- End Billing Details Form -->
@endsection