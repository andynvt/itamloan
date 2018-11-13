<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Quên mật khẩu | i Tâm Loan</title>
    <!-- Favicon-->
    <link rel="icon" href="./admincp/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="./admincp/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="./admincp/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="./admincp/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="./admincp/css/style.css" rel="stylesheet">
</head>

<body class="fp-page">
<div class="fp-box">
    <div class="logo">
        <a href="javascript:void(0);">Đặt lại mật khẩu<b> itamloan</b></a>
    </div>
    <div class="card">
        <div class="body">
            <form id="forgot_password" action="{{route('postforgetpass')}}" method="POST">
                {{ csrf_field() }}
                <div class="msg">
                    Nhập địa chỉ email của bạn. <br>Mật khẩu mới sẽ được gửi vào email.
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
                    <a href="{{route('login')}}">Đăng Nhập!</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="./admincp/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="./admincp/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="./admincp/plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="./admincp/plugins/jquery-validation/jquery.validate.js"></script>
<!-- Bootstrap Notify Plugin Js -->
<script src="./admincp/plugins/bootstrap-notify/bootstrap-notify.js"></script>
<!-- Custom Js -->
<script src="./admincp/js/admin.js"></script>
<script src="./admincp/js/pages/examples/forgot-password.js"></script>
<script>
    function showNotification(colorName, text) {

        if (colorName === 'danger') {
            colorName = 'alert-danger';
        }else if(colorName === 'success'){
            colorName = 'alert-success';
        }else if(colorName === 'warning'){
            colorName = 'alert-warning';
        }else if(colorName === 'info'){
            colorName = 'alert-info';
        }

        if (text === null || text === '') {
            text = 'Thông báo mặc định';
        }

        var animateEnter = 'animated zoomInRight';
        var animateExit = 'animated zoomOutRight';
        var allowDismiss = true;

        $.notify({
                message: text
            },
            {
                type: colorName,
                allow_dismiss: allowDismiss,
                newest_on_top: true,
                timer: 1000,
                placement: {
                    from: 'top',
                    align: 'right'
                },
                animate: {
                    enter: animateEnter,
                    exit: animateExit
                },
                template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '</div>'
            });
    }
    @if(Session::has('flag'))
    $(document).ready(function() {
        showNotification( '{{Session::get('flag')}}' , '{{Session::get('message')}}' );
    });
    @endif
</script>
</body>

</html>