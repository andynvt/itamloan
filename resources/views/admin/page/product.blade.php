@extends('admin.master')
@section('head')
    <title>Sản phẩm - Admin | i Tâm Loan</title>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SẢN PHẨM</h2>
                <div class="m-t-10"></div>
                <button type="button" class="btn bg-deep-purple waves-effect" data-toggle="modal" data-target="#them_sp">
                    <i class="material-icons">add</i>
                    <span>THÊM MỚI</span>
                </button>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DANH SÁCH SẢN PHẨM</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="sp_table">
                                    <thead class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center notexport">ẢNH</th>
                                        <th class="align-center">TÊN SẢN PHẨM</th>
                                        <th class="align-center">LOẠI</th>
                                        <th class="align-center">DÒNG</th>
                                        <th class="align-center">GIÁ</th>
                                        <th class="align-center">KHUYỄN MÃI</th>
                                        <th class="align-center">KHO</th>
                                        <th class="align-center notexport">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center notexport">ẢNH</th>
                                        <th class="align-center">TÊN SẢN PHẨM</th>
                                        <th class="align-center">LOẠI</th>
                                        <th class="align-center">DÒNG</th>
                                        <th class="align-center">GIÁ</th>
                                        <th class="align-center">KHUYỄN MÃI</th>
                                        <th class="align-center">KHO</th>
                                        <th class="align-center notexport">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($sp as $index => $value)
                                    <tr>
                                        <th scope="row">{{$index+1}}</th>
                                        <td class="align-center img-inside" style="width: 10%">
                                            <img src="storage/product/{{$value->image}}" alt="{{$value->name}}" id="imageid">
                                        </td>
                                        <td style="width: 20%">{{$value->name}}</td>
                                        <td>{{$value->type}}</td>
                                        <td>{{$value->catalog}}</td>
                                        <td class="align-center">{{number_format($value->price)}} ₫</td>
                                        <td class="align-center" style="width: 10%">
                                            @if($value->percent == 0)
                                                0
                                                @else
                                                {{$value->percent}}%
                                            @endif
                                        </td>
                                        <td class="align-center">{{$value->inventory}}</td>
                                        <td class="align-center pd-5" style="width: 15%">
                                                <span data-toggle="modal" data-target="#xem_sp_{{$value->id}}">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float xemsp" data-xem="{{$value->id}}" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                            <span data-toggle="modal" data-target="#sua_sp_{{$value->id}}">
                                                    <a class="btn btn-warning btn-circle waves-effect waves-circle waves-float suasp" data-sua="{{$value->id}}" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa">
                                                        <i class="material-icons">build</i>
                                                    </a>
                                                </span>
                                            <a href="javascript:void(0);"
                                               class=" btn btn-danger btn-circle waves-effect waves-circle waves-float delete-btn"
                                               data-toggle="tooltip" data-placement="top" data-original-title="Xoá"
                                               data-type="cancel">
                                                <form action="{{route('xoasp')}}" method="get" class="delform">
                                                    <input type="hidden" name="_token" content="{{ csrf_token() }}">
                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                    <input type="hidden" name="token" value="{{$value->id}}">
                                                    <i class="material-icons">delete</i>
                                                </form>
                                            </a>
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


            <!-- #END# Exportable Table -->

            <!-- Modal thêm sp mới -->
            <div class="modal fade in" id="them_sp" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">THÊM SẢN PHẨM</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{route('themsp')}}" enctype="multipart/form-data" method="post">
                                {{ csrf_field() }}
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Tên sản phẩm </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" required name="name" class="form-control " placeholder="VD: iPhone XS MAX">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Dung lượng </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" required name="storage" class="form-control " placeholder="VD: 512GB">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Màu </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" required name="color" class="form-control " placeholder="VD: Gold">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc loại </b>
                                            <select class="form-control show-tick" name="type" data-live-search="true" required>
                                                <option value="">-- Chọn loại --</option>
                                                @foreach($pt as $index => $value)
                                                <option value="{{$index}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc dòng </b>
                                            <select class="form-control show-tick" data-live-search="true" name="catalog" required>
                                                <option value="">-- Chọn dòng --</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xs-12 m-b-20">
                                            <b>Khuyến mãi </b>
                                            <select class="form-control show-tick" data-live-search="true" name="promo">
                                                <option value="">-- Chọn khuyến mãi --</option>
                                                @foreach($promo as $index => $value)
                                                <option value="{{$value->id}}">Giảm {{$value->percent}}% - {{$value->promo_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Giá gốc (₫)</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="price" class="form-control vn-dong" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Số lượng </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="number" name="inventory" class="form-control " placeholder="Số lượng kho" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Bảo hành </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="warranty" class="form-control" placeholder="VD: 1 năm chính hãng Apple" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="m-t--5">Cấu hình</h4>
                                            <hr>
                                            <div id="spec">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <b>Thuộc tính 1 </b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" name="specs[]" class="form-control "
                                                                   placeholder="Chọn loại sản phẩm trước">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4>Mô tả </h4>
                                            <textarea id="tinymce" name="description"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t-20" id="herre">
                                            <b>Video</b>
                                            <span>(ID video: https://www.youtube.com/watch?v=<b class="font-bold col-pink">SYYNCvIyg60</b>)</span>
                                            <div class="m-t-10">
                                                <button type="button" onclick="clickMore();" class="btn bg-blue-grey btn-xs waves-effect m-b-20"><i class="material-icons">add</i> <span>THÊM VIDEO</span></button>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" name="v_name[]" class="form-control " placeholder="Tên video 1" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" name="v_link[]" class="form-control " placeholder="ID 1" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4>Hình ảnh</h4>
                                            <span>(PNG, JPG, JPEG - Tối đa 2MB - Chọn nhiều ảnh)</span>
                                            <button class="btn dehinh bg-blue-grey waves-effect m-t-10 m-b-10" style="cursor: pointer; width: 100%; height: 50px;">
                                                <i class="material-icons">touch_app</i>
                                                <input type="file" id="gallery-photo-add" name="images[]" accept="image/png, image/jpg, image/jpeg" multiple required>
                                            </button>
                                            <div class="gallery-multi"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="modal-footer">
                                    <button type="submit" class="btn bg-indigo waves-effect">
                                        <i data-brackets-id="14157" class="material-icons">check</i>
                                        <span>THÊM</span>
                                    </button>

                                    <button type="button" class="btn bg-grey waves-effect" data-dismiss="modal">
                                        <i data-brackets-id="14157" class="material-icons">close</i>
                                        <span>HUỶ</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($sp as $index => $value)
            <!-- Modal xem sp -->
            <div class="modal fade in" id="xem_sp_{{$value->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">THÔNG TIN: {{$value->name}}</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <h4 class="m-t--5">Thông tin</h4>
                                        <table class="table table-striped table-bordered table-hover">
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <td>{{$value->name}}</td>
                                                <th>Thuộc loại</th>
                                                <td>{{$value->type}}</td>
                                            </tr>
                                            <tr>
                                                <th>Màu sắc</th>
                                                <td>{{$value->color}}</td>
                                                <th>Thuộc dòng</th>
                                                <td>{{$value->catalog}}</td>
                                            </tr>
                                            <tr>
                                                <th>Giá gốc</th>
                                                <td>{{number_format($value->price)}} ₫</td>
                                                <th>Số lượng</th>
                                                <td>{{$value->inventory}}</td>
                                            </tr>
                                            <tr>
                                                <th>Khuyến mãi</th>
                                                <td>
                                                    {{ ( $value->percent != null) ? $value->percent.' %' : '0' }}
                                                </td>

                                                <th>Bảo hành</th>
                                                <td>{{$value->warranty}}</td>
                                            </tr>
                                        </table>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="m-t--5">Cấu hình</h4>
                                            <table class="table table-striped table-bordered table-hover tbl-xem">
                                            </table>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Video</b>
                                            <div class="m-t-10 vid-xem">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info-img align-left" id="herre">
                                            <div style="text-align: left" class="m-t-20 m-b-10"><b>Hình ảnh</b></div>
                                            <div class="img-xem">

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t-10">
                                            <b>Mô tả </b>
                                            <div class="input-group">
                                                <div class="">
                                                    <p>{!! $value->description !!}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-indigo waves-effect">
                                        <i data-brackets-id="14157" class="material-icons">check</i>
                                        <span>THÊM</span>
                                    </button>

                                    <button type="button" class="btn bg-grey waves-effect" data-dismiss="modal">
                                        <i data-brackets-id="14157" class="material-icons">close</i>
                                        <span>HUỶ</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal sửa sp -->
            <div class="modal fade in" id="sua_sp_{{$value->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">SỬA SẢN PHẨM: {{$value->name}}</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{route('suasp',$value->id)}}" enctype="multipart/form-data" method="post">
                                {{ csrf_field() }}
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <b>Tên sản phẩm </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" value="{{\App\Http\Controllers\AdminController::getStringColor($value->name)}}" class="form-control " placeholder="VD: iPhone XS MAX 256GB" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <b>Màu </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" required name="color" value="{{$value->color}}" class="form-control " placeholder="VD: Gold">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc loại </b>
                                            <select class="form-control show-tick" name="type" data-live-search="true" required>
                                                <option value="">-- Chọn loại --</option>
                                                @foreach($pt as $i => $v)
                                                    <option value="{{$i}}" {{ ( $i == $value->ptid) ? 'selected' : '' }} >{{$v}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc dòng </b>
                                            <select class="form-control show-tick ctl-sua" name="catalog" id="ctl-sua-{{$value->id}}" data-live-search="true" required>
                                                <option value="">-- Chọn dòng --</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xs-12 m-b-20">
                                            <b>Khuyến mãi </b>
                                            <select class="form-control show-tick" name="promo">
                                                <option value="">-- Chọn khuyến mãi --</option>
                                                @foreach($promo as $i => $v)
                                                    <option value="{{$v->id}}" {{ ( $v->id == $value->promoid) ? 'selected' : '' }}>Giảm {{$v->percent}}% - {{$v->promo_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Giá gốc (₫)</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="price" value="{{$value->price}}" class="form-control vn-dong" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Số lượng </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="number" name="inventory" value="{{$value->inventory}}" class="form-control " placeholder="Số lượng kho" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Bảo hành </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="warranty" value="{{$value->warranty}}" class="form-control " placeholder="VD: 1 năm chính hãng Apple" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="m-t--5">Cấu hình</h4>
                                            <hr>
                                            <div class="spec-sua">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4>Mô tả </h4>
                                            <textarea id="tinymce" name="description" required>{{$value->description}}</textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t-20" id="herre">
                                            <b>Video</b>
                                            <span>(ID video: https://www.youtube.com/watch?v=<b class="font-bold col-pink">SYYNCvIyg60</b>)</span>
                                            <div class="m-t-10">
                                                <button type="button" onclick="clickMoreEdit();" class="btn bg-blue-grey btn-xs waves-effect m-b-20"><i class="material-icons">add</i> <span>THÊM VIDEO</span></button>
                                            </div>
                                            <div class="vid-sua m-t-10" id="here">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t-20">
                                            <b>Thêm ảnh mới</b>
                                            <span class="m-l-10">(PNG, JPG, JPEG - Tối đa 2MB - Chọn nhiều ảnh)</span>
                                            <button class="btn dehinh bg-blue-grey waves-effect m-t-10 m-b-10" style="cursor: pointer; width: 100%; height: 50px;">
                                                <i class="material-icons">touch_app</i>
                                                <input type="file" class="gallery-photo-edit" name="images[]" accept="image/png, image/jpg, image/jpeg" multiple>
                                            </button>
                                            <div class="gallery-multi-edit"></div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info-img align-left">
                                            <div style="text-align: left" class="m-t-20 m-b-10">
                                                <b>Ảnh hiện tại</b>
                                            </div>
                                            <div class="img-sua">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>
                                <hr>
                                <div class="modal-footer">
                                    <button type="submit" class="btn bg-indigo waves-effect">
                                        <i data-brackets-id="14157" class="material-icons">check</i>
                                        <span>CẬP NHẬT</span>
                                    </button>

                                    <button type="button" class="btn bg-grey waves-effect" data-dismiss="modal">
                                        <i data-brackets-id="14157" class="material-icons">close</i>
                                        <span>HUỶ</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <script>
                // Load cấu hình trong modal xem
                $('.xemsp').on('click',function () {
                    var id = $(this).attr("data-xem");
                    var tbl = $('#xem_sp_'+id+' .tbl-xem');
                    $.ajax({
                        url: 'admin/loadspec',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            // console.log(data);
                            tbl.empty();
                            for ($i = 0; $i < data[0].length; $i++) {
                                tbl.append('<tr><th>' + data[0][$i] + ' </th><td>'+data[1][$i]+'</td></tr>');
                            }
                        }
                    });
                });

                //Load video trong modal xem
                $('.xemsp').on('click',function () {
                    var id = $(this).attr("data-xem");
                    var vid = $('#xem_sp_'+id+' .vid-xem');
                    $.ajax({
                        url: 'admin/loadvid',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            // console.log(data);
                            vid.empty();
                            for ($i = 0; $i < data.length; $i++) {
                                vid.append('<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
                                    '                                                                                        <b>'+ data[$i]["v_name"] +'</b>'+
                                    '                                                                                        <iframe width="400" height="230" src="https://www.youtube.com/embed/'+ data[$i]["v_link"] +'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'+
                                    '                                                                                    </div>');
                            }
                        }
                    });
                });

                //Load hình ảnh trong modal xem
                $('.xemsp').on('click',function () {
                    var id = $(this).attr("data-xem");
                    var img = $('#xem_sp_'+id+' .img-xem');
                    $.ajax({
                        url: 'admin/loadimg',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            // console.log(data);
                            img.empty();
                            for ($i = 0; $i < data.length; $i++) {
                                img.append('<img src="storage/product/'+ data[$i]['image'] +'">');
                            }
                        }
                    });
                });

                //Load Dòng trong modal sửa
                $('.suasp').on('click',function () {
                    var id = $(this).attr("data-sua");
                    var ctl = $('#ctl-sua-'+id);
                    $.ajax({
                        url: 'admin/loadcatalogedit',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            // console.log(data);
                            for ($i = 0; $i < data[0].length; $i++) {
                                ctl.append('<option value="' + data[0][$i]["id"] + '">' + data[0][$i]["catalog"] + '</option>');
                                ctl.val(data[1]);
                                ctl.selectpicker('refresh');
                            }
                        }
                    });
                });

                //Load Dòng dựa theo loại trong các modal
                $('select[name="type"]').on('change',function () {
                    var id = $(this).val();
                    // alert(id);
                    $.ajax({
                        url: 'admin/loadcatalog',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            // console.log(data);
                            $('select[name="catalog"]').empty();
                            for ($i = 0; $i < data[0].length; $i++) {
                                $('select[name="catalog"]').append('<option value="' + data[0][$i]['id'] + '">' + data[0][$i]['catalog'] + '</option>');
                            }
                            $('select[name="catalog"]').selectpicker('refresh');
                            $('#spec').empty();
                            for ($i = 0; $i < data[1].length; $i++) {
                                $('#spec').append('<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">\n' +
                                    '                                                <b>'+data[1][$i] +' </b>\n' +
                                    '                                                <div class="input-group">\n' +
                                    '                                                    <div class="form-line">\n' +
                                    '                                                        <input type="text" name="specs[]" class="form-control " placeholder="Gợi ý: dùng - để ngăn cách">\n' +
                                    '                                                    </div>\n' +
                                    '                                                </div>\n' +
                                    '                                            </div>');
                            }
                        }
                    });
                });

                // Load cấu hình trong modal sửa
                $('.suasp').on('click',function () {
                    var id = $(this).attr("data-sua");
                    var spec = $('#sua_sp_'+id+' .spec-sua');
                    $.ajax({
                        url: 'admin/loadspec',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            // console.log(data);
                            spec.empty();
                            for ($i = 0; $i < data[0].length; $i++) {
                                spec.append('<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><b>'+ data[0][$i] +'</b>\n' +
                                    '                                                <div class="input-group">\n' +
                                    '                                                    <div class="form-line">\n' +
                                    '                                                        <input type="text" name="specs[]" value="'+ data[1][$i] +'" required class="form-control " placeholder="VD: 1 năm chính hãng Apple">\n' +
                                    '                                                    </div>\n' +
                                    '                                                </div></div>');
                            }
                        }
                    });
                });

                //Load video trong modal sửa
                $('.suasp').on('click',function () {
                    var id = $(this).attr("data-sua");
                    var vid = $('#sua_sp_'+id+' .vid-sua');
                    $.ajax({
                        url: 'admin/loadvid',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            // console.log(data);
                            vid.empty();
                            for ($i = 0; $i < data.length; $i++) {
                                vid.append('' +
                                    '                                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">\n' +
                                    '                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">\n' +
                                    '                                                        <div class="input-group">\n' +
                                    '                                                            <div class="form-line">\n' +
                                    '                                                                <input type="text" name="v_name[]" value="'+ data[$i]["v_name"] +'" class="form-control " placeholder="Tên video" required>\n' +
                                    '                                                            </div>\n' +
                                    '                                                        </div>\n' +
                                    '                                                    </div>\n' +
                                    '                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">\n' +
                                    '                                                        <div class="input-group">\n' +
                                    '                                                            <div class="form-line">\n' +
                                    '                                                                <input type="text" name="v_link[]" value="'+ data[$i]["v_link"] +'" class="form-control " placeholder="ID Video" required>\n' +
                                    '                                                            </div>\n' +
                                    '                                                        </div>\n' +
                                    '                                                    </div>\n' +
                                    '                                                </div>' +
                                    '');
                            }
                        }
                    });
                });

                //Load hình ảnh trong modal sửa
                $('.suasp').on('click',function () {
                    var id = $(this).attr("data-sua");
                    var img = $('#sua_sp_'+id+' .img-sua');
                    $.ajax({
                        url: 'admin/loadimg',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            // console.log(data);
                            img.empty();
                            for ($i = 0; $i < data.length; $i++) {
                                img.append('<span class="over-img-sua" id="img-sua-'+ data[$i]["id"] +'" onclick="xoaImg('+ data[$i]["id"] +')">\n' +
                                    '                                                    <img src="storage/product/'+ data[$i]["image"] +'">\n' +
                                    '                                                    <span >\n' +
                                    '                                                        <i class="material-icons bg-pink imgsua" >close</i>\n' +
                                    '                                                    </span>\n' +
                                    '                                                </span>');
                            }
                        }
                    });
                });

                function xoaImg(id) {
                    var _token = '{{csrf_token()}}';
                    if(confirm("Xoá vĩnh viễn ảnh này?")){
                        $.ajax({
                            url: 'admin/delimg',
                            dataType: 'json',
                            type: 'GET',
                            data: {token: _token, iid: id},
                            success: function (data) {
                                console.log(data);
                            }
                        });
                        $('#img-sua-'+id).remove();
                    }
                }
            </script>
        </div>
    </section>
