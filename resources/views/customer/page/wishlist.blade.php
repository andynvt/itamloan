@extends('customer.master')
@section('head')
    <title>Danh sách yêu thích | i Tâm Loan</title>
@endsection
@section('content')

<div class="main-wrapper">

    <!-- Start women-product Area -->
    <div class="p-3"></div>
    <section class="women-product-area pt-100" id="women">
        <div class="container">
            @if(Session::has('wl'))
            <div class="countdown-content pb-40">
                <div class="title text-center">
                    <h1 class="mb-10">Danh sách yêu thích</h1>
                    <p>Gợi ý: Click vào <span class="lnr lnr-trash"></span> để xoá sản phẩm khỏi danh sách yêu thích</p>
                </div>
            </div>
            <div class="row">

                @foreach($product_cart as $p)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 single-product">
                        <div class="content">
                            <a href="{{route('single',$p['item']['id'])}}">
                                <div class="content-overlay"></div>
                            </a>
                            <img class="content-image img-fluid d-block mx-auto img-cart"
                                 src="storage/product/{{$p['image']}}" alt="{{$p['item']['name']}}">
                            <div class="content-details fadeIn-bottom">
                                <div class="bottom d-flex align-items-center justify-content-center">
                                    <a href="{{route('delwl',$p['item']['id'])}}" onclick="return confirm('Bạn có chắc chắn?');"><span
                                                class="lnr lnr-trash"></span></a>
                                    <a href="{{route('addcart',$p['item']['id'])}}" class="add-to-cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="price text-center mb-3">
                            <a href="{{route('single',$p['item']['id'])}}">
                            <h4 class="pt-3 pb-2">{{$p['item']['name']}}</h4>
                                <h3 class="gia-ban">{{number_format( $p['price'] )}} ₫</h3>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            @else
                <div class="container">
                    <div class="text-heading text-center">
                        Danh sách yêu thích trống
                    </div>
                </div>
            @endif

        </div>
    </section>
    <div class="p-3"></div>

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
    <!-- End women-product Area -->

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

</div>
@endsection
