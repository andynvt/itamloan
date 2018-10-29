@extends('admin.master')
@section('head')
    <title>Sản phẩm - Admin | i Tâm Loan</title>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SẢN PHẨM</h2>
                <div class="m-t-10"></div>
                <button type="button" class="btn bg-deep-purple waves-effect" data-toggle="modal" data-target="#them_sp">
                    <i class="material-icons">add</i>
                    <span>THÊM MỚI</span>
                </button>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DANH SÁCH SẢN PHẨM</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="sp_table">
                                    <thead class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ẢNH</th>
                                        <th class="align-center">TÊN SẢN PHẨM</th>
                                        <th class="align-center">LOẠI</th>
                                        <th class="align-center">DÒNG</th>
                                        <th class="align-center">GIÁ</th>
                                        <th class="align-center">KHO</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="bg-blue-grey">
                                    <tr>
                                        <th class="align-center">#</th>
                                        <th class="align-center">ẢNH</th>
                                        <th class="align-center">TÊN SẢN PHẨM</th>
                                        <th class="align-center">LOẠI</th>
                                        <th class="align-center">DÒNG</th>
                                        <th class="align-center">GIÁ</th>
                                        <th class="align-center">KHO</th>
                                        <th class="align-center">THAO TÁC</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>

                                        <th scope="row">1</th>

                                        <td class="align-center img-inside">
                                            <img src="images/iphonex.png" alt="" id="imageid">
                                        </td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>Airi Satou</td>
                                        <td>33</td>
                                        <td>33</td>
                                        <td class="align-center pd-5">
                                                <span data-toggle="modal" data-target="#xem_sp">
                                                    <a class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                </span>
                                            <span data-toggle="modal" data-target="#sua_sp">
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
                                        <th scope="row">1</th>
                                        <td class="align-center img-inside">
                                            <img src="images/iphonex.png" alt="">
                                        </td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>Tiger Nixon</td>
                                        <td>61</td>
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
                                        <th scope="row">1</th>
                                        <td class="align-center img-inside">
                                            <img src="images/iphonex.png" alt="">
                                        </td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>Garrett Winters</td>
                                        <td>63</td>
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
                                        <th scope="row">1</th>
                                        <td class="align-center img-inside">
                                            <img src="images/iphonex.png" alt="">
                                        </td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>Garrett Winters</td>
                                        <td>63</td>
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
                                        <th scope="row">1</th>
                                        <td class="align-center img-inside">
                                            <img src="images/iphonex.png" alt="">
                                        </td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>Garrett Winters</td>
                                        <td>63</td>
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
                                        <td class="align-center">3</td>
                                        <td class="align-center img-inside">
                                            <img src="images/iphonex.png" alt="">
                                        </td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>Garrett Winters</td>
                                        <td>63</td>
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
                                        <td class="align-center">3</td>
                                        <td class="align-center img-inside">
                                            <img src="images/iphonex.png" alt="">
                                        </td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>Garrett Winters</td>
                                        <td>63</td>
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
                                        <td class="align-center">3</td>
                                        <td class="align-center img-inside">
                                            <img src="images/iphonex.png" alt="">
                                        </td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>Garrett Winters</td>
                                        <td>63</td>
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


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

            <!-- Modal thêm sp mới -->
            <div class="modal fade in" id="them_sp" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">THÊM SẢN PHẨM</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Tên sản phẩm </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control " placeholder="VD: iPhone XS MAX">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Dung lượng </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="storage" class="form-control " placeholder="VD: 512GB">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Màu </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control " placeholder="VD: Gold">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc loại </b>
                                            <select class="form-control show-tick" name="type">
                                                <option value="">-- Chọn loại --</option>
                                                <option value="10">iPhone</option>
                                                <option value="20">iPad</option>
                                                <option value="30">Mac</option>
                                                <option value="40">Apple Watch</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc dòng </b>
                                            <select class="form-control show-tick" name="catalog">
                                                <option value="">-- Chọn dòng --</option>
                                                <option value="10">iPhone X</option>
                                                <option value="20">iPad X</option>
                                                <option value="30">Mac</option>
                                                <option value="40">Apple Watch</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xs-12 m-b-20">
                                            <b>Khuyến mãi </b>
                                            <select class="form-control show-tick" name="promo">
                                                <option value="">-- Chọn khuyến mãi --</option>
                                                <option value="10">Chào mừng XSMAX - Giảm 5%</option>
                                                <option value="10">Chào mừng XSMAX - Giảm 5%</option>
                                                <option value="10">Chào mừng XSMAX - Giảm 5%</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Giá gốc (₫)</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="price" class="form-control vn-dong">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Số lượng </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="number" name="inventory" class="form-control " placeholder="Số lượng kho">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Bảo hành </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="warranty" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="m-t--5">Cấu hình</h4>
                                            <hr>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Thuộc tính 1 </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="specs[]" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Thuộc tính 1 </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="specs[]" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Thuộc tính 1 </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="specs[]" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Thuộc tính 1 </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="specs[]" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4>Mô tả </h4>
                                            <textarea id="tinymce"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t-20" id="herre">
                                            <h4>Video</h4>
                                            <span>(ID video: https://www.youtube.com/watch?v=<b class="font-bold col-pink">SYYNCvIyg60</b>)</span>
                                            <hr>
                                            <div class="m-t-0">
                                                <button type="button" onclick="clickMore();" class="btn bg-blue-grey btn-xs waves-effect m-b-20"><i class="material-icons">add</i> <span>THÊM VIDEO</span></button>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" name="v_name[]" class="form-control " placeholder="Tên video 1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" name="v_link[]" class="form-control " placeholder="ID 1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4>Hình ảnh</h4>
                                            <span>(PNG, JPG, JPEG - Tối đa 2MB - Chọn nhiều ảnh)</span>
                                            <button class="btn dehinh bg-blue-grey waves-effect m-t-10 m-b-10" style="cursor: pointer; width: 100%; height: 50px;">
                                                <i class="material-icons">touch_app</i>
                                                <input type="file" id="gallery-photo-add" name="images[]" accept="image/png, image/jpg, image/jpeg" multiple required>
                                            </button>
                                            <div class="gallery-multi"></div>
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

            <!-- Modal xem sp -->
            <div class="modal fade in" id="xem_sp" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">THÔNG TIN: iPhone X</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Tên sản phẩm </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" value="iPhone XS MAX 512GB Gold" class="form-control " readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc loại </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" value="iPhone" class="form-control " readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc dòng </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" value="iPhone XS MAX" class="form-control " readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xs-12 m-b-20">
                                            <b>Khuyến mãi </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" value="Chào mừng XSMAX" class="form-control " readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Giá gốc (₫)</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" value="30000000" class="form-control vn-dong" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Số lượng </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" value="300" class="form-control " readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Bảo hành </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" value="1 Năm" class="form-control " readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="m-t--5">Cấu hình</h4>
                                            <hr>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Màn hình </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" value="6.5'' Oled" class="form-control " readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Màn hình </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" value="6.5'' Oled" class="form-control " readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Màn hình </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" value="6.5'' Oled" class="form-control " readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Màn hình </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" value="6.5'' Oled" class="form-control " readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Mô tả </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <textarea rows="2" class="form-control no-resize" readonly>Nội dung</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <b>Video</b>
                                            <div class="m-t-10">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <b>Tên video 1</b>

                                                    <iframe width="400" height="230" src="https://www.youtube.com/embed/SYYNCvIyg60" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <b>Tên video 1</b>

                                                    <iframe width="400" height="230" src="https://www.youtube.com/embed/SYYNCvIyg60" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info-img align-left" id="herre">
                                            <div style="text-align: left" class="m-t-20 m-b-10"><b>Hình ảnh</b></div>
                                            <div>
                                                <img src="images/iphonex.png" alt="">
                                                <img src="images/iphonex.png" alt="">
                                                <img src="images/iphonex.png" alt="">
                                                <img src="images/iphonex.png" alt="">
                                                <img src="images/iphonex.png" alt="">
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

            <!-- Modal sửa sp -->
            <div class="modal fade in" id="sua_sp" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">SỬA SẢN PHẨM: iPhone XS MAX 256GB Gold</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <b>Tên sản phẩm </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" value="iPhone XS MAX 256GB Gold" class="form-control " placeholder="VD: iPhone XS MAX 256GB Gold">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <b>Màu </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" value="Gold" class="form-control " placeholder="VD: Gold">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc loại </b>
                                            <select class="form-control show-tick" name="type">
                                                <option value="">-- Chọn loại --</option>
                                                <option selected value="10">iPhone</option>
                                                <option value="20">iPad</option>
                                                <option value="30">Mac</option>
                                                <option value="40">Apple Watch</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b-20">
                                            <b>Thuộc dòng </b>
                                            <select class="form-control show-tick" name="catalog">
                                                <option value="">-- Chọn dòng --</option>
                                                <option selected value="10">iPhone X</option>
                                                <option value="20">iPad X</option>
                                                <option value="30">Mac</option>
                                                <option value="40">Apple Watch</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xs-12 m-b-20">
                                            <b>Khuyến mãi </b>
                                            <select class="form-control show-tick" name="promo">
                                                <option value="">-- Chọn khuyến mãi --</option>
                                                <option value="10">Chào mừng XSMAX - Giảm 5%</option>
                                                <option selected value="10">Chào mừng XSMAX - Giảm 5%</option>
                                                <option value="10">Chào mừng XSMAX - Giảm 5%</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Giá gốc (₫)</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="price" value="30000000" class="form-control vn-dong">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Số lượng </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="number" name="inventory" value="300" class="form-control " placeholder="Số lượng kho">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <b>Bảo hành </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="warranty" value="1 năm chính hãng Apple" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="m-t--5">Cấu hình</h4>
                                            <hr>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Màn hình </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="specs[]" value="6.5 Oled" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Màn hình </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="specs[]" value="6.5 Oled" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Màn hình </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="specs[]" value="6.5 Oled" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <b>Màn hình </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" name="specs[]" value="6.5 Oled" class="form-control " placeholder="VD: 1 năm chính hãng Apple">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4>Mô tả </h4>
                                            <textarea id="tinymce">Nội dung mô tả có sẵn</textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t-20" id="herre">
                                            <h4>Video</h4>
                                            <span>(ID video: https://www.youtube.com/watch?v=<b class="font-bold col-pink">SYYNCvIyg60</b>)</span>
                                            <hr>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" name="v_name[]" class="form-control " placeholder="Tên video 1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" name="v_link[]" class="form-control " placeholder="ID 1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" name="v_name[]" class="form-control " placeholder="Tên video 1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" name="v_link[]" class="form-control " placeholder="ID 1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info-img align-left" id="herre">
                                            <div style="text-align: left" class="m-t-20 m-b-10"><b>Ảnh hiện tại</b></div>
                                            <div>
                                                <img src="images/iphonex.png" alt="">
                                                <img src="images/iphonex.png" alt="">
                                                <img src="images/iphonex.png" alt="">
                                                <img src="images/iphonex.png" alt="">
                                                <img src="images/iphonex.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t-20">
                                            <b>Ảnh mới</b>
                                            <span class="m-l-10">(PNG, JPG, JPEG - Tối đa 2MB - Chọn nhiều ảnh)</span>
                                            <button class="btn dehinh bg-blue-grey waves-effect m-t-10 m-b-10" style="cursor: pointer; width: 100%; height: 50px;">
                                                <i class="material-icons">touch_app</i>
                                                <input type="file" id="gallery-photo-edit" name="images[]" accept="image/png, image/jpg, image/jpeg" multiple required>
                                            </button>
                                            <div class="gallery-multi-edit"></div>
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
            var html = '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="input-group"><div class="form-line"><input type="text" name="v_name[]" class="form-control " placeholder="Tên video ' + value + '"></div></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="input-group"><div class="form-line"><input type="text" name="v_link[]" class="form-control " placeholder="ID ' + value + '"></div></div></div></div>';
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
                text: "Bạn sẽ không thể khôi phục được sản phẩm này!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3F51B5",
                confirmButtonText: "XOÁ",
                cancelButtonText: "HUỶ",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    swal("Đã xoá!", "Sản phẩm đã được xoá", "success");
                } else {
                    swal("Đã huỷ", "Sản phẩm vẫn còn", "error");
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
                $('.gallery-multi').empty();
                imagesPreview(this, 'div.gallery-multi');
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
                $('.gallery-multi-edit').empty();
                imagesPreviewEdit(this, 'div.gallery-multi-edit');
            });
        });
    </script>
    <script>
        tinymce.init({
            selector: "textarea#tinymce",
            theme: "modern",
            height: 200,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'styleselect fontselect fontsizeselect | bold italic underline | forecolor backcolor',
            toolbar2: 'insertfile undo redo | bullist numlist outdent indent | alignleft aligncenter alignright alignjustify | link image media emoticons | print preview code',
            image_advtab: true
        });
        tinymce.suffix = ".min";
        tinyMCE.baseURL = '../../plugins/tinymce';
    </script>
@endsection
    </body>
@endsection

