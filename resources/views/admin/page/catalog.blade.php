@extends('admin.master')
@section('head')
    <title>Dòng sản phẩm - Admin | i Tâm Loan</title>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DÒNG SẢN PHẨM</h2>
                <div class="m-t-10"></div>
                <button type="button" class="btn bg-deep-purple waves-effect" data-toggle="modal"
                        data-target="#them_dsp">
                    <i class="material-icons">add</i>
                    <span>THÊM MỚI</span>
                </button>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DANH SÁCH DÒNG SẢN PHẨM</h2>
                        </div>
                        <a class="toggle-vis" data-column="0">#</a>
                        <a class="toggle-vis" data-column="1">ID</a>
                        <a class="toggle-vis" data-column="2">Ảnh</a>
                        <a class="toggle-vis" data-column="3">Dòng</a>
                        <a class="toggle-vis" data-column="4">Loại</a>
                        <a class="toggle-vis" data-column="5">TT</a>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                                       id="dsp_table">
                                    <thead class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ID</th>
                                        <th class="align-center notexport">ẢNH</th>
                                        <th class="align-center">TÊN DÒNG</th>
                                        <th class="align-center">THUỘC LOẠI</th>
                                        <th class="align-center notexport">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ID</th>
                                        <th class="align-center notexport">ẢNH</th>
                                        <th class="align-center">TÊN DÒNG</th>
                                        <th class="align-center">THUỘC LOẠI</th>
                                        <th class="align-center notexport">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($dsp as $index => $value)
                                        <tr>
                                            <th scope="row">{{$index+1}}</th>
                                            <td>{{$value->id}}</td>
                                            <td class="align-center img-inside">
                                                <img src="storage/product/{{$value->catalog_image}}"
                                                     alt="{{$value->catalog}}" id="imageid">
                                            </td>
                                            <td>{{$value->catalog}}</td>
                                            <td>{{$value->type}}</td>
                                            <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_dsp_{{$value->id}}">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float"
                                                       data-toggle="tooltip" data-placement="top"
                                                       data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                                <span data-toggle="modal" data-target="#sua_dsp_{{$value->id}}">
                                                    <a class="btn btn-warning btn-circle waves-effect waves-circle waves-float"
                                                       data-toggle="tooltip" data-placement="top"
                                                       data-original-title="Chỉnh sửa">
                                                        <i class="material-icons">build</i>
                                                    </a>
                                                </span>
                                                <a href="javascript:void(0);"
                                                   class=" btn btn-danger btn-circle waves-effect waves-circle waves-float delete-btn"
                                                   data-toggle="tooltip" data-placement="top" data-original-title="Xoá"
                                                   data-type="cancel">
                                                    <form action="{{route('xoadong')}}" method="get" class="delform">
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

            <!-- Modal thêm lsp mới -->
            <div class="modal fade in" id="them_dsp" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">THÊM DÒNG SẢN PHẨM</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{route('themdong')}}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-20">
                                            <b>Thuộc loại </b>
                                            <select class="form-control show-tick" name="type" required>
                                                <option value="">-- Chọn loại --</option>
                                                @foreach($pt as $index => $value)
                                                    <option value="{{$index}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Tên dòng </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="catalog" class="form-control "
                                                           placeholder="Tên dòng sản phẩm" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Slogan </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="slogan" class="form-control "
                                                           placeholder="Slogan của dòng sản phẩm" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Ảnh đại diện</b>
                                            <span class="m-l-10">(Kích thước ảnh nhỏ hơn 2MB)</span>
                                            <button class="btn dehinh bg-blue-grey waves-effect m-t-10 m-b-10"
                                                    style="cursor: pointer; width: 100%; height: 50px;">
                                                <i class="material-icons">touch_app</i>
                                                <input type="file" id="gallery-photo-add" name="catalog_image"
                                                       accept="image/png, image/jpg, image/jpeg" required>
                                            </button>
                                            <div class="gallery"></div>
                                        </div>
                                    </div>
                                </div>
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

        @foreach($dsp as $index => $value)
            <!-- Modal xem lsp -->
                <div class="modal fade in" id="xem_dsp_{{$value->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModalLabel">THÔNG TIN: {{$value->catalog}}</h4>
                                <hr>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="demo-masked-input">
                                        <div class="row clearfix">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tr>
                                                    <th>ID</th>
                                                    <td>{{$value->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tên dòng</th>
                                                    <td>{{$value->catalog}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Thuộc loại</th>
                                                    <td>{{$value->type}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Slogan</th>
                                                    <td>{{$value->slogan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Ảnh</th>
                                                    <td class="info-img">
                                                        <img src="storage/product/{{$value->catalog_image}}"
                                                             alt="{{$value->catalog}}">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
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

                <!-- Modal sửa lsp -->
                <div class="modal fade in" id="sua_dsp_{{$value->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModalLabel">SỬA DÒNG: {{$value->catalog}}</h4>
                                <hr>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="{{route('suadong',$value->id)}}" method="post"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="demo-masked-input">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <b>ID </b>
                                                <div class="input-group">
                                                    <div class="form-line disabled">
                                                        <input type="text" class="form-control" value="{{$value->id}}"
                                                               placeholder="Tự sinh ra" disabled="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-20">
                                                <b>Thuộc loại </b>
                                                <select class="form-control show-tick" name="type" required>
                                                    <option value="">-- Chọn loại --</option>
                                                    @foreach($pt as $i => $v)
                                                        <option value="{{$i}}" {{ ( $i == $value->ptid) ? 'selected' : '' }} >{{$v}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <b>Tên dòng </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="catalog" value="{{$value->catalog}}"
                                                               class="form-control " placeholder="Tên loại sản phẩm"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <b>Slogan</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="slogan" value="{{$value->slogan}}"
                                                               class="form-control m-t-20"
                                                               placeholder="Slogan của dòng sản phẩm" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-10">
                                                <b>Ảnh hiện tại</b><br>
                                                <div class="old-gallery m-t-10 align-center">
                                                    <img src="storage/product/{{$value->catalog_image}}"
                                                         alt="{{$value->catalog}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <b>Ảnh mới</b>
                                                <span class="m-l-10">(Kích thước ảnh nhỏ hơn 2MB)</span>
                                                <button class="btn dehinh bg-blue-grey waves-effect m-t-10 m-b-10"
                                                        style="cursor: pointer; width: 100%; height: 50px;">
                                                    <i class="material-icons">touch_app</i>
                                                    <input type="file" class="gallery-photo-edit" name="catalog_image"
                                                           accept="image/png, image/jpg, image/jpeg">
                                                </button>

                                                <div class="gallery-edit"></div>
                                            </div>
                                        </div>
                                    </div>
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
        </div>
    </section>
@section('script')
    <script>
        $(function() {
            $("#dsp_table").on("click", ".delete-btn", function() {
                var type = $(this).data('type');
                var id = $(this).parent().find('input').val();
                var formnow = $(this).parent().find('.delform');
                var token = $(this).parent().find('input[name="_token"]').val();
                if (type === 'cancel') {
                    showCancelMessage(id,token,formnow);
                }
            });
        });

        function showCancelMessage(id,token,formnow) {
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
        $(function () {
            // Multiple images preview in browser
            var imagesPreview = function (input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function (event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#gallery-photo-add').on('change', function () {
                $('.gallery').empty();
                imagesPreview(this, 'div.gallery');
            });
        });
        $(function () {
            // Multiple images preview in browser
            var imagesPreviewEdit = function (input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function (event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('.gallery-photo-edit').on('change', function () {
                $('.gallery-edit').empty();
                imagesPreviewEdit(this, 'div.gallery-edit');
            });
        });
    </script>
    @endsection
<script>

</script>
</body>
@endsection
