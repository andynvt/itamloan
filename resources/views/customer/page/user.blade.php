
@extends('customer.master')
@section('head')
    <title>Trang cá nhân | i Tâm loan</title>
@endsection
@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>Trang cá nhân</h1>
                <nav class="d-flex align-items-center justify-content-start">
                    <a href="#">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="#">Trang cá nhân</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Cart Area -->
<div class="container">

    <div class="details-tab-navigation d-flex justify-content-center mt-30">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li>
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#bill" role="tab"
                   aria-controls="description" aria-expanded="true">Đơn hàng của bạn</a>
            </li>
            <li>
                <a class="nav-link" id="specification-tab" data-toggle="tab" href="#info" role="tab"
                   aria-controls="specification">Thông tin cá nhân</a>
            </li>
            <li>
                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#pass" role="tab"
                   aria-controls="specification">Đổi mật khẩu</a>
            </li>
        </ul>
    </div>
    <div class="tab-content mt-30" id="myTabContent">
        <div class="tab-pane fade show active" id="bill" role="tabpanel">
            <div class="specification-table ">
                <table class="table table-bordered align-content-center">
                    <thead>
                    <tr class="font-weight-bold">
                        <td class="text-center">STT</td>
                        <td class="text-center">Mã đơn hàng</td>
                        <td class="text-center">Số lượng</td>
                        <td class="text-center">Tổng tiền</td>
                        <td class="text-center">Thanh toán</td>
                        <td class="text-center">Trạng thái</td>
                        <td class="text-center">Ghi chú</td>
                    </tr>
                    </thead>
                    <tbody>
                    <span style="display: none">{{$i=0}}</span>
                    @foreach($bill as $b => $value)
                        <span style="display: none">{{$i++}}</span>
                    <tr>
                        <td class="text-center">{{$i}}</td>
                        <td class="text-center">{{$value->id}}</td>
                        <td class="text-center">{{$value->total_product}}</td>
                        <td class="text-center">{{$value->total_price}}</td>
                        <td class="text-center">{{$value->payment}}</td>
                        <td class="text-center">{{$value->status}}</td>
                        <td class="text-center">{{$value->note}}</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="info" role="tabpanel">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 justify-content-center">
                    <form action="#">
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <input type="text" name="name" value="{{$cus[0]->c_name}}" placeholder="Họ và tên"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Họ và tên'"
                                   required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-envelope " aria-hidden="true"></i></div>
                            <input type="text" name="email" value="{{$cus[0]->email}}" required
                                   readonly class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <input type="text" name="phone" value="{{$cus[0]->phone}}" placeholder="Số điện thoại"
                                   onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Số điện thoại'"
                                   required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                            <input type="date" name="dob" value="{{$cus[0]->dob}}" placeholder="Ngày sinh"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ngày sinh'"
                                   required class="single-input">
                        </div>
                        {{--<div class="input-group-icon mt-10">--}}
                            {{--<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>--}}
                            {{--<div class="form-select" id="default-select">--}}
                                {{--<select name="city" class="nice-select">--}}
                                    {{--<option value="1">Tỉnh / Thành Phố</option>--}}
                                    {{--<option value="1">Cần Thơ</option>--}}
                                    {{--<option value="1">Sóc</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="input-group-icon mt-10">--}}
                            {{--<div class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i>--}}
                            {{--</div>--}}
                            {{--<div class="form-select" id="default-selected">--}}
                                {{--<select name="district" class="nice-select">--}}
                                    {{--<option value="1">Quận / Huyện</option>--}}
                                    {{--<option value="1">Cần Thơ</option>--}}
                                    {{--<option value="1">Sóc</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-map-marker " aria-hidden="true"></i></div>
                            <input type="text" name="address" value="{{$cus[0]->address}}" placeholder="Địa chỉ"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ'"
                                   required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                            <input type="text" name="address" value="{{$cus[0]->shipping_address}}" placeholder="Địa chỉ giao hàng"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ giao hàng'"
                                   required class="single-input">
                        </div>
                        <button type="submit" class="view-btn color-2 mt-20 w-100 mb-20"><span>Cập nhật</span></button>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
        <div class="tab-pane fade active" id="pass" role="tabpanel">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="mt-10">
                        <form action="#">
                            <div class="mt-10">
                                <input type="password" name="oldpass"
                                       placeholder="Mật khẩu cũ"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Mật khẩu cũ'" required
                                       class="single-input" minlength="6" maxlength="16"
                                       autofocus>
                            </div>
                            <div class="mt-10">
                                <input type="password" name="newpass"
                                       placeholder="Mật khẩu mới"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Mật khẩu mới'" required
                                       class="single-input" minlength="6" maxlength="16">

                            </div>
                            <div class="mt-10">
                                <input type="password" name="renewpass"
                                       placeholder="Nhập lại Mật khẩu mới"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Nhập lại Mật khẩu mới'"
                                       required
                                       class="single-input" minlength="6" maxlength="16">

                            </div>


                            <button type="submit" class="view-btn color-2 mt-20 w-100 mb-20"><span>Thay đổi</span></button>

                        </form>


                    </div>
                </div>
                <div class="col-3"></div>
            </div>

        </div>
    </div>
</div>
<!-- End Cart Area -->
@endsection
