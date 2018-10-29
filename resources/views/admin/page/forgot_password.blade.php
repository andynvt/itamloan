<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Quên mật khẩu | itamloan</title>
    <!-- Favicon-->
    <link rel="icon" href="../admincp/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../admin/css/style.css" rel="stylesheet">
</head>

<body class="fp-page">
<div class="fp-box">
    <div class="logo">
        <a href="javascript:void(0);">Admin<b> itamloan</b></a>
    </div>
    <div class="card">
        <div class="body">
            <form id="forgot_password" method="POST">
                <div class="msg">
                    Nhập địa chỉ email của admin. <br>Chúng tôi sẽ gửi mật khẩu mới vào email cho bạn.
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                </div>

                <button class="btn btn-block btn-lg bg-indigo waves-effect" type="submit">ĐẶT LẠI MẬT KHẨU</button>

                <div class="row m-t-20 m-b--5 align-center">
                    <a href="sign-in.html">Đăng Nhập!</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../admin/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../admin/plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="../admin/plugins/jquery-validation/jquery.validate.js"></script>

<!-- Custom Js -->
<script src="../admin/js/admin.js"></script>
<script src="../admin/js/pages/examples/forgot-password.js"></script>
</body>

</html>