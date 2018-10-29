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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-deep-purple">
                            <h2 style="width: 80%">
                                Chào đón XS / XS Max
                            </h2>
                            <ul class="header-dropdown m-r-0">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#sua_km">
                                        <i class="material-icons" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="delete-btn" data-type="cancel" data-toggle="tooltip" data-placement="top" data-original-title="Xoá">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div><strong>Bắt đầu:</strong> &nbsp;12/12/2012 </div>
                            <div><strong>Kết thúc:</strong> 12/12/2012 </div>
                            <hr>
                            <p>
                                <strong>Mô tả: </strong>Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                            </p>
                            <hr>
                            <img src="admincp/images/br.jpeg" alt="" style="width: 100%">
                            <span class="promo-discount bg-deep-orange">-5%</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-deep-purple">
                            <h2 style="width: 80%">
                                Chào đón XS / XS Max
                            </h2>
                            <ul class="header-dropdown m-r-0">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#sua_km">
                                        <i class="material-icons" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="delete-btn">
                                        <i class="material-icons" data-type="cancel" data-toggle="tooltip" data-placement="top" data-original-title="Xoá">delete</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div><strong>Bắt đầu:</strong> &nbsp;12/12/2012 </div>
                            <div><strong>Kết thúc:</strong> 12/12/2012 </div>
                            <hr>
                            <p>
                                <strong>Mô tả: </strong>Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                            </p>
                            <hr>
                            <img src="admincp/images/br.jpeg" alt="" style="width: 100%">
                            <span class="promo-discount bg-deep-orange">-5%</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-deep-purple">
                            <h2 style="width: 80%">
                                Chào đón XS / XS Max
                            </h2>
                            <ul class="header-dropdown m-r-0">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#sua_km">
                                        <i class="material-icons" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="delete-btn">
                                        <i class="material-icons" data-type="cancel" data-toggle="tooltip" data-placement="top" data-original-title="Xoá">delete</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div><strong>Bắt đầu:</strong> &nbsp;12/12/2012 </div>
                            <div><strong>Kết thúc:</strong> 12/12/2012 </div>
                            <hr>
                            <p>
                                <strong>Mô tả: </strong>Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                            </p>
                            <hr>
                            <img src="admincp/images/br.jpeg" alt="" style="width: 100%">
                            <span class="promo-discount bg-deep-orange">-5%</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-deep-purple">
                            <h2 style="width: 80%">
                                Chào đón XS / XS Max
                            </h2>
                            <ul class="header-dropdown m-r-0">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#sua_km">
                                        <i class="material-icons" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa">edit</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="delete-btn">
                                        <i class="material-icons" data-type="cancel" data-toggle="tooltip" data-placement="top" data-original-title="Xoá">delete</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div><strong>Bắt đầu:</strong> &nbsp;12/12/2012 </div>
                            <div><strong>Kết thúc:</strong> 12/12/2012 </div>
                            <hr>
                            <p>
                                <strong>Mô tả: </strong>Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                            </p>
                            <hr>
                            <img src="admincp/images/br.jpeg" alt="" style="width: 100%">
                            <span class="promo-discount bg-deep-orange">-5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal thêm khuyến mãi mới -->
    <div class="modal fade in" id="them_km" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">THÊM KHUYẾN MÃI</h4>
                    <hr>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <b>Tên </b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">title</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="promo_name" class="form-control" placeholder="Tên CTKM">
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
                                            <input type="text" name="promo_percent" class="form-control percent" placeholder="VD: 69%">
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
                                            <input type="text" name="start_date" class="datetimepicker form-control" placeholder="Chọn ngày giờ bắt đầu...">
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
                                            <input type="text" name="end_date" class="datetimepicker form-control" placeholder="Chọn ngày giờ kết thúc...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <b>Mô tả chi tiết</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="promo_info" class="form-control no-resize auto-growth" placeholder="Nhập mô tả chi tiết về CTKM"></textarea>
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

    <!--Modal sửa km-->
    <div class="modal fade in" id="sua_km" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">SỬA KHUYẾN MÃI XXX</h4>
                    <hr>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <b>Tên </b>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">title</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" name="promo_name" value="XXX" class="form-control" placeholder="Tên CTKM">
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
                                            <input type="text" name="promo_percent" value="69" class="form-control percent" placeholder="VD: 69%">
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
                                            <input type="text" name="start_date" value="XXX" class="datetimepicker form-control" placeholder="Chọn ngày giờ bắt đầu...">
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
                                            <input type="text" name="end_date" value="XXX" class="datetimepicker form-control" placeholder="Chọn ngày giờ kết thúc...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <b>Mô tả chi tiết</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize auto-growth" placeholder="Nhập mô tả chi tiết về CTKM">XXX</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-10">
                                    <b>Ảnh hiện tại</b>
                                    <div class="old-gallery m-t-10">
                                        <img src="admincp/images/animation-bg.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <b>Ảnh mới</b>
                                    <span class="m-l-10">(Kích thước ảnh nhỏ hơn 2MB)</span>
                                    <button class="btn dehinh bg-blue-grey waves-effect m-t-10 m-b-10" style="cursor: pointer; width: 100%; height: 50px;">
                                        <i class="material-icons">touch_app</i>
                                        <input type="file" id="gallery-photo-edit" name="images[]" accept="image/png, image/jpg, image/jpeg" required>
                                    </button>

                                    <div class="gallery-edit"></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-indigo waves-effect">
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
@section('script')
    <script>
        $(function() {
            $('.delete-btn').on('click', function() {
                var type = $(this).data('type');
                //                    alert(type);
                if (type === 'cancel') {
                    showCancelMessage();
                }
            });
        });

        function showCancelMessage() {
            swal({
                title: "Bạn có chắn chắn?",
                text: "Bạn sẽ không thể khôi phục được khuyến mãi này!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3F51B5",
                confirmButtonText: "Xoá",
                cancelButtonText: "Huỷ",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    swal("Đã xoá!", "Khuyến mãi đã được xoá", "success");
                } else {
                    swal("Đã huỷ", "Khuyến mãi vẫn còn", "error");
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
            $('#gallery-photo-edit').on('change', function() {
                $('.gallery-edit').empty();
                imagesPreviewEdit(this, 'div.gallery-edit');
            });
        });
    </script>
@endsection
</body>
@endsection
