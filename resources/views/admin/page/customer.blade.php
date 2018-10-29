@extends('admin.master')
@section('head')
    <title>Khách hàng - Admin | i Tâm Loan</title>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>KHÁCH HÀNG</h2>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DANH SÁCH KHÁCH HÀNG</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="lsp_table">
                                    <thead class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">KHÁCH HÀNG</th>
                                        <th class="align-center">LIÊN HỆ</th>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">KHÁCH HÀNG</th>
                                        <th class="align-center">LIÊN HỆ</th>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Accountant</td>
                                        <td class="align-center">
                                            <a href="tel:0366988779">0366988779</a>
                                            <br>
                                            <a href="mailto:me.ngvantai@gmail.com">me.ngvantai@gmail.com</a>
                                        </td>
                                        <td class="align-center"><span class="label bg-purple">MUA HÀNG</span></td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_kh">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td class="align-center"><span class="label bg-green">ĐÁNH GIÁ</span></td>

                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td class="align-center"><span class="label bg-light-blue">MỚI</span></td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td class="align-center"><span class="label bg-pink">V.I.P</span></td>
                                        <td class="align-center pd-5">
                                            <a class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
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

            <!--            Modal xem thông tin khách hàng-->
            <!-- Modal xem don hang -->
            <div class="modal fade in" id="xem_kh" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">KHÁCH HÀNG: Nguyễn Văn Tài</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <h4>ĐƠN HÀNG</h4>
                                        <div class="body table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Sản phẩm</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>1</td>
                                                    <td>10</td>
                                                    <td>30.000.000 ₫</td>
                                                    <td class="col-green">Hoàn tất</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>1</td>
                                                    <td>10</td>
                                                    <td>30.000.000 ₫</td>
                                                    <td class="col-red">Thất bại</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>1</td>
                                                    <td>10</td>
                                                    <td>30.000.000 ₫</td>
                                                    <td>Hoàn tất</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>1</td>
                                                    <td>10</td>
                                                    <td>30.000.000 ₫</td>
                                                    <td>Hoàn tất</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <h4>THÔNG TIN</h4>
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
                                        <h4>ĐÁNH GIÁ SẢN PHẨM</h4>
                                        <hr>
                                        <div class="body table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTable js-exportable">
                                                <thead class="bg-blue-grey">
                                                <tr>
                                                    <th class="align-center">#</th>
                                                    <th class="align-center">ẢNH</th>
                                                    <th class="align-center">TÊN SẢN PHẨM</th>
                                                    <th class="align-center">ĐÁNH GIÁ</th>
                                                    <th class="align-center">NỘI DUNG</th>
                                                    <th class="align-center">THỜI GIAN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td class="align-center img-inside-bill">
                                                        <img src="images/iphonex.png" alt="" id="imageid">
                                                    </td>
                                                    <td>iPhone XS MAX 512GB Gold</td>
                                                    <td class="align-center">
                                                        5 <span class="col-deep-orange">★</span>
                                                    </td>
                                                    <td class="align-center">Supported neglected met she therefore unwilling discovery remainder.</td>
                                                    <td class="align-center">22/10/2018</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td class="align-center img-inside-bill">
                                                        <img src="images/iphonex.png" alt="" id="imageid">
                                                    </td>
                                                    <td>iPhone XS MAX 512GB Gold</td>
                                                    <td class="align-center">
                                                        4 <span class="col-deep-orange">★</span>
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
