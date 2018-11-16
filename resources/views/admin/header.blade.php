
<body class="theme-indigo">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Vui lòng đợi...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="Nhập nội dung tìm kiếm...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{route('adminthongke')}}" target="_blank">ADMIN - ITAMLOAN</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <li><a href="{{route('index')}}"><i class="material-icons">home</i></a></li>
                <!-- #END# Call Search -->
                {{--<!-- Notifications -->--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">--}}
                        {{--<i class="material-icons">notifications</i>--}}
                        {{--<span class="label-count">7</span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li class="header">THÔNG BÁO</li>--}}
                        {{--<li class="body">--}}
                            {{--<ul class="menu">--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<div class="icon-circle bg-light-green">--}}
                                            {{--<i class="material-icons">person_add</i>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-info">--}}
                                            {{--<h4>12 new members joined</h4>--}}
                                            {{--<p>--}}
                                                {{--<i class="material-icons">access_time</i> 14 mins ago--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<div class="icon-circle bg-cyan">--}}
                                            {{--<i class="material-icons">add_shopping_cart</i>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-info">--}}
                                            {{--<h4>4 sales made</h4>--}}
                                            {{--<p>--}}
                                                {{--<i class="material-icons">access_time</i> 22 mins ago--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<div class="icon-circle bg-red">--}}
                                            {{--<i class="material-icons">delete_forever</i>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-info">--}}
                                            {{--<h4><b>Nancy Doe</b> deleted account</h4>--}}
                                            {{--<p>--}}
                                                {{--<i class="material-icons">access_time</i> 3 hours ago--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<div class="icon-circle bg-orange">--}}
                                            {{--<i class="material-icons">mode_edit</i>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-info">--}}
                                            {{--<h4><b>Nancy</b> changed name</h4>--}}
                                            {{--<p>--}}
                                                {{--<i class="material-icons">access_time</i> 2 hours ago--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<div class="icon-circle bg-blue-grey">--}}
                                            {{--<i class="material-icons">comment</i>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-info">--}}
                                            {{--<h4><b>John</b> commented your post</h4>--}}
                                            {{--<p>--}}
                                                {{--<i class="material-icons">access_time</i> 4 hours ago--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<div class="icon-circle bg-light-green">--}}
                                            {{--<i class="material-icons">cached</i>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-info">--}}
                                            {{--<h4><b>John</b> updated status</h4>--}}
                                            {{--<p>--}}
                                                {{--<i class="material-icons">access_time</i> 3 hours ago--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<div class="icon-circle bg-purple">--}}
                                            {{--<i class="material-icons">settings</i>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-info">--}}
                                            {{--<h4>Settings updated</h4>--}}
                                            {{--<p>--}}
                                                {{--<i class="material-icons">access_time</i> Yesterday--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="footer">--}}
                            {{--<a href="javascript:void(0);">View All Notifications</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <!-- #END# Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="{{route('admindoimk')}}"><i class="material-icons">vpn_key</i>Đổi mật khẩu</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('logout')}}" onclick="return confirm('Bạn có muốn đăng xuất?')"><i class="material-icons">input</i>Đăng xuất</a></li>
                        </li>
                    </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="admincp/images/admin.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
                <div class="email">admin@itamloan.vn</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="{{route('admindoimk')}}"><i class="material-icons">vpn_key</i>Đổi mật khẩu</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('logout')}}" onclick="return confirm('Bạn có muốn đăng xuất?')"><i class="material-icons">input</i>Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class=" {{Request::is('admin/thong-ke') ? 'active' : null}}">
                    <a href="{{route('adminthongke')}}">
                        <i class="material-icons">pie_chart</i>
                        <span>THỐNG KÊ</span>
                    </a>
                </li>
                <li class=" {{Request::is('admin/khuyen-mai') ? 'active' : null}}">
                    <a href="{{route('adminkhuyenmai')}}">
                        <i class="material-icons">monetization_on</i>
                        <span>KHUYẾN MÃI</span>
                    </a>
                </li>
                <li class=" {{Request::is('admin/loai-san-pham') ? 'active' : null}}">
                    <a href="{{route('adminlsp')}}">
                        <i class="material-icons">dashboard</i>
                        <span>LOẠI SẢN PHẨM</span>
                    </a>
                </li>
                <li class=" {{Request::is('admin/dong-san-pham') ? 'active' : null}}">
                    <a href="{{route('admindsp')}}">
                        <i class="material-icons">layers</i>
                        <span>DÒNG SẢN PHẨM</span>
                    </a>
                </li>
                <li class=" {{Request::is('admin/san-pham') ? 'active' : null}}">
                    <a href="{{route('adminsp')}}">
                        <i class="material-icons">shop</i>
                        <span>SẢN PHẨM</span>
                    </a>
                </li>
                <li class=" {{Request::is('admin/don-hang') ? 'active' : null}}">
                    <a href="{{route('admindonhang')}}">
                        <i class="material-icons">view_list</i>
                        <span>ĐƠN HÀNG</span>
                    </a>
                </li>
                <li class=" {{Request::is('admin/khach-hang') ? 'active' : null}}">
                    <a href="{{route('adminkhachhang')}}">
                        <i class="material-icons">people</i>
                        <span>KHÁCH HÀNG</span>
                    </a>
                </li>
                <li class=" {{Request::is('admin/danh-gia') ? 'active' : null}}">
                    <a href="{{route('admindanhgia')}}">
                        <i class="material-icons">feedback</i>
                        <span>ĐÁNH GIÁ</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->

    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
        <ul class="dropdown-menu pull-right">
            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Cá nhân</a></li>
            <li><a href="javascript:void(0);"><i class="material-icons">vpn_key</i>Đổi mật khẩu</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Đăng xuất</a></li>
        </ul>
    </aside>
    <!-- #END# Right Sidebar -->
</section>
