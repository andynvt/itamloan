<!DOCTYPE html>
<html>
<head>
    @include('admin.head')
    @yield('head')
</head>

<body class="theme-indigo">

@include('admin.header')
@yield('content')

<!-- start footer Area -->
@include('admin.footer')
<!-- End footer Area -->


@include('admin.script')
@yield('script')
</body>
</html>
