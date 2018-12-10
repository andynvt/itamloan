
@extends('customer.master')
@section('head')
    <title>Chính sách bảo hành | i Tâm loan</title>
@endsection
@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>Chính sách bảo hành </h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('bh')}}">Chính sách bảo hành </a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!-- Start Checkout Area -->
    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wt_content"><p style="text-align:center"><span style="font-size:20px"><strong>QUY ĐỊNH BẢO HÀNH</strong></span><br>
                            --------------------</p>
                        <p>- Đối với các sản phẩm Apple chính hãng được nhập khẩu trực tiếp từ các nhà phân phối FPT,
                            Thế giới di động, Futer World, iCenter,... Sẽ được bảo hành 12 tháng theo chính sách của nhà
                            phân phối.</p>
                        <p>- Đối với các sản phẩm Apple xách tay (trừ iPhone) sẽ được bảo hành 12 tháng theo chính sách
                            của Apple trên toàn cầu.</p>
                        <p>- Đối với các sản phẩm iPhone mới hàng xách tay và các sản phẩm Apple đã qua sử dụng sẽ được
                            bảo hành theo chính sách của i-Tâm Loan.</p>
                        <p><strong>*ĐỔI MÁY MỚI:</strong></p>
                        <p>Các&nbsp;lỗi phát sinh&nbsp;do nhà sản xuất sẽ được đổi 1 máy khác theo chính sách của nhà
                            phân phối hoặc của i-Tâm Loan.</p>
                        <p><strong>*BẢO HÀNH PHẦN CỨNG:</strong></p>
                        <p>Các lỗi phát sinh&nbsp;cần phải&nbsp;mở máy ra xử lý như: Loa, Chuông, pin,...</p>
                        <p><strong>*BẢO HÀNH PHỤ KIỆN:</strong></p>
                        <p>Phụ kiện phải còn tem bảo hành, không đứt, gảy, cháy khét,...sẽ được bảo hành theo chính sách
                            của nhà phân phối hoặc i-Tâm Loan.</p>
                        <p><strong>*HỖ TRỢ CÀI ĐẶT PHẦN MỀM:</strong></p>
                        <p>Trong thời gian 01 năm (từ khi mua máy) Quý khách có nhu cầu cài lại hệ điều hành, games, ứng
                            dụng sẽ được i-Tâm Loan hỗ trợ miễn phí. Việc này được thực hiện thông qua máy tính.</p>
                        <p>&nbsp;</p>
                        <p><strong>KHÔNG ĐƯỢC BẢO HÀNH TRONG CÁC TRƯỜNG HỢP SAU</strong><br>
                            &nbsp;</p>
                        <p>1/. Sản phẩm bị mất tem niêm phong hoặc tem bảo hành bị rách, tẩy xóa, chấp vá và không thể
                            nhận dạng.</p>
                        <p>2/. Số Serial hoặc imei trên thân máy, khe sim và bên trong phần mềm của máy không trùng nhau
                            hoặc không trùng trên phiếu bảo hành.&nbsp;</p>
                        <p>3/. Sản phẩm bị tác động của ngoại lực như rơi rớt, va đập với vật cứng làm cho sản phẩm bị
                            biến dạng: móp, cong, vênh, lồi, trầy, xước, gãy, đứt, nứt, mẻ, bể...</p>
                        <p>4/. Sản phẩm bị chất lỏng xâm nhập như nước hay hóa chất làm cho sản phẩm bị ẩm mốc, rỉ sét,
                            làm giấy quỳ tím bên trong máy bị đổi màu.</p>
                        <p>5/. Sản phẩm để gần nhiệt độ cao làm cho sản phẩm bị nóng chảy, biến dạng...</p>
                        <p>6/. Sản phẩm bị thay thế phần cứng từ phía khách hàng hoặc do các đơn vị khác can thiệp ngoài
                            i-Tâm Loan.</p>
                        <p>7/. Sản phẩm iPhone, iPad, Macbook bị dính iCloud.</p>
                        <p>8/. Sản phẩm gặp sự cố, lỗi nằm ngoài phạm vi quản lý của i-Tâm Loan như: Sim lỗi, Sóng nhà
                            mạng yếu,...<br> <br> <em>**Ghi chú:<br>
                                - Thời gian bảo hành được ghi trong phần "THÔNG TIN BẢO HÀNH" trên phiếu bảo hành được
                                giao cho khách hàng ngay lúc khách hàng mua sản phẩm.<br>
                                - Khi máy bị lỗi, quý khách phải mang trực tiếp đến cửa hàng cùng với phiếu bảo hành,
                                chỉ được bảo hành khi phiếu bảo hành ghi thông tin đầy đủ và trùng với máy.<br>
                                - Thời gian nhận bảo hành: từ 10giờ đến 17giờ (trừ chủ nhật và ngày lễ).<br>
                                - Để tránh lỗi và sự cố ngoài ý muốn, xin quý khách vui lòng kiểm tra máy &amp; phụ kiện
                                trước khi rời khỏi cửa hàng. Sau khi quý khách rời khỏi cửa hàng, chúng tôi hoàn toàn
                                không chịu trách nhiệm về việc thất lạc, thiếu phụ kiện hoặc sự biến dạng trầy xước bên
                                ngoài của máy.</em><br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp;<br>
                            Hình minh họa phiếu bảo hành.</p>
                        <p><img alt="" src="http://www.itamloan.vn/image/catalog/bai_viet/PHIEU BAO HANH TAM LOAN.jpg"
                                style="width:98%"></p>
                        <p style="text-align: center;"><span style="font-size:26px"><font color="#ff0000"><span
                                            style="line-height:38.4px"><strong>PHIẾU BẢO HÀNH VIP</strong></span></font></span>
                        </p>
                        <p style="text-align: center;"><img alt=""
                                                            src="http://www.itamloan.vn/image/catalog/LOGO 2/vip.jpg"
                                                            style="width:98%"></p>
                        <p style="text-align: center;"><span style="color:#ff0000"><span style="font-size:26px"><strong>BẢO HÀNH VÀNG</strong></span></span>
                        </p>
                        <p style="text-align: center;"><img alt=""
                                                            src="http://www.itamloan.vn/image/catalog/LOGO 2/vang.jpg"
                                                            style="width:98%"></p></div>
                </div>
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