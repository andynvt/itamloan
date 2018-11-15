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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>CHÚ THÍCH</h2>
                        </div>
                        <div class="body" style="padding: 10px;">
                            <div class="body table-responsive" style="padding: 0;">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center">Ý NGHĨA</th>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center">Ý NGHĨA</th>
                                    </tr>
                                    <tr>
                                        <td class="align-center">
                                            <span class="label bg-light-blue">MỚI</span>
                                        </td>
                                        <td class="align-center">
                                            Mới đăng ký tài khoản
                                        </td>
                                        <td class="align-center">
                                            <span class="label bg-orange">TIỀM NĂNG</span>
                                        </td>
                                        <td class="align-center">
                                            Đã mua hàng với tổng số tiền > 20 triệu
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="align-center">
                                            <span class="label bg-green">ĐÁNH GIÁ</span>
                                        </td>
                                        <td class="align-center">
                                            Có viết đánh giá sản phẩm
                                        </td>
                                        <td class="align-center">
                                            <span class="label bg-red">VIP</span>
                                        </td>
                                        <td class="align-center">
                                            Đã mua hàng với tổng số tiền > 50 triệu
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="align-center">
                                            <span class="label bg-purple">MUA HÀNG</span>
                                        </td>
                                        <td class="align-center">
                                            Có mua hàng
                                        </td>
                                        <td class="align-center">
                                            <span class="label bg-pink">SUPER VIP</span>
                                        </td>
                                        <td class="align-center">
                                            Đã mua hàng với tổng số tiền > 100 triệu
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

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
                                        <th class="align-center notexport">AVATAR</th>
                                        <th class="align-center">KHÁCH HÀNG</th>
                                        <th class="align-center">LIÊN HỆ</th>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center notexport">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center notexport">AVATAR</th>
                                        <th class="align-center">KHÁCH HÀNG</th>
                                        <th class="align-center">LIÊN HỆ</th>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center notexport">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($kh as $index => $value)
                                        <tr>
                                            <th scope="row">{{$index+1}}</th>
                                            <td class="align-center img-inside">
                                                <img src="storage/user/{{$value->avatar}}" alt="{{$value->c_name}}"
                                                     id="imageid">
                                            </td>
                                            <td>{{$value->c_name}}</td>
                                            <td class="align-center">
                                                <a href="tel:{{$value->phone}}">{{$value->phone}}</a>
                                                <br>
                                                <a href="mailto:{{$value->email}}">{{$value->email}}</a>
                                            </td>
                                            <td class="align-center">
                                                @if(\App\Http\Controllers\AdminController::checkCustomer($value->id) == "svip")
                                                    <span class="label bg-pink">SUPER VIP</span>
                                                @elseif(\App\Http\Controllers\AdminController::checkCustomer($value->id) == "vip")
                                                    <span class="label bg-red">VIP</span>
                                                @elseif(\App\Http\Controllers\AdminController::checkCustomer($value->id) == "tn")
                                                    <span class="label bg-red">TIỀM NĂNG</span>
                                                @elseif(\App\Http\Controllers\AdminController::checkCustomer($value->id) == "buy")
                                                    <span class="label bg-purple">MUA HÀNG</span>
                                                @elseif(\App\Http\Controllers\AdminController::checkCustomer($value->id) == "fb")
                                                    <span class="label bg-green">ĐÁNH GIÁ</span>
                                                @elseif(\App\Http\Controllers\AdminController::checkCustomer($value->id) == "new")
                                                    <span class="label bg-light-blue">MỚI</span>
                                                @endif
                                            </td>
                                            <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_kh_{{$value->id}}">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float xemkh"
                                                       data-toggle="tooltip" data-placement="top"
                                                       data-original-title="Xem chi tiết" data-kh="{{$value->id}}">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
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

            <!--            Modal xem thông tin khách hàng-->
            @foreach($kh as $index => $value)
            <div class="modal fade in" id="xem_kh_{{$value->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">KHÁCH HÀNG: {{$value->c_name}}</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <h4>THÔNG TIN</h4>
                                        <div class="body table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tr>
                                                    <th>Họ tên</th>
                                                    <td>{{$value->c_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Số điện thoại</th>
                                                    <td>{{$value->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{$value->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Địa chỉ nhà</th>
                                                    <td>{{$value->address}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Địa chỉ giao hàng</th>
                                                    <td class="col-pink">{{$value->shipping_address}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <h4>ĐƠN HÀNG</h4>
                                        <div class="body table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>Sản phẩm</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái</th>
                                                </thead>
                                                <tbody class="tbl-xem">

                                                </tbody>

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
                                                    <th class="align-center notexport">ẢNH</th>
                                                    <th class="align-center">TÊN SẢN PHẨM</th>
                                                    <th class="align-center">ĐÁNH GIÁ</th>
                                                    <th class="align-center">NỘI DUNG</th>
                                                    <th class="align-center">THỜI GIAN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($fb as $i => $v)
                                                    @if($v->cid == $value->id)
                                                        <tr>
                                                            <th scope="row">{{$i+1}}</th>
                                                            <td class="align-center img-inside-bill">
                                                                <img src="storage/product/{{$v->image}}" alt="{{$v->name}}" id="imageid">
                                                            </td>
                                                            <td style="width: 20%">{{$v->name}}</td>
                                                            <td class="align-center">
                                                                {{$v->stars}} <span class="col-deep-orange">★</span>
                                                            </td>
                                                            <td class="align-center" style="width: 40%">{{$v->review}}</td>
                                                            <td class="align-center">{{ date('H:i - d/m/Y', strtotime($v->created_at) )}}</td>
                                                        </tr>
                                                @endif
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-grey waves-effect" data-dismiss="modal">
                                    <i data-brackets-id="14157" class="material-icons">close</i>
                                    <span>ĐÓNG</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@section('script')
    <script>
        // Load đơn hàng theo khách hàng
        $('.xemkh').on('click',function () {
            var id = $(this).attr("data-kh");
            var tbl = $('#xem_kh_'+id+' .tbl-xem');

            $.ajax({
                url: 'admin/loadbill',
                dataType: 'json',
                type: 'GET',
                data: {id: id},
                success: function (data) {
                    // console.log(data);
                    tbl.empty();
                    for ($i = 0; $i < data.length; $i++) {
                        tbl.append('<tr>\n' +
                            '                                                    <td>'+ data[$i]["id"] +'</td>\n' +
                            '                                                    <td>'+ data[$i]["total_product"] +'</td>\n' +
                            '                                                    <td>'+ data[$i]["total_price"] +' ₫</td>\n' +
                            '                                                    <td class="col-pink">'+ data[$i]["status"] +'</td>\n' +
                            '                                                </tr>');
                    }
                }
            });
        });
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
