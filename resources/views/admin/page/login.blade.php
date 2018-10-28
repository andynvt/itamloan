<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Đăng nhập Admin | itamloan</title>
    <!-- Favicon-->
    <link rel="icon" href="../admincp/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../admincp/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../admincp/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../admincp/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../admincp/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);"><img src="../admincp/images/logo.png" alt="logo"> <BR> <H3>ĐĂNG NHẬP</H3>  </a>
        <!--            <small>Admin BootStrap Based - Material Design</small>-->
    </div>
    <div class="card">
        <div class="body">
            <form action="{{route('postadminlogin')}}" method="POST">
                {{ csrf_field() }}
                <div class="msg">Đăng nhập để truy cập trang quản trị</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 p-t-5">
                        <a href="forgot-password.html">Quên mật khẩu?</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <button type="submit" class="btn bg-indigo waves-effect">
                            <span>ĐĂNG NHẬP</span>
                            <i class="material-icons">arrow_forward</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="../admincp/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../admincp/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../admincp/plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="../admincp/plugins/jquery-validation/jquery.validate.js"></script>

<!-- Custom Js -->
<script src="../admincp/js/admin.js"></script>
<script src="../admincp/js/pages/examples/sign-in.js"></script>
</body>

</html>