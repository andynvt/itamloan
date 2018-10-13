
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
            <li>
                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#review" role="tab"
                   aria-controls="specification">Đánh giá</a>
            </li>
        </ul>
    </div>
    <div class="tab-content mt-30" id="myTabContent">
        <div class="tab-pane fade show active" id="bill" role="tabpanel">
            <div class="specification-table ">
                <table class="table table-bordered align-content-center table-responsive">
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
            <form action="{{route('edituser')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-12 col-12 justify-content-center">
                        <h4 class="text-center">Avatar</h4>
                        <hr class="pb-3">
                        <div class="user-details d-flex align-items-center">
                            <img id="blah" src="storage/user/{{$cus[0]->avatar}}" class="img-fluid" alt="your image"/>
                        </div>
                        <input type='file' name="avatar" id="imgInp" hidden accept="image/png, image/jpg, image/jpeg"/>
                        <div class="align-items-center">
                            <label for="imgInp" style="width: 100%;">
                                <div class="view-btn color-2 mt-20 w-100 mb-20"><span>Chọn ảnh</span></div>
                            </label>
                        </div>
                        <div class="mt-1 text-center">.JPG, .PNG - Tối đa: 1MB</div>
                        <script>
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        $('#blah').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            $("#imgInp").change(function () {
                                readURL(this);
                            });
                        </script>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-12 col-12 justify-content-center">
                        <h4 class="text-center">Hồ sơ</h4>
                        <hr class="pb-3">
                        {!! csrf_field() !!}
                        <div class="input-group mt-10 mb-10 justify-content-center">
                            <input class="pixel-radio" {{($cus[0]->gender == 'Nam') ? 'checked' : ''}} type="radio" id="Nam" name="gender" value="Nam" ><label for="Nam"
                                                                                                              class="pr-3">Nam</label>
                            <input class="pixel-radio" {{($cus[0]->gender == 'Nữ') ? 'checked' : ''}} type="radio" id="Nữ" name="gender" value="Nữ"><label for="Nữ"
                                                                                                            class="pr-3">Nữ</label>
                            <input class="pixel-radio" {{($cus[0]->gender == 'Khác') ? 'checked' : ''}} type="radio" id="other" name="gender"
                                   value="Khác"><label for="other" class="pr-3">Khác</label>
                        </div>
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
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-12 col-12 justify-content-center">
                        <h4 class="text-center">Địa chỉ</h4>
                        <hr class="pb-3">
                        <h5 >Địa chỉ nhà</h5>
                        <div class="input-group-icon mt-10 mb-30">
                            <div class="icon"><i class="fa fa-map-marker " aria-hidden="true"></i></div>
                            <input type="text" name="address" value="{{$cus[0]->address}}" placeholder="Địa chỉ"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ'"
                                   required class="single-input">
                        </div>
                        <h5 >Địa chỉ giao hàng</h5>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                            <input type="text" name="shipping_address" value="{{$cus[0]->shipping_address}}"
                                   placeholder="Địa chỉ giao hàng"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ giao hàng'"
                                   required class="single-input">
                        </div>
                    </div>
                </div>
                <button type="submit" class="view-btn color-2 mt-20 w-100 mb-20 head"><span>Cập nhật</span></button>
            </form>
        </div>
        <div class="tab-pane fade " id="pass" role="tabpanel">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-1 col-1"></div>
                <div class="col-lg-6 col-md-6 col-sm-10 col-10">
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
                                <input type="password" name="password"
                                       placeholder="Mật khẩu mới"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Mật khẩu mới'" required
                                       class="single-input" minlength="6" maxlength="16">

                            </div>
                            <div class="mt-10">
                                <input type="password" name="re-password"
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
                <div class="col-lg-3 col-md-3 col-sm-1 col-1"></div>
            </div>

        </div>
        <div class="tab-pane fade " id="review" role="tabpanel">
            <div class="tab-pane fade show active" id="bill" role="tabpanel">
                <div class="specification-table ">
                    <table class="table table-bordered align-content-center table-responsive">
                        <thead>
                        <tr class="font-weight-bold">
                            <td class="text-center">STT</td>
                            <td class="text-center">Hình ảnh</td>
                            <td class="text-center">Sản phẩm</td>
                            <td class="text-center">Số sao</td>
                            <td class="text-center">Nội dung</td>
                            <td class="text-center">Thao tác</td>
                        </tr>
                        </thead>
                        <tbody>
                        <span style="display: none">{{$i=0}}</span>
                        @foreach($fb as $b => $value)
                            <span style="display: none">{{$i++}}</span>
                            <tr>
                                <td class="text-center">{{$i}}</td>
                                <td class="text-center">
                                    <a href="{{route('single',$value->pid)}}">
                                        <img src="storage/product/{{$value->image}}" style="max-height: 50px;">
                                    </a>
                                </td>
                                <td class="text-center"><a href="{{route('single',$value->pid)}}">{{$value->name}}</a></td>
                                <td class="text-center">
                                    <div class="justify-content-center total-star {{\App\Http\Controllers\CustomerController::noToText($value->stars)}}-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </td>
                                <td class="text-left">{{$value->review}}</td>
                                <td class="text-center">
                                    <a href="{{route('delfb',$value->id)}}" onclick="return confirm('Bạn có chắc chưa?')" class="view-btn color-2" style="min-width: 50px; padding: 0"><span class="lnr lnr-cross"></span></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
</div>
<!-- End Cart Area -->
@endsection
