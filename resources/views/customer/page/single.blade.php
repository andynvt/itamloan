@extends('customer.master')
@section('head')
    <title>{{$pd[0]->name}} | i Tâm Loan</title>
@endsection
@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>{{$pd[0]->name}}</h1>
                <nav class="d-flex align-items-center justify-content-start">
                    <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="{{route('loai',$pd[0]->ptid)}}">{{$pd[0]->type}}<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="{{route('single',$pd[0]->id)}}">{{$pd[0]->name}}</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Product Details -->
<div class="container">

    <div class="product-quick-view">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-12 pr-0">
                <div class="container-img">
                    @foreach($img as $i)
                    <a class="gallery" href="storage/product/{{$i->image}}"><img src="storage/product/{{$i->image}}"></a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12">
                <div class="quick-view-content">
                    <div class="top">
                        <h3 class="head">{{$pd[0]->name}}</h3>
                        <div class="price d-flex align-items-center">
                            <span class="lnr lnr-tag"></span>
                            <span class="ml-7 p1-gradient-color">{{number_format( $pd[0]->price - $pd[0]->price * $pd[0]->percent / 100 )}}
                                ₫</span>&nbsp;&nbsp;
                            @if($pd[0]->percent != null)
                            <h5 class="de-text">{{number_format($pd[0]->price)}} ₫</h5>
                            @endif
                        </div>
                    </div>

                    @if($pd[0]->percent != null)
                    <div class="middle">
                        <div class="p-1"></div>
                        <h4>Khuyến mãi:</h4>
                        <a href="#khuyenmai">
                            <h5 class="pt-3">{{$pd[0]->promo_name}}</h5>
                        </a>
                        <p class="content">{{$pd[0]->promo_info}}</p>
                    </div>
                    @endif
                    <div>
                        <form action="#">
                            <div class=" d-flex align-items-center mt-15">
                                Chọn màu: &nbsp;&nbsp;
                                <div class="default-select" id="default-select">
                                    <select style="display: none;">
                                        @foreach($arr_color as $c)
                                        <option value="{{$c->color}}">{{$c->color}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="quantity-container d-flex align-items-center mt-15">
                                Số lượng:
                                <input type="text" class="quantity-amount ml-15" value="1" />
                                <div class="arrow-btn d-inline-flex flex-column">
                                    <button class="increase arrow" type="button" title="Increase Quantity">
                                        <span class="lnr lnr-chevron-up"></span></button>
                                    <button class="decrease arrow" type="button" title="Decrease Quantity">
                                        <span class="lnr lnr-chevron-down"></span></button>
                                </div>

                            </div>
                            <div class="d-flex mt-20">
                                <a href="#" type="submit" class="view-btn color-2"><span>Thêm vào giỏ</span></a>
                                <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="details-tab-navigation d-flex justify-content-center mt-30">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li>
                <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-expanded="true">Thông tin</a>
            </li>
            <li>
                <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="description" aria-expanded="true">Video</a>
            </li>
            <li>
                <a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification" role="tab" aria-controls="specification">Cấu hình</a>
            </li>
            <li>
                <a class="nav-link active" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Đánh giá</a>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description">
            <div class="description">
                <p>
                    {!! $pd[0]->description !!}
                </p>
            </div>
        </div>
        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="description">
            <div class="description">
                @foreach($product_video as $pv)
                    <h3 class="text-center pb-3 pt-3">{{$pv->v_name}}</h3>
                    <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe width="560" height="349"
                                src="http://www.youtube.com/embed/{{$pv->v_link}}?rel=0&hd=1" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification">
            <div class="specification-table">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td colspan="2"><strong>{{$pd[0]->name}}</strong></td>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0; $i<count($spec); $i++)
                    <tr>
                        <td width="20%">{{$spec[$i]}}</td>
                        <td>{{$value[$i]}}</td>
                    </tr>
                    @endfor
                    </tbody>
                </table>

            </div>
        </div>

        <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews">
            <div class="review-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="review-stat d-flex align-items-center flex-wrap">
                            <div class="review-overall">
                                <h3>Trung bình</h3>
                                <div class="main-review">{{$avg_fb}}</div>
                                <span>( {{$no_of_fb}} Đánh giá )</span>
                            </div>
                            <div class="review-count">
                                <h4>Có {{$no_of_fb}} đánh giá</h4>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>5 Sao</span>
                                    <div class="total-star five-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>{{$fb_5}}</span>
                                </div>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>4 Sao</span>
                                    <div class="total-star four-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>{{$fb_4}}</span>
                                </div>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>3 Sao</span>
                                    <div class="total-star three-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>{{$fb_3}}</span>
                                </div>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>2 Sao</span>
                                    <div class="total-star two-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>{{$fb_2}}</span>
                                </div>
                                <div class="single-review-count d-flex align-items-center">
                                    <span>1 Sao&nbsp; </span>
                                    <div class="total-star one-star d-flex align-items-center">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <span>{{$fb_1}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="total-comment">
                            @foreach($feedback as $f)
                            <div class="single-comment">
                                <div class="user-details d-flex align-items-center">
                                    <img src="storage/user/{{$f->avatar}}" class="img-fluid" alt="">
                                    <div class="user-name" style="    padding-top: 15px;">
                                        <h5>{{$f->c_name}}</h5>
                                        <div class="total-star {{\App\Http\Controllers\CustomerController::noToText($f->stars)}}-star d-flex align-items-center">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p>{{ date('H:i - d/m/Y', strtotime($f->created_at) )}}</p>
                                    </div>
                                </div>
                                <p class="user-comment">
                                    {{$f->review}}
                                </p>
                                <hr>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="add-review">
                            <h3>Gửi đánh giá</h3>
                            <div class="single-review-count mb-15 d-flex align-items-center">
                                <div class="star-place">
                                    <fieldset class="rating ">
                                        <input type="radio" id="star5" name="rating" value="5" />
                                        <label class="full" for="star5" title="Tuyệt vời - 5 sao"></label>
                                        <input type="radio" id="star4" name="rating" value="4" />
                                        <label class="full" for="star4" title="Tốt - 4 sao"></label>
                                        <input type="radio" id="star3" name="rating" value="3" />
                                        <label class="full" for="star3" title="Ổn - 3 sao"></label>
                                        <input type="radio" id="star2" name="rating" value="2" />
                                        <label class="full" for="star2" title="Hơi tệ - 2 sao"></label>
                                        <input type="radio" id="star1" name="rating" value="1" />
                                        <label class="full" for="star1" title="Quá tệ - 1 sao"></label>
                                    </fieldset>
                                </div>
                                <script>
                                    // $('.rating').on('change', function () {
                                    //     var star = $('.rating input:checked').val();
                                    //     $('.rating input').attr('disabled', 'disabled');
                                    // });
                                </script>
                            </div>
                            <form action="#" class="main-form">
                                <input type="text" placeholder="Tên" onfocus="this.placeholder=''" onblur="this.placeholder = 'Tên'" required class="common-input">
                                <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email'" class="common-input">
                                <input type="text" placeholder="Số điện thoại" onfocus="this.placeholder=''" onblur="this.placeholder = 'Số điện thoại'" required class="common-input">
                                <textarea placeholder="Nội dung đánh giá" onfocus="this.placeholder=''" onblur="this.placeholder = 'Nội dung đánh giá'" required class="common-textarea"></textarea>
                                <button class="view-btn color-2"><span>Gửi</span></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Details -->

<!-- Start Most Search Product Area -->
<section class="section-half">
    <div class="container">
        <div class="organic-section-title text-center">
            <h3>SẢN PHẨM CÙNG LOẠI</h3>
        </div>
        <div class="row mt-30">
            @foreach($same_product as $p)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-search-product d-flex">
                        <a href="{{route('single',$p->id)}}"><img src="storage/product/{{$p->image}}" alt="{{$p->name}}"></a>
                        <div class="desc">
                            <a href="{{route('single',$p->id)}}" class="text-km">{{$p->name}}</a>
                            <div class="price gia-ban" style="font-size: 15px;"><span class="lnr lnr-tag"></span>{{ number_format( $p->price - $p->price * $p->percent / 100 )  }} ₫</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
<!-- End Most Search Product Area -->


<!-- Start Most Search Product Area -->
<section class="section-half">
    <div class="container">
        <div class="organic-section-title text-center">
            <h3>ĐANG KHUYẾN MÃI</h3>
        </div>
        <div class="row mt-30">
            @foreach($promo_product as $p)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="{{route('single',$p->id)}}"><img src="storage/product/{{$p->image}}"
                                                                          alt="{{$p->name}}"></a>
                                <div class="desc">
                                    <a href="{{route('single',$p->id)}}" class="text-km">{{$p->name}}</a>
                                    <div class="price gia-ban" style="font-size: 15px;"><span
                                                class="lnr lnr-tag"></span>{{ number_format( $p->price - $p->price * $p->percent / 100 )  }}
                                        ₫
                                    </div>
                                </div>
                            </div>
                        </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Most Search Product Area -->

@endsection
