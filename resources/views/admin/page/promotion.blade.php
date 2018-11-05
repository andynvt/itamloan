@extends('admin.master')
@section('head')
    <title>Khuyến mãi - Admin | i Tâm Loan</title>
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CHƯƠNG TRÌNH KHUYẾN MÃI</h2>
                <div class="m-t-10"></div>
                <button type="button" class="btn bg-deep-purple waves-effect" data-toggle="modal" data-target="#them_km">
                    <i class="material-icons">add</i>
                    <span>THÊM MỚI</span>
                </button>
            </div>
            <!-- Basic Example -->
            <div class="row clearfix">
                @foreach($km as $index => $value)
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        @if(\App\Http\Controllers\AdminController::checkTimePromo($value->end_date))
                        <div class="ribbon">
                            <div class="txt">HẾT HẠN</div>
                        </div>
                        @endif

                        <div class="header bg-deep-purple">
                            <h2 style="width: 80%">
                                {{$value->promo_name}}
                            </h2>
                            <ul class="header-dropdown m-r-0">
                                <li>
                                    <a href="javascript:void(0);" data-km="{{$value->id}}" data-toggle="modal" data-target="#sua_spkm_{{$value->id}}" class="sua_spkm">
                                        <i class="material-icons" data-toggle="tooltip" data-placement="top" data-original-title="Sản phẩm trong CTKM">settings</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-km="{{$value->id}}" data-toggle="modal" data-target="#sua_km_{{$value->id}}" class="sua_km">
                                        <i class="material-icons" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa thông tin CTKM">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                       class="∂waves-effect waves-circle waves-float delete-btn"
                                       data-toggle="tooltip" data-placement="top" data-original-title="Xoá"
                                       data-type="cancel">
                                        <form action="{{route('xoakm')}}" method="get" class="delform">
                                            <input type="hidden" name="_token" content="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{$value->id}}">
                                            <i class="material-icons">delete</i>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div><strong>Bắt đầu:</strong> &nbsp;{{$value->start_date}} </div>
                            <div><strong>Kết thúc:</strong> {{$value->end_date}}  </div>
                            <hr>
                            <p>
                                <strong>Mô tả: </strong>
                                {{$value->promo_info}}
                            </p>
                            <hr>
                            <div class="div-img-promo">
                                <img src="storage/promo/{{$value->promo_image}}" alt="{{$value->promo_name}}">
                            </div>
                            <span class="promo-discount bg-pink">-{{$value->percent}}%</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal thêm khuyến mãi mới -->
    <div class="modal fade in" id="them_km" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">THÊM KHUYẾN MÃI</h4>
                    <hr>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('themkm')}}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <b>Tên </b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">title</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="promo_name" class="form-control" placeholder="Tên CTKM" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <b>Giảm giá (%)</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="percent" class="form-control percent" placeholder="VD: 69%" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                    <b>Ngày bẳt đầu</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="start_date" class="datetimepicker form-control" placeholder="Chọn ngày giờ bắt đầu..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <b>Ngày kết thúc</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="end_date" class="datetimepicker form-control" placeholder="Chọn ngày giờ kết thúc..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <b>Mô tả chi tiết</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <textarea required rows="4" name="promo_info" class="form-control no-resize auto-growth" placeholder="Nhập mô tả chi tiết về CTKM"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <b>Ảnh đại diện</b>
                                    <span class="m-l-10">(Kích thước ảnh nhỏ hơn 2MB)</span>
                                    <button class="btn dehinh bg-blue-grey waves-effect m-t-10 m-b-10" style="cursor: pointer; width: 100%; height: 50px;">
                                        <i class="material-icons">touch_app</i>
                                        <input type="file" id="gallery-photo-add" name="promo_image" accept="image/png, image/jpg, image/jpeg" required>
                                    </button>
                                    <div class="gallery"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4>THÊM SẢN PHẨM VÀO CTKM</h4>
                                    <hr>
                                    <div class="body table-responsive">
                                        <table class="table table-striped table-bordered table-hover dataTable js-exportable" id="km_table">
                                            <thead class="bg-blue-grey">
                                            <tr>
                                                <th class="align-center">
                                                    <input type="checkbox" id="checkall" class="filled-in chk-col-pink">
                                                    <label for="checkall" class="chbx"></label>
                                                </th>
                                                <th class="align-center">ID</th>
                                                <th class="align-center">ẢNH</th>
                                                <th class="align-center">TÊN SẢN PHẨM</th>
                                                <th class="align-center">LOẠI</th>
                                                <th class="align-center">DÒNG</th>
                                                <th class="align-center">GIÁ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($p as $index => $value)
                                            <tr>
                                                <td class="align-center">
                                                    <input type="checkbox" id="pid{{$value->id}}" value="{{$value->id}}" name="pid[]" class="filled-in chk-col-pink checkbox">
                                                    <label for="pid{{$value->id}}"></label>
                                                </td>
                                                <td class="align-center">{{$value->id}}</td>
                                                <td class="align-center img-inside-bill">
                                                    <img src="storage/product/{{$value->image}}" alt="{{$value->name}}" id="imageid">
                                                </td>
                                                <td style="width: 30%">{{$value->name}}</td>
                                                <td class="align-center">{{$value->type}}</td>
                                                <td class="align-center">{{$value->catalog}}</td>
                                                <td class="align-center">{{number_format($value->price)}} ₫</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

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

    <!--Modal sửa km-->
    @foreach($km as $index => $value)
    <div class="modal fade in" id="sua_km_{{$value->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">SỬA KHUYẾN MÃI: {{$value->promo_name}}</h4>
                    <hr>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('suakm',$value->id)}}" enctype="multipart/form-data" method="post">
                        <div class="demo-masked-input" >
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <b>Tên </b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">title</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="promo_name" value="{{$value->promo_name}}" class="form-control" placeholder="Tên CTKM">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <b>Giảm giá (%)</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="percent" value="{{$value->percent}}" class="form-control percent" placeholder="VD: 69%">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                    <b>Ngày bẳt đầu</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="start_date" value="{{$value->start_date}}" class="datetimepicker form-control" placeholder="Chọn ngày giờ bắt đầu...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <b>Ngày kết thúc</b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="end_date" value="{{$value->end_date}}" class="datetimepicker form-control" placeholder="Chọn ngày giờ kết thúc...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <b>Mô tả chi tiết</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize auto-growth" placeholder="Nhập mô tả chi tiết về CTKM">{{$value->promo_info}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-10">
                                    <b>Ảnh hiện tại</b><br>
                                    <div class="old-gallery m-t-10">
                                        <img src="storage/promo/{{$value->promo_image}}" alt="{{$value->promo_name}}">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <b>Ảnh mới</b>
                                    <span class="m-l-10">(Kích thước ảnh nhỏ hơn 2MB)</span>
                                    <button class="btn dehinh bg-blue-grey waves-effect m-t-10 m-b-10" style="cursor: pointer; width: 100%; height: 50px;">
                                        <i class="material-icons">touch_app</i>
                                        <input type="file" class="gallery-photo-edit" name="images" accept="image/png, image/jpg, image/jpeg" >
                                    </button>
                                    <div class="gallery-edit"></div>
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

    <!--Modal sửa spkm-->
    <div class="modal fade in" id="sua_spkm_{{$value->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('suaspkm',$value->id)}}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4>SẢN PHẨM ĐANG NẰM TRONG CTKM NÀY</h4>
                                    <hr>
                                    <div class="body table-responsive">
                                        <table class="table table-striped table-bordered table-hover dataTable js-exportable" id="tbl-spkm-{{$value->id}}">
                                            <thead class="bg-blue-grey">
                                            <tr>
                                                <th class="align-center">XOÁ</th>
                                                <th class="align-center">ID</th>
                                                <th class="align-center">ẢNH</th>
                                                <th class="align-center">TÊN SẢN PHẨM</th>
                                                <th class="align-center">LOẠI</th>
                                                <th class="align-center">DÒNG</th>
                                                <th class="align-center">GIÁ</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tbl-km-{{$value->id}}">
                                            @foreach($spkm as $i => $v)
                                                @if($v->promoid == $value->id)
                                                <tr id="tr-del-{{$v->id}}">
                                                    <td class="align-center">
                                                        <a href="javascript:void(0);"
                                                           class=" btn btn-danger btn-circle waves-effect waves-circle waves-float delete-btn"
                                                           data-toggle="tooltip" data-placement="top" data-original-title="Xoá sản phẩm khỏi CTKM"
                                                           data-type="xoaspkm" data-token="{{ csrf_token() }}" data-idsp="{{$v->id}}" data-tbl="tbl-spkm-{{$value->id}}">
                                                                <i class="material-icons">delete</i>
                                                        </a>
                                                    </td>
                                                    <td class="align-center">{{$v->id}}</td>
                                                    <td class="align-center img-inside-bill">
                                                        <img src="storage/product/{{$v->image}}" alt="{{$v->name}}" id="imageid">
                                                    </td>
                                                    <td style="width: 30%">{{$v->name}}</td>
                                                    <td class="align-center">{{$v->type}}</td>
                                                    <td class="align-center">{{$v->catalog}}</td>
                                                    <td class="align-center">{{number_format($v->price)}} ₫</td>
                                                </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4>THÊM SẢN PHẨM VÀO CTKM</h4>
                                    <hr>
                                    <div class="body table-responsive">
                                        <table class="table table-striped table-bordered table-hover dataTable js-exportable" id="km_table">
                                            <thead class="bg-blue-grey">
                                            <tr>
                                                <th class="align-center">
                                                    <input type="checkbox" id="scheckall{{$value->id}}" class="filled-in chk-col-pink scheckall">
                                                    <label for="scheckall{{$value->id}}" class="chbx"></label>
                                                </th>
                                                <th class="align-center">ID</th>
                                                <th class="align-center">ẢNH</th>
                                                <th class="align-center">TÊN SẢN PHẨM</th>
                                                <th class="align-center">LOẠI</th>
                                                <th class="align-center">DÒNG</th>
                                                <th class="align-center">GIÁ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($p as $i => $v)
                                                <tr>
                                                    <td class="align-center">
                                                        <input type="checkbox" id="spid{{$value->id}}{{$v->id}}" value="{{$v->id}}" name="spid[]" class="filled-in chk-col-pink scheckbox">
                                                        <label for="spid{{$value->id}}{{$v->id}}"></label>
                                                    </td>
                                                    <td class="align-center">{{$v->id}}</td>
                                                    <td class="align-center img-inside-bill">
                                                        <img src="storage/product/{{$v->image}}" alt="{{$v->name}}" id="imageid">
                                                    </td>
                                                    <td style="width: 30%">{{$v->name}}</td>
                                                    <td class="align-center">{{$v->type}}</td>
                                                    <td class="align-center">{{$v->catalog}}</td>
                                                    <td class="align-center">{{number_format($v->price)}} ₫</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
@section('script')
    <script>

        //Check box all
        $("#checkall").on('change',function(){
            $(".checkbox").prop('checked',$(this).is(":checked"));
        });
        $(".scheckall").on('change',function(){
            $(".scheckbox").prop('checked',$(this).is(":checked"));
        });

        //Dialog xoá
        $(function() {
            $('.delete-btn').on('click', function() {
                var type = $(this).data('type');
                var token = $(this).data('token');
                var idsp = $(this).data('idsp');

                var id = $(this).parent().find('input[name="id"]').val();
                var formnow = $(this).parent().find('.delform');
                var _token = $(this).parent().find('input[name="_token"]').val();

                if (type === 'cancel') {
                    showCancelMessage(id,_token,formnow);
                }
                if(type === 'xoaspkm'){
                    showDelKM(token,idsp);
                }
            });
        });

        function showDelKM(token,idsp) {
            swal({
                title: "Bạn có chắn chắn?",
                text: "Xoá sản phẩm ra khỏi CTKM này",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3F51B5",
                confirmButtonText: "Xoá",
                cancelButtonText: "Huỷ",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                        $.ajax({
                            url: 'admin/xoaspkm',
                            type: 'GET',
                            dataType: "json",
                            data: {token: token, idsp: idsp},
                            success: function(data){
                                // console.log(data);
                                swal("Đã xoá!", "Loại sản phẩm đã được xoá", "success");
                                setTimeout(function(){
                                    location.reload();
                                }, 1000);
                            }
                        });
                } else {
                    swal("Đã huỷ", "Sản phẩm vẫn còn", "error");
                }
            });
        }

        function showCancelMessage(id,_token,formnow) {
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
                $('.gallery').empty();
                imagesPreview(this, 'div.gallery');
            });
        });
        $(function() {
            // Multiple images preview in browser
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
                $('.gallery-edit').empty();
                imagesPreviewEdit(this, 'div.gallery-edit');
            });
        });
    </script>
@endsection
</body>
@endsection
