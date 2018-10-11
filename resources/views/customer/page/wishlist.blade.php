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
            <div class="countdown-content pb-40">
                <div class="title text-center">
                    <h1 class="mb-10">Danh sách yêu thích</h1>
                    <p>Gợi ý: Bấm dấu X để xoá sản phẩm khỏi danh sách yêu thích</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-product">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%208%20plus.jpg" alt="">
                        <span class="lnr lnr-cross lnr-custom cus-x" onclick="return confirm('Bạn có chắc chắn?');"></span>
                    </div>
                    <div class="price text-center">
                        <h4 class="pt-3 pb-2">iPhone 8 Plus 256GB Space Gray</h4>
                        <h3>25.000.000 ₫</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-product">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%208%20plus.jpg" alt="">
                        <span class="lnr lnr-cross lnr-custom cus-x" onclick="return confirm('Bạn có chắc chắn?');"></span>
                    </div>
                    <div class="price text-center">
                        <h4 class="pt-3 pb-2">iPhone 8 Plus 256GB Space Gray</h4>
                        <h3>25.000.000 ₫</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-product">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%208%20plus.jpg" alt="">
                        <span class="lnr lnr-cross lnr-custom cus-x" onclick="return confirm('Bạn có chắc chắn?');"></span>
                    </div>
                    <div class="price text-center">
                        <h4 class="pt-3 pb-2">iPhone 8 Plus 256GB Space Gray</h4>
                        <h3>25.000.000 ₫</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-product">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="source/img/element/iphone%208%20plus.jpg" alt="">
                        <span class="lnr lnr-cross lnr-custom cus-x" onclick="return confirm('Bạn có chắc chắn?');"></span>
                    </div>
                    <div class="price text-center">
                        <h4 class="pt-3 pb-2">iPhone 8 Plus 256GB Space Gray</h4>
                        <h3>25.000.000 ₫</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="p-3"></div>
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
