
@extends('customer.master')
@section('head')
    <title>Hướng dẫn mua hàng | i Tâm loan</title>
@endsection
@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>Hướng dẫn mua hàng</h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('howtobuy')}}">Hướng dẫn mua hàng</a>
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
                    <div class="wt_content"><p><span style="font-size:16px"><span
                                        style="font-family:tahoma,geneva,sans-serif"><strong>I, Đặt hàng trên website: (đang xây dựng)</strong></span></span>
                        </p>
                        <ol>
                            <li><span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif">Quý khách có thể đặt hàng trực tại 2 địa chỉ sau: <a
                                                href="http://itamloan.vn"><span
                                                    style="color:#0000ff">www.itamloan.vn</span></a>&nbsp;</span></span>
                            </li>
                            <li><span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif">Không quá 6 giờ sau khi hoàn tất đặt hàng sẽ có nhân viên tư vấn gọi cho khách hàng để xác nhận đơn hàng.</span></span>
                            </li>
                        </ol>
                        <p><br> <span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif"><strong>II,&nbsp;Đặt hàng qua chát: (đang xây dựng)</strong></span></span>
                        </p>
                        <p><br> <span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif"><strong>III,&nbsp;Đặt hàng qua facebook:</strong></span></span>
                        </p>
                        <ol>
                            <li><span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif">Khách hàng có thể đặt hàng trực tiếp với nhân viên tư vấn bán hàng trên facebook itamloan.vn: <span
                                                style="color:#ff0000"><a href="https://www.facebook.com/itamloan.vn"
                                                                         target="_blank">http://facebook.com/itamloan.vn</a></span></span></span>
                            </li>
                        </ol>
                        <p><br> <span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif"><strong>III,&nbsp;Đặt hàng qua Email:</strong></span></span>
                        </p>
                        <ol>
                            <li><span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif">Khách hàng đặt hàng gửi yêu cầu tới địa chỉ email: <a
                                                href="mailto:sales@itamloan.vn?subject=We%20Love%20Apple&amp;body=Th%C3%B4ng%20tin%20t%E1%BB%AB%20itamloan.vn">sales@itamloan.vn</a></span></span>
                            </li>
                            <li><span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif">Nhân viên tư vấn sẽ hồi đáp email của khách hàng không quá 8 giờ&nbsp;kể từ khi nhận được yêu cầu</span></span>
                            </li>
                        </ol>
                        <p><br> <span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif"><strong>IV,&nbsp;Đặt hàng qua điện thoại:</strong></span></span>
                        </p>
                        <ol>
                            <li><span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif">Gọi điện đặt hàng qua số tổng đài: <span
                                                style="color:#ff0000"><strong>1900 6459</strong></span> từ 8h00” đến 21h30” tất cả các ngày trong tuần</span></span>
                            </li>
                        </ol>
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