@section('script')
    <script>
        var value = 1;

        function clickMore() {
            value += 1;
            var html = '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="input-group"><div class="form-line"><input type="text" name="v_name[]" class="form-control " placeholder="Tên video ' + value + '"></div></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="input-group"><div class="form-line"><input type="text" name="v_link[]" class="form-control " placeholder="ID ' + value + '"></div></div></div></div>';
            $('#herre').append(html);
        };
        function clickMoreEdit() {
            value += 1;
            var html = '' +
                '                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">\n' +
                '                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">\n' +
                '                                                        <div class="input-group">\n' +
                '                                                            <div class="form-line">\n' +
                '                                                                <input type="text" name="v_name[]" class="form-control " placeholder="Tên video ">\n' +
                '                                                            </div>\n' +
                '                                                        </div>\n' +
                '                                                    </div>\n' +
                '                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">\n' +
                '                                                        <div class="input-group">\n' +
                '                                                            <div class="form-line">\n' +
                '                                                                <input type="text" name="v_link[]" class="form-control " placeholder="ID ">\n' +
                '                                                            </div>\n' +
                '                                                        </div>\n' +
                '                                                    </div>\n' +
                '                                                </div>' +
                '';
            $('#here').append(html);
        };
    </script>
    <script>
        $(function() {
            $("#sp_table").on("click", ".delete-btn", function() {
                var type = $(this).data('type');
                var formnow = $(this).parent().find('.delform');
                if (type === 'cancel') {
                    showCancelMessage(formnow);
                }
            });
        });

        function showCancelMessage(formnow) {
            swal({
                title: "Bạn có chắn chắn?",
                text: "Bạn sẽ không thể khôi phục được loại sản phẩm này!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3F51B5",
                confirmButtonText: "XOÁ",
                cancelButtonText: "HUỶ",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    formnow.submit();
                } else {
                    swal("Đã huỷ", "Loại sản phẩm vẫn còn", "error");
                }
            });
        }
    </script>
    <script>
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#gallery-photo-add').on('change', function() {
                $('.gallery-multi').empty();
                imagesPreview(this, 'div.gallery-multi');
            });
        });
        $(function() {
            var imagesPreviewEdit = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('.gallery-photo-edit').on('change', function() {
                $('.gallery-multi-edit').empty();
                imagesPreviewEdit(this, 'div.gallery-multi-edit');
            });
        });
    </script>
    <script>
        tinymce.init({
            selector: "textarea#tinymce",
            theme: "modern",
            height: 200,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'styleselect fontselect fontsizeselect | bold italic underline | forecolor backcolor',
            toolbar2: 'insertfile undo redo | bullist numlist outdent indent | alignleft aligncenter alignright alignjustify | link image media emoticons | print preview code',
            image_advtab: true
        });
        tinymce.suffix = ".min";
        tinyMCE.baseURL = '/itamloan/public/admincp/plugins/tinymce';
    </script>
@endsection
    </body>
@endsection

