@extends('customer.master')
@section('head')
    <title>Đăng nhập | i Tâm loan</title>
@endsection
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h1>Đăng Nhập</h1>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('login')}}">Đăng nhập</a>
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
                <div class="login-form" style="height: auto;">
                    <h3 class="billing-title text-center">Đăng nhập</h3>
                    <p class="text-center mt-3 mb-1">Liên kết với mạng xã hội</p>
                    <div class="row justify-content-center">
                        <button onclick="fblogin()" title="Đăng nhập bằng Facebook" class="btn btn-facebook btn-lg" style=" ">Facebook</button>
                        <button onclick="startApp()" id="ggLogBtn" title="Đăng nhập bằng Google" class="btn btn-facebook btn-lg" style=" ; background: #CD5542">Google</button>
                        {{--<span class="text-black mt-1" id="fblogin-status"></span>--}}
                    </div>
                    <form action="{{route('fblogin')}}" method="post" id="fbloginform">
                        {{ csrf_field() }}
                        <input type="hidden" name="page" value="loginpage">
                    </form>
                    <form action="{{route('gglogin')}}" method="post" id="ggloginform">
                        {{ csrf_field() }}
                        <input type="hidden" name="page" value="loginpage">
                    </form>


                    <form action="{{route('postlogin')}}" method="post">
                        <input type="hidden" value="loginpage" name="page">
                        <input type="email" name="email" placeholder="Email " onfocus="this.placeholder=''"
                               onblur="this.placeholder = 'Email '" required class="common-input mt-20">
                        <input type="password" name="password" placeholder="Mật khẩu " onfocus="this.placeholder=''"
                               onblur="this.placeholder = 'Mật khẩu '" required class="common-input mt-20">
                        <button type="submit" class="view-btn color-2 mt-20 w-100"><span>Đăng nhập</span></button>
                        <div class="mt-20 d-flex align-items-center justify-content-between">
                        <a href="{{route('forgetpass')}}">Quên mật khẩu?</a>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="register-form" id="reg" style="padding: 30px;">
                    <h3 class="billing-title text-center">Đăng ký</h3>
                    <p class="text-center mt-3 mb-1">Liên kết với mạng xã hội</p>
                    <div class="row justify-content-center">
                        <button onclick="fbreg()" title="Đăng ký bằng Facebook" class="btn btn-facebook btn-lg" style="">Facebook</button>
                        <button onclick="startApp()" id="ggRegBtn" title="Đăng ký bằng Google" class="btn btn-facebook btn-lg" style=" ; background: #CD5542">Google</button>
                        {{--<span class="text-white mt-1" id="status"></span>--}}
                        {{--<span class="text-white mt-1" id="name"></span>--}}

                    </div>

                    <form action="{{route('fbreg')}}" method="post" id="fbform">
                        {{ csrf_field() }}
                    </form>
                    <form action="{{route('ggreg')}}" method="post" id="ggform">
                        {{ csrf_field() }}
                        <input type="hidden" name="page" value="loginpage">
                    </form>
                    <div class="billing-title"></div>
                    <p class="text-center mt-15 mb-20">Hoặc tạo tài khoản mới </p>
                    <form action="{{route('reg')}}" method="post" class="validatedForm">
                        <input type="text" name="name" placeholder="Họ và tên " onfocus="this.placeholder=''"
                               onblur="this.placeholder = 'Họ và tên'" required class="common-input mt-20">
                        <input type="email" name="email" placeholder="Email " pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder=''"
                               onblur="this.placeholder = 'Email '" required class="common-input mt-20">
                        <input type="text" name="phone" placeholder="Số điện thoại " onfocus="this.placeholder=''"
                               onblur="this.placeholder = 'Số điện thoại '" required class="common-input mt-20">
                        <input type="password" name="password" id="password" placeholder="Mật khẩu " onfocus="this.placeholder=''"
                               onblur="this.placeholder = 'Mật khẩu '" required minlength="6" maxlength="20"
                               class="common-input mt-20">
                        <input type="password" name="re-password" id="re-password" placeholder="Nhập lại mật khẩu" onfocus="this.placeholder=''"
                               onblur="this.placeholder = 'Nhập lại mật khẩu '" required minlength="6" maxlength="20"
                               class="common-input mt-20">
                        {{--<input type="date" name="dob" placeholder="Ngày sinh" onfocus="this.placeholder = ''"--}}
                               {{--onblur="this.placeholder = 'Ngày sinh'" required class="common-input mt-20">--}}
                        <select class="common-input mt-20 mt-20 nice-select thanhpho" name="city" id="tinh-thanhpho" data-live-search="true" required>
                            <option value="">Tỉnh / Thành Phố</option>
                            {{--@foreach($city as $index => $value)--}}
                                {{--<option value="{{$value->id}}">{{$value->city}}</option>--}}
                            {{--@endforeach--}}
                        </select>

                        <select class="common-input mt-20 mt-20 quan_huyen nice-select" name="district" id="quan-huyen" required>
                            <option value="1">Quận / Huyện</option>
                        </select>
                        <select class="common-input mt-20 mb-20 quan_huyen nice-select" name="town" id="xa-phuong" required>
                            <option value="1">Xã / Phường</option>
                        </select>
                        <input type="text" name="address" placeholder="Địa chỉ " onfocus="this.placeholder=''"
                               onblur="this.placeholder = 'Địa chỉ '" required minlength="6" maxlength="100" class="common-input mt-20">
                        {{ csrf_field() }}
                        <button id="smbtn" type="submit" onclick="validatePassword()"  class="view-btn color-2 mt-20 w-100"><span>Đăng ký</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-10"></div>

    <!-- End My Account -->

    <script>



        //confirm password
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("re-password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Nhập lại mật khẩu không đúng");
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
@endsection
