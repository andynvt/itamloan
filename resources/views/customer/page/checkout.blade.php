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
                            <div class="mt-20">
                                <a href="{{route('forgetpass')}}">Quên mật khẩu?</a>

                            </div>
                        </div>
                    </form>
                    <p class="text-left mt-3 mb-1">Hoặc đăng nhập bằng</p>
                    <div class=" justify-content-left">
                        <button onclick="fblogin()" title="Đăng nhập bằng Facebook" class="ml-0 btn btn-facebook btn-lg">Facebook</button>
                        <button onclick="startApp()" id="ggLogBtn" title="Đăng nhập bằng Google" class="btn btn-facebook btn-lg" style=" background: #CD5542">Google</button>
                        <span class="text-white mt-1" id="status"></span>
                        <form action="{{route('fblogin')}}" method="post" id="fbloginform">
                            {{ csrf_field() }}
                            <input type="hidden" name="page" value="checkoutpage">
                        </form>
                        <form action="{{route('gglogin')}}" method="post" id="ggloginform">
                            {{ csrf_field() }}
                            <input type="hidden" name="page" value="checkoutpage">
                        </form>
                    </div>
                    {{--<a href="#" class="mt-10">Lost your password?</a>--}}
                </div>
            </div>
        </div>
        @endif

    </div>
    <!-- End Checkout Area -->
    <!-- Start Billing Details Form -->
    <div class="container">
        <form action="{{route('postcheckout')}}" method="post" id="formcheckout" class="billing-form">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <h3 class="billing-title mt-20 mb-10">Thông tin giao hàng</h3>
                    @if(Auth::check())
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" value="{{$cus[0]->c_name}}" placeholder="Họ tên "
                                       onfocus="this.placeholder=''" onblur="this.placeholder = 'Họ tên '" required
                                       class="common-input">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="phone" value="{{$cus[0]->phone}}" placeholder="Số điện thoại "
                                       onfocus="this.placeholder=''" onblur="this.placeholder = 'Số điện thoại '"
                                       required class="common-input">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" value="{{$cus[0]->email}}" placeholder="Email "
                                       onfocus="this.placeholder=''" onblur="this.placeholder = 'Email '" required readonly
                                       class="common-input">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="address" value="{{$cus[0]->shipping_address}}" placeholder="Địa chỉ "
                                       onfocus="this.placeholder=''" onblur="this.placeholder = 'Địa chỉ '" required
                                       class="common-input">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="note" placeholder="Ghi chú" onfocus="this.placeholder=''"
                                          onblur="this.placeholder = 'Ghi chú'"
                                          class="common-textarea"></textarea>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" placeholder="Họ tên " onfocus="this.placeholder=''"
                                       onblur="this.placeholder = 'Họ tên '" required class="common-input">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="phone" placeholder="Số điện thoại " onfocus="this.placeholder=''"
                                       onblur="this.placeholder = 'Số điện thoại '" required class="common-input">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email " onfocus="this.placeholder=''"
                                       onblur="this.placeholder = 'Email '" required class="common-input">
                            </div>
                            <div class="col-lg-6">
                                <input type="password" name="password" id="password" placeholder="Mật khẩu " onfocus="this.placeholder=''"
                                       onblur="this.placeholder = 'Mật khẩu '" required class="common-input">
                            </div>
                            <div class="col-lg-6">
                                <input type="password" name="re-password" id="re-password" placeholder="Nhập lại mật khẩu " onfocus="this.placeholder=''"
                                       onblur="this.placeholder = 'Nhập lại mật khẩu '" required class="common-input">
                            </div>
                            <div class="col-lg-12">
                                <select class="common-input mt-20 thanhpho nice-select" name="city" id="tinh-thanhpho"
                                        required>
                                    <option value="">Tỉnh / Thành Phố</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <select class="common-input mt-20 mt-20 quan_huyen nice-select" name="district"
                                        id="quan-huyen" required>
                                    <option value="1">Quận / Huyện</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <select class="common-input mt-20 quan_huyen nice-select" name="town" id="xa-phuong"
                                        required>
                                    <option value="1">Xã / Phường</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="address" placeholder="Địa chỉ " onfocus="this.placeholder=''"
                                       onblur="this.placeholder = 'Địa chỉ '" required class="common-input">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Ghi chú" name="note" onfocus="this.placeholder=''"
                                          onblur="this.placeholder = 'Ghi chú'"
                                          class="common-textarea"></textarea>
                            </div>
                        </div>
                        <script>
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
                    @endif
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
                                    <input class="pixel-radio" type="radio" id="cod" name="payment" value="1" required
                                           data-parent="#check-out-type" aria-expanded="true" data-toggle="collapse"
                                           data-target="#cod-text">
                                    <label for="cod" class="bold-lable">Thanh toán khi nhận hàng - COD</label>
                                </div>
                                <p class="payment-info collapse" id="cod-text">Nhận hàng, kiểm tra và
                                    thanh toán. Không đúng sản phẩm hoặc không thích có thể trả lại.</p>

                                <div class="d-flex align-items-center mt-10">
                                    <input class="pixel-radio" type="radio" id="transfer" name="payment" value="2"
                                           data-parent="#check-out-type" data-toggle="collapse"
                                           data-target="#transfer-text">
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
                                        <input class="pixel-radio" type="radio" id="paypal" name="payment" value="3"
                                               data-parent="#check-out-type" data-toggle="collapse"
                                               data-target="#paypal-text">
                                        <label for="paypal" class="bold-lable">Thanh toán bằng Paypal</label>
                                    </div>
                                </div>
                                <div class="payment-info collapse" id="paypal-text">
                                    <span id="paypal-button-container"></span>
                                <div id="confirm" class="hidden payment-info">
                                    <h6 class="mb-1">Gửi hàng đến:</h6>
                                    <div class="mb-1"><span id="recipient"></span>, <span id="line1"></span>, <span
                                                id="city"></span>
                                    </div>
                                    <div class="mb-1"><span id="state"></span>, <span id="zip"></span>, <span
                                                id="country"></span>
                                    </div>

                                    <a id="confirmButton" class="view-btn color-2"><span>xác nhận thanh toán </span>
                                        <span class="lnr lnr-checkmark-circle"></span></a>

                                </div>
                                <div id="thanks" class="hidden payment-info">
                                    Thanh toán thành công, cảm ơn <span id="thanksname"></span>!
                                </div>
                                </div>

                                <div class="d-flex justify-content-between mt-10">
                                    <div class="d-flex align-items-center">
                                        <input class="pixel-radio" type="radio" id="visa" name="payment" value="4"
                                               data-parent="#check-out-type" data-toggle="collapse"
                                               data-target="#visa-text">
                                        <label for="visa" class="bold-lable">Thanh toán bằng thẻ <img src="https://img.icons8.com/color/35/ffffff/visa.png">
                                            <img src="https://img.icons8.com/color/35/ffffff/mastercard.png"> </label>
                                    </div>
                                </div>
                                <div class="payment-info collapse" id="visa-text">
                                    <script src="https://checkout.stripe.com/checkout.js"></script>
                                    <button class="btn btn-facebook btn-lg" style="background: #009cde;" id="customButton">THANH TOÁN</button>
                                    <div class="mt-1" id="status_stripe"></div>
                                </div>
                            </div>
                            <div class="mt-20 d-flex align-items-start">
                                <input type="checkbox" class="hidden" id="cb-paypal">
                                <input type="checkbox" class="pixel-checkbox" id="cb-confim">
                                <label for="login-4">Tôi đã đọc rõ và chấp nhận <a href="#" class="terms-link">Điều khoản & điều kiện</a></label>
                            </div>
                            <button disabled="disabled" type="submit" class="view-btn color-2 w-100 mt-20" id="process-checkout"><span>Thanh toán</span></button>
                            <script>
                                $('#paypal').click(function () {
                                    $('#cb-confim').attr('disabled', true);
                                    $('#process-checkout').attr('disabled', true);
                                });
                                $('#visa').click(function () {
                                    $('#cb-confim').attr('disabled', true);
                                    $('#process-checkout').attr('disabled', true);
                                });
                                $('input[type="radio"]').click(function () {
                                    var cked = $(this).attr('id');
                                    $('#cb-confim').click(function () {
                                        if (cked != 'paypal'){
                                            if ($('#cb-confim').is(':checked')) {
                                                $('#process-checkout').removeAttr('disabled');
                                            } else {
                                                $('#process-checkout').attr('disabled', true);
                                            }
                                        }else{
                                        }

                                    });
                                });
                            </script>
                            <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                            <script>
                                function testAjax(handleData) {
                                    var result = 0;
                                    endpoint = 'live'
                                    access_key = '6893d9fb74f8db1ce72c373e82114aab';
                                    $.ajax({
                                        url: 'http://apilayer.net/api/live?access_key=' + access_key + '&currencies=VND&source=USD&format=1',
                                        dataType: 'jsonp',
                                        success: function (json) {
                                            handleData(json.quotes.USDVND);
                                        },
                                    });
                                }
                                testAjax(function(output){
                                    var amount = ('{{$totalPriceFinal}}' / output).toFixed(2);
                                    // Render the PayPal button
                                    paypal.Button.render({
                                        env: 'sandbox', // sandbox | production
                                        style: {
                                            label: 'paypal',
                                            size: 'medium', // small | medium | large | responsive
                                            shape: 'rect', // pill | rect
                                            color: 'blue', // gold | blue | silver | black
                                            tagline: false
                                        },
                                        client: {
                                            sandbox: 'AYTHuDDrPAMBekfKg3JPKOIcHqdfLxsuGZ2PjyDV4Aw0fg0IfY_HFDJAiY_eASFyqKUYXUaJBBVvV4K3',
                                            // production: '<insert production client id>'
                                        },
                                        payment: function(data, actions) {
                                            return actions.payment.create({
                                                payment: {
                                                    transactions: [
                                                        {
                                                            amount: { total: amount, currency: 'USD' }
                                                        }
                                                    ]
                                                }
                                            });
                                        },
                                        onAuthorize: function(data, actions) {
                                            return actions.payment.get().then(function(data) {

                                                var shipping = data.payer.payer_info.shipping_address;

                                                document.querySelector('#recipient').innerText = shipping.recipient_name;
                                                document.querySelector('#line1').innerText     = shipping.line1;
                                                document.querySelector('#city').innerText      = shipping.city;
                                                document.querySelector('#state').innerText     = shipping.state;
                                                document.querySelector('#zip').innerText       = shipping.postal_code;
                                                document.querySelector('#country').innerText   = shipping.country_code;

                                                document.querySelector('#paypal-text').style.display = 'none';
                                                document.querySelector('#paypal-button-container').style.display = 'none';
                                                document.querySelector('#confirm').style.display = 'block';

                                                // Listen for click on confirm button

                                                document.querySelector('#confirmButton').addEventListener('click', function() {

                                                    // Disable the button and show a loading message

                                                    document.querySelector('#confirm').innerText = 'Vui lòng đợi...';
                                                    document.querySelector('#confirm').disabled = true;

                                                    // Execute the payment

                                                    return actions.payment.execute().then(function() {

                                                        // Show a thank-you note

                                                        document.querySelector('#thanksname').innerText = shipping.recipient_name;
                                                        document.querySelector('#confirm').style.display = 'none';
                                                        document.querySelector('#thanks').style.display = 'block';

                                                        document.querySelector('#cb-paypal').checked = true;
                                                        // document.querySelector('#process-checkout').disabled = true;
                                                        document.querySelector('#process-checkout').innerHTML = '<span>hoàn tất</span>';
                                                        $('#cb-confim').removeAttr('disabled');
                                                        $('#cb-confim').click(function () {
                                                            if ($(this).is(':checked')) {
                                                                $('#process-checkout').removeAttr('disabled'); //enable input
                                                            } else {
                                                                $('#process-checkout').attr('disabled', true); //disable input
                                                            }
                                                        });
                                                    });
                                                });
                                            });
                                        }
                                    }, '#paypal-button-container');
                                });
                            </script>
                            <script>
                                //thanh toán stripe
                                var handler = StripeCheckout.configure({
                                    key: 'pk_test_m1Q5TEAvEAXhTPlpttDUixnx',
                                    image: 'https://yt3.ggpht.com/a-/AN66SAyL1Fo40yzsJMDjQeAEAnaR8fr-a494s_laAg=s900-mo-c-c0xffffffff-rj-k-no',
                                    locale: 'auto',
                                    token: function(token) {
                                        var myData = {
                                            token: token.id,
                                            email: token.email,
                                            amount:{!! ($totalPriceFinal) !!},
                                        };
                                        // $('#status_stripe').append(myData);
                                        //
                                        alert('h');
                                        // $.ajax({
                                        //     url: 'stripedone',
                                        //     dataType: 'json',
                                        //     type: 'GET',
                                        //     data: {mydata: myData},
                                        //     success: function (data) {
                                        //         alert('hh');
                                        //
                                        //         console.log(data);
                                        //         $("#status_stripe").html("Thanh toán thành công.");
                                        //         $('#process-checkout').html('<span>hoàn tất</span>');
                                        //         $('#cb-confim').removeAttr('disabled');
                                        //
                                        //     }
                                        // });
                                        $.get("stripedone/"+token.email,
                                            function(data) {
                                                $("#status_stripe").html("Thanh toán thành công.");
                                                $("#status_stripe").html(data);
                                                $('#process-checkout').html('<span>hoàn tất</span>');
                                                $('#cb-confim').removeAttr('disabled');

                                            }).fail(function() {
                                            $("#status_stripe").html("Thanh toán thất bại");
                                        })
                                    }
                                });

                                document.getElementById('customButton').addEventListener('click', function(e) {
                                    handler.open({
                                        name: 'itamloan',
                                        description: 'Thanh toán bằng thẻ',
                                        @if(Auth::check())
                                        email: "{{Auth::user()->email}}",
                                        @endif
                                        amount: {!! ($totalPriceFinal) !!},
                                        currency: "VND"
                                    });

                                    e.preventDefault();
                                });
                                window.addEventListener('popstate', function() {
                                    handler.close();
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