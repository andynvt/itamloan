@extends('admin.master')
@section('head')
    <title>Đánh giá - Admin | i Tâm Loan</title>
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ĐÁNH GIÁ</h2>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DANH SÁCH ĐÁNH GIÁ</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="sp_table">
                                    <thead class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ẢNH</th>
                                        <th class="align-center">TÊN SẢN PHẨM</th>
                                        <th class="align-center">ĐÁNH GIÁ</th>
                                        <th class="align-center">TRUNG BÌNH</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ẢNH</th>
                                        <th class="align-center">TÊN SẢN PHẨM</th>
                                        <th class="align-center">ĐÁNH GIÁ</th>
                                        <th class="align-center">TRUNG BÌNH</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="align-center img-inside-bill">
                                            <img src="images/iphonex.png" alt="" id="imageid">
                                        </td>
                                        <td>Accountant</td>
                                        <td class="align-center">10</td>
                                        <td class="align-center">4,5</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_dg">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="align-center img-inside-bill">
                                            <img src="images/iphonex.png" alt="" id="imageid">
                                        </td>
                                        <td>Accountant</td>
                                        <td class="align-center">10</td>
                                        <td class="align-center">4,5</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_dg">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="align-center img-inside-bill">
                                            <img src="images/iphonex.png" alt="" id="imageid">
                                        </td>
                                        <td>Accountant</td>
                                        <td class="align-center">10</td>
                                        <td class="align-center">4,5</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_dg">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="align-center img-inside-bill">
                                            <img src="images/iphonex.png" alt="" id="imageid">
                                        </td>
                                        <td>Accountant</td>
                                        <td class="align-center">10</td>
                                        <td class="align-center">4,5</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_dg">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

            <!--            Modal xem thông tin khách hàng-->
            <!-- Modal xem don hang -->
            <div class="modal fade in" id="xem_dg" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">SẢN PHẨM: <a href="">iPhone X</a></h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="herre">
                                        <div class="body table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTable js-exportable">
                                                <thead class="bg-blue-grey">
                                                <tr>
                                                    <th class="align-center">#</th>
                                                    <th class="align-center">KHÁCH HÀNG</th>
                                                    <th class="align-center">ĐÁNH GIÁ</th>
                                                    <th class="align-center">NỘI DUNG</th>
                                                    <th class="align-center">THỜI GIAN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Nguyễn Văn Tài</td>
                                                    <td class="align-center">
                                                        5 <span class="col-deep-orange">★</span>
                                                    </td>
                                                    <td class="align-center">Supported neglected met she therefore unwilling discovery remainder.</td>
                                                    <td class="align-center">22/10/2018</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-indigo waves-effect">
                                    <i data-brackets-id="14157" class="material-icons">check</i>
                                    <span>ĐÃ GỬI HÀNG</span>
                                </button>
                                <button type="button" class="btn bg-grey waves-effect" data-dismiss="modal">
                                    <i data-brackets-id="14157" class="material-icons">close</i>
                                    <span>HUỶ</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@section('script')
    <script>
        var value = 1;

        function clickMore() {
            value += 1;
            var html = '<div class="input-group"><div class="form-line"><input type="text" name="type_detail[]" class="form-control" placeholder="Thuộc tính ' + value + '"></div></div>';
            $('#herre').append(html);
        };
    </script>
    <script>
        $(function() {
            $('.delete-btn').on('click', function() {
                var type = $(this).data('type');
                if (type === 'cancel') {
                    showCancelMessage();
                } else if (type === 'confirm') {
                    showConfirmMessage();
                } else if (type === 'done') {
                    showDoneMessage();
                }
            });
        });

        function showCancelMessage() {
            swal({
                title: "Xác nhận huỷ khách hàng?",
                text: "Bạn sẽ không thể khôi phục được trạng thái khách hàng này!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3F51B5",
                confirmButtonText: "HUỶ khách hàng",
                cancelButtonText: "KHÔNG",
                closeOnConfirm: false,
            }, function(isConfirm) {
                swal("Đã huỷ!", "khách hàng đã bị huỷ", "success");
            });
        }

        function showConfirmMessage() {
            swal({
                title: "Xác nhận khách hàng?",
                text: "Bạn đã gửi hàng và xác nhận gửi",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3F51B5",
                confirmButtonText: "ĐÃ GỬI",
                cancelButtonText: "ĐÓNG",
                closeOnConfirm: false
            }, function() {
                swal("Đã gửi hàng!", "Vẫn còn một bước xác nhận hoàn tất.", "success");
            });
        }

        function showDoneMessage() {
            swal({
                title: "Hoàn tất khách hàng?",
                text: "Khách hàng đã nhận hàng và thanh toán đủ",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3F51B5",
                confirmButtonText: "HOÀN TẤT",
                cancelButtonText: "ĐÓNG",
                closeOnConfirm: false
            }, function() {
                swal("Thành công!", "khách hàng đã hoàn tất.", "success");
            });
        }
    </script>
@endsection
    </body>
@endsection


