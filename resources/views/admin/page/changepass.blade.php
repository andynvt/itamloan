@extends('admin.master')
@section('head')
    <title>Đổi mật khẩu - Admin | i Tâm Loan</title>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Basic Example -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ĐỔI MẬT KHẨU
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action="{{route('postadmindoimk')}}" method="post">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email Admin</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" readonly id="email_address" class="form-control" value="{{$email}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Mật khẩu cũ</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="oldpass" id="oldpass" class="form-control" placeholder="Nhập mật khẩu cũ" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Mật khẩu mới</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu mới" required minlength="6" maxlength="20">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Xác minh mật khẩu mới</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="re-password" id="re-password" class="form-control" placeholder="Nhập lại mật khẩu mới" required minlength="6" maxlength="20">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-3 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" onclick="validatePassword()" class="btn btn-primary m-t-15 waves-effect">ĐỔI MẬT KHẨU</button>
                                    </div>
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
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("re-password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Nhập lại mật khẩu không đúng");
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
@endsection
    </body>
@endsection