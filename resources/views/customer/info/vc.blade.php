
@extends('customer.master')
@section('head')
    <title>Chính sách vận chuyển | i Tâm loan</title>
@endsection
@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>Chính sách vận chuyển </h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('vc')}}">Chính sách vận chuyển </a>
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
                    <div class="wt_content">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td style="text-align:center">CHÍNH SÁCH VẬN CHUYỂN VÀ GIAO NHẬN</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>Sau đây&nbsp;<strong>Công ty TNHH MTV Công Nghệ Tâm Loan</strong>&nbsp;xin gửi tới
                                    quý khách hàng chính sách vận chuyển và giao hàng dành cho khách hàng mua sản
                                    phẩm.<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=""
                                                                                        src="http://itamloan.vn/Store/image/data/0%20iNews/giaohang.jpg"><br>
                                    <strong>1. PHẠM VI ÁP DỤNG:</strong><br> - Tất cả các khách hàng đến trực tiếp xem
                                    và mua hàng tại Công ty có nhu cầu giao hàng trực tiếp tại nhà.<br> <strong>2. HÌNH
                                        THỨC ÁP DỤNG:</strong><br> <strong>2.1. Giao hàng miễn phí :</strong><br> Giao
                                    hàng miễn phí trong phạm vi các quận trung tâm TP.Cần Thơ<br> – áp dụng cho đơn hàng
                                    giá trị từ 200.000 VNĐ trở lên.<br> <strong>2.2 . Giao hàng tính phí:</strong><br> -
                                    Ngoài trường hợp giao hàng miễn phí trên, các trường hợp còn lại sẽ được tính phí
                                    giao hàng theo bảng phí vận chuyển của hãng vận chuyển thứ 3 hoặc theo bảng phí của&nbsp;Công
                                    ty. Chi phí này sẽ được Công ty thông báo và xác nhận với quý khách trước khi quý
                                    khách tiến hành thanh toán và Công ty tiến hành gửi hàng.<br> <strong>3. THỜI GIAN
                                        GIAO HÀNG:</strong><br> - Thời gian giao hàng trong ngày tùy vào khoảng cách vận
                                    chuyển.<br> - Trong một số trường hợp khách quan Công ty có thể giao hàng chậm trễ
                                    do những điều kiện bất khả kháng như thời tiết xấu, điều kiện giao thông không thuận
                                    lợi, xe hỏng hóc trên đường giao hàng, trục trặc trong quá trình xuất hàng,..., các
                                    vấn đề trên đều có thông báo đến khách hàng.<br> - Trong thời gian chờ đợi nhận
                                    hàng, Quý khách có bất cứ thắc mắc gì về thông tin vận chuyển xin vui lòng liên hệ
                                    hotline: 1900 6459 của chúng tôi để nhận trợ giúp.<br> <strong>4. TRÁCH NHIỆM VỚI
                                        HÀNG HÓA VẬN CHUYỂN.</strong><br> - Công ty sẽ chịu trách nhiệm với hàng hóa và
                                    các rủi ro như mất mát hoặc hư hại của hàng hóa trong suốt quá trình vận chuyển hàng
                                    từ kho hàng chúng tôi đến quý khách.<br> - Quý khách có trách nhiệm kiểm tra hàng
                                    hóa khi nhận hàng. Khi phát hiện hàng hóa bị hư hại, trầy xước, bể vỡ, mốp méo, hoặc
                                    sai hàng hóa thì ký xác nhận tình trạng hàng hóa với Nhân viên giao nhận và thông
                                    báo ngay cho Bộ phận chăm sóc khách hàng theo số hotline: 1900 6459 của Công ty.<br>
                                    - Sau khi quý khách đã ký nhận hàng mà không ghi chú hoặc có ý kiến về hàng hóa.
                                    Công ty không có trách nhiệm với những yêu cầu đổi trả vì hư hỏng, trầy xước, bể vỡ,
                                    mốp méo, sai hàng hóa,… từ quý khách sau này.<br> - Nếu dịch vụ vận chuyển do quý
                                    khách chỉ định và lựa chọn thì quý khách sẽ chịu trách nhiệm với hàng hóa và các rủi
                                    ro như mất mát hoặc hư hại của hàng hóa trong suốt quá trình vận chuyển hàng từ kho
                                    hàng của Công ty đến quý khách. Khách hàng sẽ chịu trách nhiệm cước phí và tổn thất
                                    liên quan.<br> <strong>5. CÁC ĐIỀU KIỆN KHÁC</strong><br> - Chính sách giao hàng
                                    miễn phí không áp dụng đối với những sản phẩm được mua trong chương trình khuyến mại
                                    giờ vàng, giá sốc….<br> - Chi phí cầu đường, phí đỗ xe tại chung cư do khách hàng tự
                                    thanh toán.<br> - Công ty chỉ giao hàng cho đúng người nhận mà Quý khách hàng đã
                                    đăng ký khi mua hàng. Trong quá trình giao hàng nếu có sự thay đổi người nhận một
                                    cách không rõ ràng, chúng tôi có quyền từ chối giao hàng và yêu cầu quý khách hàng
                                    nhận hàng tại địa điểm của bán hàng của Công ty.<br> - Nếu địa chỉ giao hàng không
                                    rõ ràng, nằm trong ngõ ngách, hoặc ở những nơi nguy hiểm, những vùng đồi núi hiểm
                                    trở, phương tiện giao thông đi lại khó khăn, chúng tôi có quyền từ chối vận chuyển,
                                    giao nhận hàng trực tiếp.<br> - Trong các trường hợp bất khả kháng, do thiên tai, lũ
                                    lụt, hỏng hóc cầu phà …, chúng tôi không chịu trách nhiệm bồi thường thiệt hại phát
                                    sinh do giao hàng không đúng thời gian hoặc không vận chuyển hàng hóa đến địa điểm
                                    như đã thỏa thuận với khách hàng.<br> - Trường hợp chúng tôi đã vận chuyển hàng đến
                                    địa điểm giao nhận như thỏa thuận lúc mua hàng, nhưng vì một lý do nào đó khách hàng
                                    yêu cầu trả lại hàng thì lúc đó khách hàng phải chịu chi phí vận chuyển theo quy
                                    định của Công ty.<br> - Đối với những sản phẩm nặng và cồng kềnh cần vận chuyển lên
                                    tầng mà không có thang máy đề nghị khách hàng hỗ trợ trong việc giao nhận.
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
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