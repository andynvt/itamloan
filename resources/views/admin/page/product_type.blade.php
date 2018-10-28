@extends('admin.master')
@section('head')
    <title>Loại sản phẩm - Admin | i Tâm Loan</title>
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LOẠI SẢN PHẨM</h2>
                <div class="m-t-10"></div>
                <button type="button" class="btn bg-deep-purple waves-effect" data-toggle="modal" data-target="#them_lsp">
                    <i class="material-icons">add</i>
                    <span>THÊM MỚI</span>
                </button>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DANH SÁCH LOẠI SẢN PHẨM</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="lsp_table">
                                    <thead class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ID</th>
                                        <th class="align-center">TÊN LOẠI</th>
                                        <th class="align-center">MÔ TẢ</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ID</th>
                                        <th class="align-center">TÊN LOẠI</th>
                                        <th class="align-center">MÔ TẢ</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_lsp">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                            <span data-toggle="modal" data-target="#sua_lsp">
                                                    <a class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa">
                                                        <i class="material-icons">build</i>
                                                    </a>
                                                </span>
                                            <a href="javascript:void(0);" class=" btn btn-danger btn-circle waves-effect waves-circle waves-float delete-btn" data-toggle="tooltip" data-placement="top" data-original-title="Xoá" data-type="cancel">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
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
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
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
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
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
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
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

                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
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
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
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
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
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
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
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
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
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
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
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
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
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
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
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
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
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



            <!-- Modal thêm lsp mới -->
            <div class="modal fade in" id="them_lsp" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">THÊM LOẠI SẢN PHẨM</h4>
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
                                                    <input type="text" name="id" value="" class="form-control" placeholder="Tự sinh ra" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Tên loại </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="type" class="form-control " placeholder="Tên loại sản phẩm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="herre">
                                            <b>Thuộc tinh</b>
                                            <span class="m-l-20">(VD: Màn hình, CPU,...)</span>
                                            <div class="m-t-0">
                                                <button type="button" onclick="clickMore();" class="btn bg-blue-grey btn-xs waves-effect m-t-20"><i class="material-icons">add</i> <span>THÊM THUỘC TÍNH</span></button>
                                            </div>

                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="type_detail[]" class="form-control m-t-20" placeholder="Thuộc tính 1">
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

            <!-- Modal xem lsp -->
            <div class="modal fade in" id="xem_lsp" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">THÔNG TIN: iPhone</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <b>ID </b>
                                        <div class="input-group">
                                            <div class="form-line disabled">
                                                <input type="text" class="form-control" value="1" placeholder="Tự sinh ra" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <b>Tên loại </b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" value="iPhone" class="form-control " readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="herre">
                                        <b>Thuộc tính</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" value="Màn hình" class="form-control m-t-20" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
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
                                                    <input type="text" name="type" value="iPhone" class="form-control " placeholder="Tên loại sản phẩm">
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
                }
            });
        });

        function showCancelMessage() {
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
                    swal("Đã xoá!", "Loại sản phẩm đã được xoá", "success");
                } else {
                    swal("Đã huỷ", "Loại sản phẩm vẫn còn", "error");
                }
            });
        }
    </script>
@endsection
</body>
@endsection
