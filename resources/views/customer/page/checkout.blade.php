@extends('customer.master')
@section('content')


    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>Thanh toán</h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="#">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="#">Giỏ hàng<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="#">Thanh toán</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!-- Start Checkout Area -->
    <div class="container">
        <div class="checkput-login">
            <div class="top-title">
                <p>Giỏ hàng chưa chính xác? <a href="cart.html">Bấm vào đây để thay đổi</a></p>
            </div>
        </div>

    </div>
    <!-- End Checkout Area -->
    <!-- Start Billing Details Form -->
    <div class="container">
        <form action="#" class="billing-form">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <h3 class="billing-title mt-20 mb-10">Thông tin giao hàng</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" placeholder="Họ tên *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Họ tên *'" required class="common-input">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Số điện thoại *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Số điện thoại *'" required class="common-input">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" placeholder="Email *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email *'" required class="common-input">
                        </div>
                        <div class="col-lg-12">
                            <div class="sorting">
                                <select name="city">
                                    <option value="">Tỉnh / Thành phố *</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sorting">
                                <select name="district">
                                    <option value="">Quận / Huyện *</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Địa chỉ *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Địa chỉ *'" required class="common-input">
                        </div>

                        <div class="col-lg-12">
                            <textarea placeholder="Ghi chú" onfocus="this.placeholder=''" onblur="this.placeholder = 'Ghi chú'" required class="common-textarea"></textarea>
                        </div>
                    </div>
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
                <div class="col-lg-5 col-md-6">
                    <div class="order-wrapper ">
                        <h3 class="billing-title mb-10">Đơn hàng</h3>
                        <div class="order-list">
                            <div class="list-row d-flex justify-content-between">
                                <h6>Sản phẩm</h6>
                                <h6>Số lượng</h6>
                            </div>
                            <div class="list-row d-flex justify-content-between">
                                <div>iPhone 8 Plus 256GB Space Gray</div>
                                <div>x 02</div>
                            </div>
                            <div class="list-row d-flex justify-content-between">
                                <div>iPhone 8 Plus 256GB Space Gray</div>
                                <div>x 02</div>
                            </div>

                            <div class="list-row d-flex justify-content-between">
                                <h6>Tổng cộng</h6>
                                <div class="total">100.000.000 ₫</div>
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
                                <input type="checkbox" class="pixel-checkbox" id="login-4">
                                <label for="login-4">Tôi đã đọc rõ và chấp nhận <a href="#" class="terms-link">Điều khoản & điều kiện</a></label>
                            </div>
                            <button class="view-btn color-2 w-100 mt-20"><span>Thanh toán</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="p-3"></div>
    <!-- End Billing Details Form -->


@endsection