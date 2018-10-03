@extends('customer.master')
@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>Đăng Nhập</h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="index.html">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="cart.html">Giỏ Hàng</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Start My Account -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login-form">
                    <h3 class="billing-title text-center">Đăng nhập</h3>
                    <p class="text-center mt-3 mb-3">Liên kết với mạng xã hội</p>
                    <div class="row justify-content-center">
                        <button onclick="login()" title="Facebook" class="btn btn-facebook btn-lg" style="border-radius: 5px; ">Facebook</button>
                        <button onclick="login()" title="Google" class="btn btn-facebook btn-lg" style="border-radius: 5px; background: #CD5542">Google</button>

                    </div>

                    <!--<div id="status">-->
                    <!--</div>-->
                    <form action="#">
                        <input type="text" name="email" placeholder="Email *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email *'" required class="common-input mt-20">
                        <input type="password" name="password" placeholder="Mật khẩu *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Mật khẩu *'" required class="common-input mt-20">
                        <button class="view-btn color-2 mt-20 w-100"><span>Đăng nhập</span></button>
                        <div class="mt-20 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center"><input type="checkbox" class="pixel-checkbox" id="login-1"><label for="login-1">Ghi nhớ tài khoản</label></div>
                            <a href="#">Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register-form" id="reg">
                    <h3 class="billing-title text-center">Đăng ký</h3>
                    <p class="text-center mt-15 mb-80">Tạo tài khoản mới </p>
                    <form action="#">
                        <input type="text" name="name" placeholder="Họ và tên *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Họ và tên*'" required class="common-input mt-20">
                        <input type="email" name="email" placeholder="Email *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email *'" required class="common-input mt-20">
                        <input type="text" name="phone" placeholder="Số điện thoại *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Số điện thoại *'" required class="common-input mt-20">
                        <input type="password" name="password" placeholder="Mật khẩu *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Mật khẩu *'" required class="common-input mt-20">
                        <input type="date" name="dob" placeholder="Ngày sinh" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ngày sinh'" required class="common-input mt-20">
                        <select class="common-input mt-20">
                            <option value="1">Tỉnh / Thành Phố *</option>
                            <option value="1">Cần Thơ</option>
                            <option value="1">Sóc Trăng</option>
                        </select>
                        <select class="common-input mt-20 mb-20">
                            <option value="1">Quận / Huyện *</option>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                        </select>
                        <input type="text" placeholder="Địa chỉ *" onfocus="this.placeholder=''" onblur="this.placeholder = 'Địa chỉ *'" required class="common-input mt-20">
                        <button type="submit" class="view-btn color-2 mt-20 w-100"><span>Đăng ký</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-30"></div>

    <!-- End My Account -->

@endsection
