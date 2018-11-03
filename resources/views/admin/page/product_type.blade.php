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
                                        <th class="align-center">THUỘC TÍNH</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ID</th>
                                        <th class="align-center">TÊN LOẠI</th>
                                        <th class="align-center">THUỘC TÍNH</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($lsp as $index => $value)
                                    <tr>
                                        <th scope="row">{{$index+1}}</th>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->type}}</td>
                                        <td>{{$value->type_detail}}</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_lsp_{{$value->id}}">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float"
                                                       data-toggle="tooltip" data-placement="top"
                                                       data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                            <span data-toggle="modal" data-target="#sua_lsp_{{$value->id}}">
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
                                                <form action="{{route('xoaloai')}}" method="get" class="delform">
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
            <div class="modal fade in" id="them_lsp" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">THÊM LOẠI SẢN PHẨM</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{route('themloai')}}" method="post">
                                {{ csrf_field() }}
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Tên loại </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="type" class="form-control " placeholder="Tên loại sản phẩm" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="herre">
                                            <b>Thuộc tính</b>
                                            <span class="m-l-20">(VD: Màn hình, CPU,...)</span>
                                            <div class="m-t-0">
                                                <button type="button" onclick="clickMore();" class="btn bg-blue-grey btn-xs waves-effect m-t-20"><i class="material-icons">add</i> <span>THÊM THUỘC TÍNH</span></button>
                                            </div>

                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" required name="type_detail[]" class="form-control m-t-20" placeholder="Thuộc tính 1">
                                                </div>
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

        @foreach($lsp as $index => $value)
            <!-- Modal xem lsp -->
            <div class="modal fade in" id="xem_lsp_{{$value->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">THÔNG TIN: {{$value->type}}</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="body table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tr>
                                                <th>ID</th>
                                                <td>{{$value->id}}</td>
                                            </tr>
                                            <tr>
                                                <th>Tên loại</th>
                                                <td>{{$value->type}}</td>
                                            </tr>
                                            <tr>
                                                <th>Thuộc tính</th>
                                                <td>{{$value->type_detail}}</td>
                                            </tr>
                                        </table>
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
            <div class="modal fade in" id="sua_lsp_{{$value->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">SỬA LOẠI: {{$value->type}}</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="{{route('sualoai',$value->id)}}">
                                {{ csrf_field() }}
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
                                                    <input type="text" name="type" value="{{$value->type}}" class="form-control " placeholder="Tên loại sản phẩm" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="here">
                                            <b>Thuộc tính</b>
                                            <span class="m-l-20">(VD: Màn hình, CPU,...)</span>
                                            <div class="m-t-0">
                                                <button type="button" onclick="clickMoreEdit();" class="btn bg-blue-grey btn-xs waves-effect m-t-20"><i class="material-icons">add</i> <span>THÊM THUỘC TÍNH</span></button>
                                            </div>

                                            @foreach($td[$value->id] as $index => $t)
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" required name="type_detail[]" value="{{$t}}" class="form-control m-t-20" placeholder="Thuộc tính 1">
                                                </div>
                                            </div>
                                                @endforeach
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
        function clickMoreEdit() {
            value += 1;
            var html = '<div class="input-group"><div class="form-line"><input type="text" name="type_detail[]" class="form-control"></div></div>';
            $('#here').append(html);
        };
    </script>
    <script>
        $(function() {
            $("#lsp_table").on("click", ".delete-btn", function() {
                var type = $(this).data('type');
                var id = $(this).parent().find('input').val();
                var formnow = $(this).parent().find('.delform');
                var token = $(this).parent().find('input[name="_token"]').val();
                // alert(formnow);
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
                    //     $.ajax({
                    //         url: 'admin/xoaloai',
                    //         type: 'GET',
                    //         // dataType: "json",
                    //         data: { id: id, token: token},
                    //         success: function(data, id, token){
                    //             // formnow.submit();
                    //
                    //             // location.reload();
                    //             // console.log(data, id);
                    //             swal("Đã xoá!", "Loại sản phẩm đã được xoá", "success");
                    //         }
                    //     });

                } else {
                    swal("Đã huỷ", "Loại sản phẩm vẫn còn", "error");
                }
            });
        }
    </script>
@endsection
</body>
@endsection
