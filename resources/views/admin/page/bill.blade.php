@extends('admin.master')
@section('head')
    <title>Đơn hàng - Admin | i Tâm Loan</title>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ĐƠN HÀNG</h2>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DANH SÁCH ĐƠN HÀNG</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="lsp_table">
                                    <thead class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">KHÁCH HÀNG</th>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center">THANH TOÁN</th>
                                        <th class="align-center">SẢN PHẨM</th>
                                        <th class="align-center">TỔNG TIỀN</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">KHÁCH HÀNG</th>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center">THANH TOÁN</th>
                                        <th class="align-center">SẢN PHẨM</th>
                                        <th class="align-center">TỔNG TIỀN</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="align-center">Airi Satou <br>0366988779</td>
                                        <td class="align-center pd-5"><span class="badge bg-pink">Chờ xác nhận</span></td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_dh">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>

                                            <a href="javascript:void(0);" class="btn bg-blue btn-circle waves-effect waves-circle waves-float delete-btn" data-toggle="tooltip" data-placement="top" data-original-title="Đã gửi hàng" data-type="confirm">
                                                <i class="material-icons">check</i>
                                            </a>

                                            <a href="javascript:void(0);" class=" btn btn-danger btn-circle waves-effect waves-circle waves-float delete-btn" data-toggle="tooltip" data-placement="top" data-original-title="Huỷ đơn hàng" data-type="cancel">
                                                <i class="material-icons">close</i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Tiger Nixon</td>
                                        <td class="align-center pd-5"><span class="badge bg-red">Thất bại</span></td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ashton Cox</td>
                                        <td class="align-center pd-5"><span class="badge bg-red">Thất bại</span></td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cedric Kelly</td>
                                        <td class="align-center pd-5"><span class="badge bg-blue">Đang gửi</span></td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_dh">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                            <a href="javascript:void(0);" class="btn bg-green btn-circle waves-effect waves-circle waves-float delete-btn" data-toggle="tooltip" data-placement="top" data-original-title="Hoàn tất đơn hàng" data-type="done">
                                                <i class="material-icons">check</i>
                                            </a>

                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brielle Williamson</td>
                                        <td class="align-center pd-5"><span class="badge bg-green">Hoàn tất</span></td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Herrod Chandler</td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">build</i>
                                            </a>
                                            <a class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Rhona Davidson</td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">build</i>
                                            </a>
                                            <a class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Colleen Hurst</td>
                                        <td class="align-center pd-5"><span class="badge bg-purple">Đã thanh toán</span></td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_dh">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>

                                            <a href="javascript:void(0);" class="btn bg-blue btn-circle waves-effect waves-circle waves-float delete-btn" data-toggle="tooltip" data-placement="top" data-original-title="Đã gửi hàng" data-type="confirm">
                                                <i class="material-icons">check</i>
                                            </a>

                                            <a href="javascript:void(0);" class=" btn btn-danger btn-circle waves-effect waves-circle waves-float delete-btn" data-toggle="tooltip" data-placement="top" data-original-title="Huỷ đơn hàng" data-type="cancel">
                                                <i class="material-icons">close</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Sonya Frost</td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">build</i>
                                            </a>
                                            <a class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Jena Gaines</td>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">build</i>
                                            </a>
                                            <a class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Quinn Flynn</td>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">build</i>
                                            </a>
                                            <a class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </a>
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

            <!-- Modal xem don hang -->
            <div class="modal fade in" id="xem_dh" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">ĐƠN HÀNG: 001</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <h4>HOÁ ĐƠN</h4>
                                        <div class="body table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tr>
                                                    <th>ID</th>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th>Tổng tiền</th>
                                                    <td>30.000.000 ₫</td>
                                                </tr>
                                                <tr>
                                                    <th>Trạng thái</th>
                                                    <td class="col-pink">Chờ xác nhận</td>
                                                </tr>
                                                <tr>
                                                    <th>Thanh toán</th>
                                                    <td>Chuyển khoản ngân hàng</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <h4>KHÁCH HÀNG</h4>
                                        <div class="body table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tr>
                                                    <th>Họ tên</th>
                                                    <td>Nguyễn Văn Tài</td>
                                                </tr>
                                                <tr>
                                                    <th>Số điện thoại</th>
                                                    <td>0366988779</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>me.ngvantai@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th>Địa chỉ nhà</th>
                                                    <td>132 3 Tháng 2 - Ninh kiều cần thơ</td>
                                                </tr>
                                                <tr>
                                                    <th>Địa chỉ giao hàng</th>
                                                    <td class="col-pink">2/121C, Mậu Thân, Ninh Kiều, Cần Thơ</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="herre">
                                        <h4>DANH SÁCH SẢN PHẨM</h4>
                                        <hr>
                                        <div class="body table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTable js-exportable">
                                                <thead class="bg-blue-grey">
                                                <tr>
                                                    <th class="align-center">#</th>
                                                    <th class="align-center">ẢNH</th>
                                                    <th class="align-center">TÊN SẢN PHẨM</th>
                                                    <th class="align-center">SỐ LƯỢNG</th>
                                                    <th class="align-center">ĐƠN GIÁ</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td class="align-center img-inside-bill">
                                                        <img src="images/iphonex.png" alt="" id="imageid">
                                                    </td>
                                                    <td>iPhone XS MAX 512GB Gold</td>
                                                    <td class="align-center">2</td>
                                                    <td class="align-center">30.000.000 ₫</td>
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

            <!-- Modal sửa lsp -->
            <div class="modal fade in" id="sua_lsp" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">SỬA LOẠI: iPhone</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>ID </b>
                                            <div class="input-group">
                                                <div class="form-line disabled">
                                                    <input type="text" class="form-control" value="1" placeholder="Tự sinh ra" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Tên loại </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="type" value="iPhone" class="form-control " placeholder="Tên đơn hàng">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="herre">
                                            <b>Thuộc tính</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="type_detail[]" value="Màn hình" class="form-control m-t-20" placeholder="Thuộc tính 1">
                                                </div>
                                            </div>
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
                title: "Xác nhận huỷ đơn hàng?",
                text: "Bạn sẽ không thể khôi phục được trạng thái đơn hàng này!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3F51B5",
                confirmButtonText: "HUỶ ĐƠN HÀNG",
                cancelButtonText: "KHÔNG",
                closeOnConfirm: false,
            }, function(isConfirm) {
                swal("Đã huỷ!", "Đơn hàng đã bị huỷ", "success");
            });
        }

        function showConfirmMessage() {
            swal({
                title: "Xác nhận đơn hàng?",
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
                title: "Hoàn tất đơn hàng?",
                text: "Khách hàng đã nhận hàng và thanh toán đủ",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3F51B5",
                confirmButtonText: "HOÀN TẤT",
                cancelButtonText: "ĐÓNG",
                closeOnConfirm: false
            }, function() {
                swal("Thành công!", "Đơn hàng đã hoàn tất.", "success");
            });
        }
    </script>
@endsection
</body>
@endsection
