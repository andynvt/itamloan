
@extends('customer.master')
@section('head')
    <title>Chính sách thu đổi máy | i Tâm loan</title>
@endsection
@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>Chính sách thu đổi máy </h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('thumay')}}">Chính sách thu đổi máy </a>
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
                    <div class="wt_content"><p><strong>CHÍNH SÁCH THU ĐỔI MÁY</strong></p>
                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td colspan="2"><p>i-Tâm Loan luôn có nhiều chính sách ưu đãi cho Khách hàng đã và đang
                                        sử dụng sản phẩm tại Công Ty.&nbsp;<br> Những sản phẩm Apple được i-Tâm Loan thu
                                        lại với mức giá cao nhất, cụ thể như sau:</p></td>
                            </tr>
                            <tr>
                                <td><p><strong>I) SẢN PHẨM KHÔNG BỊ LỖI:</strong></p></td>
                                <td><p><strong>II) SẢN PHẨM BỊ LỖI (do nhà sản xuất):</strong></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>1) TRONG 07 NGÀY ĐẦU TIÊN:</strong></p></td>
                                <td><p><strong>1) TRONG 07 NGÀY ĐẦU TIÊN:&nbsp; Quý khách sẽ được đổi 01 sản phẩm khác,
                                            nhưng nếu quý khách muốn bán lại thì mức giá thu vào như sau:</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td><p>- MÁY CHÍNH HÃNG: Bằng 85% trên giá bán hiện tại.</p></td>
                                <td><p>- MÁY CHÍNH HÃNG: Bằng 90% trên giá bán hiện tại.</p></td>
                            </tr>
                            <tr>
                                <td><p>- MÁY XÁCH TAY: Bằng 80% trên giá bán hiện tại.</p></td>
                                <td><p>- MÁY XÁCH TAY: Bằng 85% trên giá bán hiện tại.</p></td>
                            </tr>
                            <tr>
                                <td><p>- MÁY ĐÃ QUA SỬ DỤNG: Bằng 90% trên giá bán hiện tại.</p></td>
                                <td><p>- MÁY ĐÃ QUA SỬ DỤNG: Đổi trả miễn phí.</p></td>
                            </tr>
                            <tr>
                                <td><p><strong>2) QUYỀN LỢI TỪ 08 ĐẾN 30 NGÀY:</strong></p></td>
                                <td><p><strong>2) QUYỀN LỢI TỪ 08 ĐẾN 30 NGÀY:</strong></p></td>
                            </tr>
                            <tr>
                                <td><p>- MÁY CHÍNH HÃNG: Bằng 80% trên giá bán hiện tại.</p></td>
                                <td><p>- MÁY CHÍNH HÃNG: Bằng 85% trên giá bán hiện tại.</p></td>
                            </tr>
                            <tr>
                                <td><p>- MÁY XÁCH TAY: Bằng 75% trên giá bán hiện tại.</p></td>
                                <td><p>- MÁY XÁCH TAY: Tùy vào mức độ lỗi của sản phẩm, sẽ có giá cụ thể.</p></td>
                            </tr>
                            <tr>
                                <td><p>- MÁY ĐÃ QUA SỬ DỤNG: Bằng 85% trên giá bán hiện tại.</p></td>
                                <td><p>- MÁY ĐÃ QUA SỬ DỤNG: Bằng 90% trên giá bán hiện tại.</p></td>
                            </tr>
                            <tr>
                                <td><p><strong>3) QUYỀN LỢI TỪ 31 ĐẾN 45 NGÀY:</strong></p></td>
                                <td><p><strong>3) QUYỀN LỢI TỪ 31 ĐẾN 45 NGÀY:</strong></p></td>
                            </tr>
                            <tr>
                                <td><p>- MÁY CHÍNH HÃNG: Bằng 75% trên giá bán hiện tại.</p></td>
                                <td><p>- MÁY CHÍNH HÃNG: Bằng 80% trên giá bán hiện tại.</p></td>
                            </tr>
                            <tr>
                                <td><p>- MÁY XÁCH TAY: Bằng 70% trên giá bán hiện tại.</p></td>
                                <td><p>- MÁY XÁCH TAY: Tùy vào mức độ lỗi của sản phẩm, sẽ có giá cụ thể.</p></td>
                            </tr>
                            <tr>
                                <td><p>- MÁY ĐÃ QUA SỬ DỤNG: Bằng 80% trên giá bán hiện tại.</p></td>
                                <td><p>- MÁY ĐÃ QUA SỬ DỤNG: Bằng 85% trên giá bán hiện tại.</p></td>
                            </tr>
                            <tr>
                                <td><p><strong>4) QUYỀN LỢI SAU 45 NGÀY:</strong></p></td>
                                <td><p><strong>4) QUYỀN LỢI SAU 45 NGÀY:</strong></p></td>
                            </tr>
                            <tr>
                                <td><p>- Cứ mỗi ngày tiếp theo giá thu vào sẽ giảm thêm 0.15% trên 01 ngày.</p></td>
                                <td><p>- Cứ mỗi ngày tiếp theo giá thu vào sẽ giảm thêm 0.15% trên 01 ngày.</p></td>
                            </tr>
                            <tr>
                                <td><p><strong>III) SẢN PHẨM BỊ LỖI (DO NGƯỜI SỬ DỤNG):</strong></p></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2"><p>- Tùy vào mức độ hư hỏng của sản phẩm, giá linh kiện thay thế, i-Tâm
                                        Loan sẽ hỗ trợ giá đổi trả cao nhất cho quý khách hàng.</p></td>
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