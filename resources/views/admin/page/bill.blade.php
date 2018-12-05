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
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_basket</i>
                        </div>
                        <div class="content">
                            <div class="text">ĐƠN HÀNG HÔM NAY</div>
                            <div class="number count-to" data-from="0" data-to="{{$tk_today['cnt']}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">attach_money</i>
                        </div>
                        <div class="content">
                            <div class="text">DOANH THU HÔM NAY</div>

                            <div class="number">{{\App\Http\Controllers\AdminController::convertMoney($tk_today['sum'])}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">ĐƠN HÀNG THÁNG {{$thang}}</div>
                            <div class="number count-to" data-from="0" data-to="{{$tk_month['cnt']}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text">DOANH THU THÁNG {{$thang}}</div>
                            <div class="number">{{\App\Http\Controllers\AdminController::convertMoney($tk_month['sum'])}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DANH SÁCH ĐƠN HÀNG</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="dh_table">
                                    <thead class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ID</th>
                                        <th class="align-center">KHÁCH HÀNG</th>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center">THANH TOÁN</th>
                                        <th class="align-center">SẢN PHẨM</th>
                                        <th class="align-center">TỔNG TIỀN</th>
                                        <th class="align-center">NGÀY</th>
                                        <th class="align-center notexport">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ID</th>
                                        <th class="align-center">KHÁCH HÀNG</th>
                                        <th class="align-center">TRẠNG THÁI</th>
                                        <th class="align-center">THANH TOÁN</th>
                                        <th class="align-center">SẢN PHẨM</th>
                                        <th class="align-center">TỔNG TIỀN</th>
                                        <th class="align-center">NGÀY</th>
                                        <th class="align-center notexport">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($dh as $index => $value)
                                    <tr>
                                        <th scope="row">{{$index+1}}</th>
                                        <th class="align-center" style="width: 3%">{{$value->id}}</th>
                                        <td class="align-center">{{$value->c_name}} <br><a href="tel:{{$value->phone}}">{{$value->phone}}</a></td>
                                        <td class="align-center pd-5">
                                            @if($value->bsid == 1)
                                                <span class="label bg-pink">CHỜ XÁC NHẬN</span>
                                            @elseif($value->bsid == 2)
                                                <span class="label bg-teal">ĐÃ TT ONLINE</span>
                                            @elseif($value->bsid == 3)
                                                <span class="label bg-blue">ĐANG GỬI</span>
                                            @elseif($value->bsid == 4)
                                                <span class="label bg-green">HOÀN TẤT</span>
                                            @elseif($value->bsid == 5)
                                                <span class="label bg-red">THẤT BẠI</span>
                                            @elseif($value->bsid == 6)
                                                <span class="label bg-teal">ĐÃ TT ONLINE</span>
                                            @endif
                                        </td>
                                        <td>{{$value->payment}}</td>
                                        <td class="align-center" style="width: 3%">{{$value->total_product}}</td>
                                        <td class="align-center">{{\App\Http\Controllers\AdminController::convertMoney($value->total_price)}}</td>
                                        <td class="align-center">{{ date('d/m/Y', strtotime($value->created_at) )}}</td>
                                        <td class="align-center" STYLE="width: 15%">
                                            @if($value->bsid == 1)
                                                <span data-toggle="modal" data-target="#xem_dh_{{$value->id}}">
                                                <a class="btn btn-info btn-circle waves-effect waves-circle waves-float xemdh "
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Xem chi tiết" data-dh="{{$value->id}}">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                </span>
                                                <a href="javascript:void(0);"
                                                   class="btn bg-blue btn-circle waves-effect waves-circle waves-float delete-btn guihang"
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Đã gửi hàng" data-confirm="gui" data-dh="{{$value->id}}">
                                                    <i class="material-icons">send</i>
                                                </a>
                                                <a href="javascript:void(0);"
                                                   class=" btn btn-danger btn-circle waves-effect waves-circle waves-float delete-btn huydon"
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Huỷ đơn hàng" data-dh="{{$value->id}}">
                                                    <i class="material-icons">sync_disabled</i>
                                                </a>
                                            @elseif($value->bsid == 2)
                                                <span data-toggle="modal" data-target="#xem_dh_{{$value->id}}">
                                                <a class="btn btn-info btn-circle waves-effect waves-circle waves-float xemdh "
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Xem chi tiết" data-dh="{{$value->id}}">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                </span>

                                                <a href="javascript:void(0);"
                                                   class="btn bg-blue btn-circle waves-effect waves-circle waves-float delete-btn guihang"
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Đã gửi hàng" data-confirm="gui" data-dh="{{$value->id}}">
                                                    <i class="material-icons">send</i>
                                                </a>

                                                <a href="javascript:void(0);"
                                                   class=" btn btn-danger btn-circle waves-effect waves-circle waves-float delete-btn huydon"
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Huỷ đơn hàng" data-dh="{{$value->id}}">
                                                    <i class="material-icons">sync_disabled</i>
                                                </a>
                                                </a>
                                            @elseif($value->bsid == 6)
                                                <span data-toggle="modal" data-target="#xem_dh_{{$value->id}}">
                                                <a class="btn btn-info btn-circle waves-effect waves-circle waves-float xemdh "
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Xem chi tiết" data-dh="{{$value->id}}">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                </span>

                                                <a href="javascript:void(0);"
                                                   class="btn bg-blue btn-circle waves-effect waves-circle waves-float delete-btn guihang"
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Đã gửi hàng" data-confirm="gui" data-dh="{{$value->id}}">
                                                    <i class="material-icons">send</i>
                                                </a>

                                                <a href="javascript:void(0);"
                                                   class=" btn btn-danger btn-circle waves-effect waves-circle waves-float delete-btn huydon"
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Huỷ đơn hàng" data-dh="{{$value->id}}">
                                                    <i class="material-icons">sync_disabled</i>
                                                </a>
                                            @elseif($value->bsid == 3)
                                                <span data-toggle="modal" data-target="#xem_dh_{{$value->id}}">
                                                <a class="btn btn-info btn-circle waves-effect waves-circle waves-float xemdh"
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Xem chi tiết" data-dh="{{$value->id}}">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                </span>
                                                <a href="javascript:void(0);"
                                                   class="btn bg-green btn-circle waves-effect waves-circle waves-float delete-btn guihang"
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Hoàn tất đơn hàng" data-confirm="ht" data-dh="{{$value->id}}">
                                                    <i class="material-icons">check</i>
                                                </a>
                                            @elseif($value->bsid == 4 || $value->bsid == 5)
                                                <span data-toggle="modal" data-target="#xem_dh_{{$value->id}}">
                                                <a class="btn btn-info btn-circle waves-effect waves-circle waves-float xemdh"
                                                   data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Xem chi tiết" data-dh="{{$value->id}}">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                </span>
                                            @endif
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

            <!-- Modal xem don hang -->
            @foreach($dh as $index => $value)
            <div class="modal fade in" id="xem_dh_{{$value->id}}" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">ĐƠN HÀNG: {{$value->id}}</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <h4>HOÁ ĐƠN</h4>
                                            <div class="body table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <tr>
                                                        <th>ID</th>
                                                        <td>{{$value->id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Sản phẩm</th>
                                                        <td>{{$value->total_product}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tổng tiền</th>
                                                        <td>{{number_format($value->total_price)}} ₫</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ngày đặt</th>
                                                        <td>{{ date('H:i - d/m/Y', strtotime($value->created_at) )}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Thanh toán</th>
                                                        <td>{{$value->payment}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Trạng thái</th>
                                                        <td class="col-pink">{{$value->status}}</td>
                                                    </tr>
                                                    @if($value->bsid == 5)
                                                    <tr>
                                                        <th>Lý do</th>
                                                        <td class="col-pink">{{$value->admin_note}}</td>
                                                    </tr>
                                                    @endif
                                                    <tr>
                                                        <th>Ghi chú</th>
                                                        <td>{{$value->note}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                            <h4>KHÁCH HÀNG</h4>
                                            <div class="body table-responsive">
                                                <table class="table table-striped table-bordered table-hover tbl-xem">
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="herre">
                                            <h4>DANH SÁCH SẢN PHẨM TRONG ĐƠN HÀNG</h4>
                                            <hr>
                                            <div class="body table-responsive">
                                                <table class="table table-striped table-bordered table-hover dataTable js-exportable">
                                                    <thead class="bg-blue-grey">
                                                    <tr>
                                                        <th class="align-center">#</th>
                                                        <th class="align-center notexport">ẢNH</th>
                                                        <th class="align-center">TÊN SẢN PHẨM</th>
                                                        <th class="align-center">SỐ LƯỢNG</th>
                                                        <th class="align-center">ĐƠN GIÁ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($bd as $i => $v)
                                                        @if($v->bid == $value->id)
                                                            <tr>
                                                                <th scope="row">{{$i+1}}</th>
                                                                <td class="align-center img-inside-bill">
                                                                    <img src="storage/product/{{$v->image}}"
                                                                         alt="{{$v->name}}"
                                                                         id="imageid">
                                                                </td>
                                                                <td>{{$v->name}}</td>
                                                                <td class="align-center">{{$v->quantity}}</td>
                                                                <td class="align-center">
                                                                    @if($v->percent != null)
                                                                        {{ number_format($v->price - ($v->price * $v->percent / 100)) }}
                                                                        ₫
                                                                    @else
                                                                        {{ number_format($v->price) }} ₫
                                                                    @endif
                                                                </td>
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
                                    @if($value->bsid == 1)
                                        <button type="button" class="btn bg-blue waves-effect guihang" data-dh="{{$value->id}}" data-confirm="gui">
                                            <i data-brackets-id="14157" class="material-icons">send</i>
                                            <span>ĐÃ GỬI HÀNG</span>
                                        </button>
                                        <button type="button" class="btn btn-danger waves-effect huydon" data-dh="{{$value->id}}" >
                                            <i data-brackets-id="14157" class="material-icons">sync_disabled</i>
                                            <span>HUỶ ĐƠN HÀNG</span>
                                        </button>
                                    @elseif($value->bsid == 2)
                                        <button type="button" class="btn bg-blue waves-effect guihang" data-dh="{{$value->id}}" data-confirm="gui">
                                            <i data-brackets-id="14157" class="material-icons">send</i>
                                            <span>ĐÃ GỬI HÀNG</span>
                                        </button>
                                        <button type="button" class="btn btn-danger waves-effect huydon" data-dh="{{$value->id}}">
                                            <i data-brackets-id="14157" class="material-icons">sync_disabled</i>
                                            <span>HUỶ ĐƠN HÀNG</span>
                                        </button>
                                    @elseif($value->bsid == 6)
                                        <button type="button" class="btn bg-blue waves-effect guihang" data-dh="{{$value->id}}" data-confirm="gui">
                                            <i data-brackets-id="14157" class="material-icons">send</i>
                                            <span>ĐÃ GỬI HÀNG</span>
                                        </button>
                                        <button type="button" class="btn btn-danger waves-effect huydon" data-dh="{{$value->id}}">
                                            <i data-brackets-id="14157" class="material-icons">sync_disabled</i>
                                            <span>HUỶ ĐƠN HÀNG</span>
                                        </button>
                                    @elseif($value->bsid == 3)
                                        <button type="button" class="btn bg-green waves-effect guihang" data-dh="{{$value->id}}" data-confirm="ht">
                                            <i data-brackets-id="14157" class="material-icons">check</i>
                                            <span>HOÀN TẤT</span>
                                        </button>
                                        <button type="button" class="btn btn-danger waves-effect huydon" data-dh="{{$value->id}}" >
                                            <i data-brackets-id="14157" class="material-icons">sync_disabled</i>
                                            <span>HUỶ ĐƠN HÀNG</span>
                                        </button>
                                    @endif
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
        // Load khách hàng theo đơn hàng
        $('.xemdh').on('click',function () {
            var id = $(this).attr("data-dh");
            var tbl = $('#xem_dh_'+id+' .tbl-xem');

            $.ajax({
                url: 'admin/loadkh',
                dataType: 'json',
                type: 'GET',
                data: {id: id},
                success: function (data) {
                    console.log(data);
                    tbl.empty();
                    for ($i = 0; $i < data.length; $i++) {
                        tbl.append('<tr>\n' +
                            '                                                    <th>Họ tên</th>\n' +
                            '                                                    <td>'+ data[$i]["c_name"] +'</td>\n' +
                            '                                                </tr>\n' +
                            '                                                <tr>\n' +
                            '                                                    <th>SĐT</th>\n' +
                            '                                                    <td>'+ data[$i]["phone"] +'</td>\n' +
                            '                                                </tr>\n' +
                            '                                                <tr>\n' +
                            '                                                    <th>Email</th>\n' +
                            '                                                    <td>'+ data[$i]["email"] +'</td>\n' +
                            '                                                </tr>\n' +
                            '                                                <tr>\n' +
                            '                                                    <th>Địa chỉ nhà</th>\n' +
                            '                                                    <td>'+ data[$i]["address"] +'</td>\n' +
                            '                                                </tr>\n' +
                            '                                                <tr>\n' +
                            '                                                    <th>Địa chỉ giao hàng</th>\n' +
                            '                                                    <td class="col-pink">'+ data[$i]["shipping_address"] +'</td>\n' +
                            '                                                </tr>');
                    }
                }
            });
        });

        // Đã gửi hàng + Hoàn tất đơn hàng
        $('.guihang').on('click',function () {
            var id = $(this).data('dh');
            var confirm = $(this).data('confirm');
            var text ='';
            if(confirm == 'gui'){text = "ĐÃ GỬI"}
            if(confirm == 'ht'){text = "HOÀN TẤT"}

            showAjaxLoaderMessage(id, confirm,text);
        });

        function showAjaxLoaderMessage(id, confirm, text) {
            swal({
                title: "Xác nhận",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                confirmButtonText: text,
                cancelButtonText: "ĐÓNG",
                showLoaderOnConfirm: true,
            }, function () {
                setTimeout(function () {
                    $.ajax({
                        url: 'admin/checkbill',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id, confirm: confirm},
                        success: function (data) {
                            console.log(data);
                            setTimeout(function () {
                                // location.reload();
                            }, 1000);
                        }
                    });
                    swal("Thành công!", "Xác nhận thành công!", "success");
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                }, 5000);

            });
        }

        //Huỷ đơn hàng
        $('.huydon').on('click',function () {
            var id = $(this).data('dh');
            showHuyMessage(id);
        });

        function showHuyMessage(id) {
            swal({
                title: "Huỷ đơn hàng?",
                type: "input",
                showCancelButton: true,
                closeOnConfirm: false,
                animation: "slide-from-top",
                confirmButtonText: "HUỶ ĐƠN HÀNG",
                cancelButtonText: "ĐÓNG",
                inputPlaceholder: "Nhập lý do huỷ đơn hàng"
            }, function (inputValue) {
                setTimeout(function () {
                    if (inputValue === false) return false;
                    swal("Đã huỷ!", "Lý do: " + inputValue, "success");

                    $.ajax({
                        url: 'admin/huydon',
                        dataType: 'json',
                        type: 'GET',
                        data: {id: id, lydo: inputValue},
                        success: function (data) {
                            console.log(data);
                            setTimeout(function () {
                                // location.reload();
                            }, 1000);
                        }
                    });

                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                }, 1000);
            });
        }

    </script>
@endsection
</body>
@endsection
