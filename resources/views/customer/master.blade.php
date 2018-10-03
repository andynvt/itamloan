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
    <script src="source/js/vendor/jquery-2.2.4.min.js"></script>

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
</body>
</html>
