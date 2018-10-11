<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>


    <base href="{{asset('')}}">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="source/img/element/favicon.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Shop</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="source/css/linearicons.css">
    <link rel="stylesheet" href="source/css/owl.carousel.css">
    <link rel="stylesheet" href="source/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/css/nice-select.css">
    <link rel="stylesheet" href="source/css/nouislider.min.css">
    <link rel="stylesheet" href="source/css/bootstrap.css">
    <link rel="stylesheet" href="source/css/main.css">
    <link rel="stylesheet" href="source/css/custom/style.css">
    <link rel="stylesheet" href="source/css/custom/flashy.min.css">
    <link rel="stylesheet" href="source/css/custom/iziToast.min.css">

    {{--<script src="source/js/vendor/jquery-2.2.4.min.js"></script>--}}

    <script src="source/js/jquery.flashy.min.js"></script>

</head>

<body>
@include('customer.header')

@yield('content')

<!-- start footer Area -->
@include('customer.footer')

<!-- End footer Area -->





<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="source/js/vendor/bootstrap.min.js"></script>
<script src="source/js/jquery.ajaxchimp.min.js"></script>
<script src="source/js/jquery.nice-select.min.js"></script>
<script src="source/js/jquery.sticky.js"></script>
<script src="source/js/nouislider.min.js"></script>
<script src="source/js/jquery.magnific-popup.min.js"></script>
<script src="source/js/owl.carousel.min.js"></script>
<script src="source/js/main.js"></script>
<script src="source/js/wNumb.js"></script>
<script src="source/js/datacontry.js"></script>
<script src="source/js/iziToast.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<script>
    // search form
    $(function() {
        $('a[href="#home-search-form"]').on('click', function(event) {
            event.preventDefault();
            $('#home-search-form').addClass('open');
            $('#home-search-form > form > input[type="search"]').focus();
        });

        $('#home-search-form, #home-search-form button.close').on('click keyup', function(event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });
    });
    // end search form
</script>
<script>

    $('.gallery ').flashy({

        // Applied when a new item is shown
        showClass: 'fx-fadeIn',

        // Applied when a new item is hidden
        hideClass: 'fx-fadeOut',

        // Applied when a new item is shown on prev event
        prevShowClass: 'fx-bounceInLeft',

        // Applied when a new item is shown on next event
        nextShowClass: 'fx-bounceInRight',

        // Applied when the current item is hidden on prev event
        prevHideClass: 'fx-bounceOutRight',

        // Applied when the current item is hidden on next event
        nextHideClass: 'fx-bounceOutLeft',
    });
</script>
@if(Session::has('flag'))
    <button class="form-control"  id="test" onclick="myAlertTop_warning()" style="display: none;">{{Session::get('message')}}</button>

    <script>
        var test1 = '{{Session::get('message')}}';
        if (test1 != '') {
            setTimeout(function() {
                document.getElementById('test').click();
            }, 100);
        }
    </script>
    <script>
        iziToast.settings({
            timeout: 3000,
            resetOnHover: true,
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            position: 'topRight',
            theme: 'light',
        });
    </script>
    <script>
        function myAlertTop_warning() {
            iziToast.{{Session::get('flag')}} ({
                title: '{{Session::get('title')}}',
                message: '{{Session::get('message')}}',
            });
        }
    </script>
@endif  
</body>
</html>
