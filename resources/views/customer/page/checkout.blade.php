@extends('customer.master')
@section('head')
    <title>Thanh toán | i Tâm loan</title>
@endsection
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>Thanh toán</h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('cart')}}">Giỏ hàng<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('checkout')}}">Thanh toán</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!-- Start Checkout Area -->
    <div class="container">
        <div class="checkput-login mb-2">
            <div class="top-title">
                <p>Giỏ hàng chưa chính xác? <a href="{{route('cart')}}">Click vào đây để thay đổi</a></p>
            </div>
        </div>
        @if(!Auth::check())
        <div class="checkput-login">
            <div class="top-title">
                <p>Bạn đã có tài khoản? <a data-toggle="collapse" href="#checkout-login" aria-expanded="false" aria-controls="checkout-login">Click vào đây để đăng nhập</a></p>
            </div>
            <div class="collapse" id="checkout-login">
                <div class="checkout-login-collapse d-flex flex-column">
                    <form action="{{route('postlogin')}}" method="post" class="d-block">
                        {!! csrf_field() !!}
                        <input type="hidden" value="checkoutpage" name="page">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="email" name="email" placeholder="Email" onfocus="this.placeholder=''"
                                       onblur="this.placeholder = 'Email'" required
                                       class="common-input mt-10">
                            </div>
                            <div class="col-lg-4">
                                <input type="password" name="password" placeholder="Mật khẩu" onfocus="this.placeholder=''"
                                       onblur="this.placeholder = 'Mật khẩu'" required class="common-input mt-10">
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-wrap">
                            <button type="submit" class="view-btn color-2 mt-20 mr-20"><span>Đăng nhập</span></button>
                            {{--<div class="mt-20">--}}
                            {{--<input type="checkbox" class="pixel-checkbox" id="login-1">--}}
                            {{--<label for="login-1">Remember me</label>--}}
                            {{--</div>--}}
                        </div>
                    </form>
                    {{--<a href="#" class="mt-10">Lost your password?</a>--}}
                </div>
            </div>
        </div>
        @endif

    </div>
    <!-- End Checkout Area -->
    <!-- Start Billing Details Form -->
    <div class="container">
        <form action="#" class="billing-form">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <h3 class="billing-title mt-20 mb-10">Thông tin giao hàng</h3>
                    @if(Auth::check())
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" value="{{$cus[0]->c_name}}" placeholder="Họ tên " onfocus="this.placeholder=''" onblur="this.placeholder = 'Họ tên '" required class="common-input">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" value="{{$cus[0]->phone}}" placeholder="Số điện thoại " onfocus="this.placeholder=''" onblur="this.placeholder = 'Số điện thoại '" required class="common-input">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" value="{{$cus[0]->email}}" placeholder="Email " onfocus="this.placeholder=''" onblur="this.placeholder = 'Email '" required class="common-input">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" value="{{$cus[0]->address}}" placeholder="Địa chỉ " onfocus="this.placeholder=''" onblur="this.placeholder = 'Địa chỉ '" required class="common-input">
                        </div>
                        <div class="col-lg-12">
                            <textarea placeholder="Ghi chú" onfocus="this.placeholder=''" onblur="this.placeholder = 'Ghi chú'" required class="common-textarea"></textarea>
                        </div>
                    </div>
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" placeholder="Họ tên " onfocus="this.placeholder=''" onblur="this.placeholder = 'Họ tên '" required class="common-input">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Số điện thoại " onfocus="this.placeholder=''" onblur="this.placeholder = 'Số điện thoại '" required class="common-input">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email " onfocus="this.placeholder=''" onblur="this.placeholder = 'Email '" required class="common-input">
                            </div>
                            <div class="col-lg-12">
                                <select class="common-input mt-20 thanhpho nice-select" name="city" id="tinh-thanhpho" required>
                                    <option value="">Tỉnh / Thành Phố</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <select class="common-input mt-20 mt-20 quan_huyen nice-select" name="district" id="quan-huyen" required>
                                    <option value="1">Quận / Huyện</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <select class="common-input mt-20 quan_huyen nice-select" name="town" id="xa-phuong" required>
                                    <option value="1">Xã / Phường</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" placeholder="Địa chỉ " onfocus="this.placeholder=''" onblur="this.placeholder = 'Địa chỉ '" required class="common-input">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Ghi chú" onfocus="this.placeholder=''" onblur="this.placeholder = 'Ghi chú'" required class="common-textarea"></textarea>
                            </div>
                        </div>
                    @endif

                    <!--<div class="mt-20">-->
                    <!--<input type="checkbox" class="pixel-checkbox" id="login-3">-->
                    <!--<label for="login-3">Create an account?</label>-->
                    <!--</div>-->
                    <!--<h3 class="billing-title mt-20 mb-10">Billing Details</h3>-->
                    <!--<div class="mt-20">-->
                    <!--<input type="checkbox" class="pixel-checkbox" id="login-6">-->
                    <!--<label for="login-6">Ship to a different address?</label>-->
                    <!--</div>-->
                </div>
                @if(Session::has('cart'))
                <div class="col-lg-5 col-md-6">
                    <div class="order-wrapper ">
                        <h3 class="billing-title mb-10">Đơn hàng</h3>
                        <div class="order-list">
                            <div class="list-row d-flex justify-content-between">
                                <h6>Sản phẩm</h6>
                                <h6>Số lượng</h6>
                            </div>
                            @foreach($product_cart as $p)
                            <div class="list-row d-flex justify-content-between">
                                <div>{{$p['item']['name']}}</div>
                                <div>x {{$p['qty']}}</div>
                            </div>
                            @endforeach

                            <div class="list-row d-flex justify-content-between">
                                <h6>Tạm tính</h6>
                                <div>{{number_format( $totalPrice )}} ₫</div>
                            </div>
                            <div class="list-row d-flex justify-content-between">
                                <h6>Phí vận chuyển</h6>
                                <div>{{number_format( $tax )}} ₫</div>
                            </div>
                            <div class="list-row d-flex justify-content-between">
                                <h6>Tổng cộng</h6>
                                <div class="total">{{number_format( $totalPriceFinal )}} ₫</div>
                            </div>

                            <div id="check-out-type">
                                <div class="d-flex align-items-center mt-10">
                                    <input class="pixel-radio" type="radio" id="cod" name="brand" data-parent="#check-out-type" data-toggle="collapse" data-target="#cod-text">
                                    <label for="cod" class="bold-lable">Thanh toán khi nhận hàng - COD</label>
                                </div>
                                <p class="payment-info collapse" id="cod-text" style="">Nhận hàng, kiểm tra và
                                    thanh toán. Không đúng sản phẩm hoặc không thích có thể trả lại.</p>

                                <div class="d-flex align-items-center mt-10">
                                    <input class="pixel-radio" type="radio" id="transfer" name="brand" data-parent="#check-out-type" data-toggle="collapse" data-target="#transfer-text">
                                    <label for="transfer" class="bold-lable">Chuyển khoản ngân hàng</label>
                                </div>
                                <p class="payment-info collapse" id="transfer-text">Thông tin chuyển khoản:<br>
                                    - Ngân hàng: <b>Vietcombank</b><br> - Số tài khoản: <b>1001000022002</b><br>
                                    - Chủ tài khoản: <b>Nguyễn Văn Tài</b><br> - Chi nhánh: <b>Tp. Cần
                                        Thơ</b><br><b><u>Lưu ý:</u></b> Ghi rõ <b>họ và tên</b> trong nội dung
                                    chuyển khoản
                                </p>
                                <div class="d-flex justify-content-between mt-10">
                                    <div class="d-flex align-items-center">
                                        <input class="pixel-radio" type="radio" id="paypal" name="brand" data-parent="#check-out-type" data-toggle="collapse" data-target="#paypal-text">
                                        <label for="paypal" class="bold-lable">Thanh toán bằng Paypal</label>
                                    </div>
                                    <img src="source/img/organic-food/pm.jpg" alt="" class="img-fluid">
                                </div>
                                <p class="payment-info collapse" id="paypal-text">Nhấp vào nút Paypal để thanh toán.<br><br>
                                    <span id="paypal-button-container"></span>
                                </p>
                            </div>


                            <div class="mt-20 d-flex align-items-start">
                                <input type="checkbox" class="pixel-checkbox" id="cb-confim">
                                <label for="login-4">Tôi đã đọc rõ và chấp nhận <a href="#" class="terms-link">Điều khoản & điều kiện</a></label>
                            </div>
                            <button disabled class="view-btn color-2 w-100 mt-20" id="process-checkout"><span>Thanh toán</span></button>
                            <script>
                                $('#cb-confim').click(function () {
                                    if ($(this).is(':checked')) {

                                        $('#process-checkout').removeAttr('disabled'); //enable input

                                    } else {
                                        $('#process-checkout').attr('disabled', true); //disable input
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </form>
    </div>
    <div class="p-3"></div>
    <!-- End Billing Details Form -->


@endsection