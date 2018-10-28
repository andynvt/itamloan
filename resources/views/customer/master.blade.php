<!DOCTYPE html>
<html lang="html" class="no-js">
<head>
    @include('customer.head')
    @yield('head')
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
{{--<script src="source/js/jquery.nice-select.min.js"></script>--}}
<script src="source/js/jquery.sticky.js"></script>
<script src="source/js/nouislider.min.js"></script>
<script src="source/js/jquery.magnific-popup.min.js"></script>
<script src="source/js/owl.carousel.min.js"></script>
<script src="source/js/wNumb.js"></script>
<script src="source/js/datacontry.js"></script>
<script src="source/js/iziToast.min.js"></script>
{{--<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>--}}
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script src="source/js/main.js"></script>

<script src="https://js.stripe.com/v3/"></script>



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
            position: 'bottomLeft',
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
