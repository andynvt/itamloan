<!-- form search -->
<div id="home-search-form" style="display: hide">
    <button type="button" class="close">×</button>
    <form action="{{route('search')}}" method="post">
        {{ csrf_field() }}
        <input type="search" name="key" placeholder="Nhập từ khoá..."/>
        <button type="submit" class="btn-sr view-btn color-2"><span>Tìm kiếm</span> <span
                    class="lnr lnr-arrow-right"></span></button>
    </form>
</div>
<a href="#" id="scroll" style="display: none;"><span></span></a>

<!-- Start Header Area -->
<header class="default-header">
    <div class="menutop-wrap">
        <div class="menu-top container">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="list ct-top">
                    <li><a href="tel:19006459">1900 6459 - 1000đ/phút</a></li>
                    <li><a href="mailto:vipcare@itamloan.vn">vipcare@itamloan.vn</a></li>
                </ul>
                <ul class="list li-icon">
                    <a href="#home-search-form">
                        <li class="nav-item" data-toggle="tooltip" title="Tìm kiếm">
                            <i class="lnr lnr-magnifier lnr-custom"></i>
                        </li>
                    </a>

                    <a href="{{route('wishlist')}}">
                        <li class="nav-item">
                            <span class="lnr lnr-heart lnr-custom"></span>
                            @if(Session::has('wl'))
                                <div class="num-cart">
                                    <span>{{Session('wl')->totalQty}}</span>
                                </div>
                            @endif
                        </li>
                    </a>
                    <a href="{{route('cart')}}">
                        <li>
                            <span class="lnr lnr-cart lnr-custom shopping-cart"></span>
                            @if(Session::has('cart'))
                            <div class="num-cart">
                                <span>{{Session('cart')->totalQty}}</span>
                            </div>
                            @endif
                        </li>
                    </a>
                    @if(Auth::check())
                        <a href="{{route('user')}}">
                            <li>
                                <span class="lnr lnr-user lnr-custom"></span>
                            </li>
                        </a>
                        <a href="{{route('logout')}}" onclick="return confirm('Bạn có muốn đăng xuất?')">
                            <li>
                                <span class="lnr lnr-exit lnr-custom"></span>
                            </li>
                        </a>
                    @else
                        <a href="{{route('login')}}">
                            <li>
                                <span class="lnr lnr-user lnr-custom"></span>
                            </li>
                        </a>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="source/img/element/logo.png" alt="">
            </a>
            <a href="#home-search-form">
                <div class="nav-item-ct" data-toggle="tooltip" title="Tìm kiếm">
                    <i class="lnr lnr-magnifier lnr-custom"></i>
                </div>
            </a>
            <a href="{{route('wishlist')}}">
                <div class="nav-item-ct">
                    <span class="lnr lnr-heart lnr-custom"></span>
                    <div class="num-cart-ct">
                        <span>9</span>
                    </div>
                </div>
            </a>
            <a href="{{route('cart')}}">
                <div class="nav-item-ct">
                    <span class="lnr lnr-cart lnr-custom"></span>
                        @if(Session::has('cart'))
                            <div class="num-cart-ct">
                                <span>{{Session('cart')->totalQty}}</span>
                            </div>
                        @endif
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav" style="position: relative">
                    <li><a href="{{route('index')}}">TRANG CHỦ</a></li>
                    <li><a href="{{route('ad')}}">KHUYẾN MÃI</a></li>

                    @foreach($full_type as $f => $value)
                        <li class="dropdown" style="position: unset">
                            <a class="dropdown-toggle" href="#" id="dr_iphone" data-toggle="dropdown">
                                {{$f}}
                            </a>
                            <div class="dropdown-menu" style="    padding: 20px;">
                                <div class="row">
                                    @foreach($value as $v)
                                        <div class="col-lg-3 col-md-3 col-6">
                                            <a class="dropdown-item text-center" href="{{route('catalog',$v->id)}}">
                                                <img src="storage/product/{{$v->catalog_image}}">
                                                <div class="p-1"></div>
                                                <h6 class="text-center">{{$v->catalog}}</h6>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    @endforeach
                    @if(Auth::check())
                        <li><a href="{{route('user')}}" id="dn-index">CÁ NHÂN</a></li>
                        <li><a href="{{route('logout')}}" onclick="return confirm('Bạn có muốn đăng xuất?')" id="dn-index">ĐĂNG XUẤT</a></li>
                    @else
                        <li><a href="{{route('login')}}" id="dn-index">ĐĂNG NHẬP</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Header Area -->
