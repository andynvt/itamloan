@extends('customer.master')
@section('head')
    <title>Quảng cáo | i Tâm loan</title>
@endsection
@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                <div class="col-first">
                    <h2 class="text-white">CÁC CHƯƠNG TRÌNH KHUYẾN MÃI</h2>
                    <nav class="d-flex align-items-center justify-content-start">
                        <a href="{{route('index')}}">Trang chủ<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        <a href="{{route('ad')}}">Các chương trình khuyến mãi</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    @foreach($promo as $index => $value)
        <!-- Start Count Down Area -->
        <div class="countdown-area section-gap section-gap" style="padding: 40px 0; background: none; ">
            <div class="container">
                <div class="countdown-content">
                    <div class="title text-center">
                        <h2 class="mb-10">{{$value->promo_name}} - GIẢM {{$value->percent}}%</h2>
                        <h4 class="pb-2">Từ {{ date('H:i - d/m/Y', strtotime($value->start_date) )}} đến {{ date('H:i - d/m/Y', strtotime($value->end_date) )}}</h4>
                        <p class="pb-3">{{$value->promo_info}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"></div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="countdown d-flex justify-content-center justify-content-md-end" id="js-countdown-{{$value->id}}" style="background: #f9f9ff">
                            <div class="countdown-item">
                                <div class="countdown-timer js-countdown-days time" aria-labelledby="day-countdown">
                                </div>
                                <div class="countdown-label" id="day-countdown">Ngày</div>
                            </div>
                            <div class="countdown-item">
                                <div class="countdown-timer js-countdown-hours" aria-labelledby="hour-countdown">

                                </div>

                                <div class="countdown-label" id="hour-countdown">Giờ</div>
                            </div>
                            <div class="countdown-item">
                                <div class="countdown-timer js-countdown-minutes" aria-labelledby="minute-countdown">

                                </div>

                                <div class="countdown-label" id="minute-countdown">Phút</div>
                            </div>
                            <div class="countdown-item">
                                <div class="countdown-timer js-countdown-seconds" aria-labelledby="second-countdown">
                                </div>
                                <div class="countdown-label text" id="second-countdown">Giây</div>
                            </div>
                            <img src="storage/promo/{{$value->promo_image}}" class="img-fluid cd-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        {{--dem nguoc khuyen mai--}}
        <script>
            if (document.getElementById("js-countdown-{{$value->id}}")) {

                var countdown = new Date("{{$value->end_date}}");

                function getRemainingTime(endtime) {
                    var milliseconds = Date.parse(endtime) - Date.parse(new Date());
                    var seconds = Math.floor(milliseconds / 1000 % 60);
                    var minutes = Math.floor(milliseconds / 1000 / 60 % 60);
                    var hours = Math.floor(milliseconds / (1000 * 60 * 60) % 24);
                    var days = Math.floor(milliseconds / (1000 * 60 * 60 * 24));

                    return {
                        'total': milliseconds,
                        'seconds': seconds,
                        'minutes': minutes,
                        'hours': hours,
                        'days': days
                    };
                }

                function initClock(id, endtime) {
                    var counter = document.getElementById(id);
                    var daysItem = counter.querySelector('.js-countdown-days');
                    var hoursItem = counter.querySelector('.js-countdown-hours');
                    var minutesItem = counter.querySelector('.js-countdown-minutes');
                    var secondsItem = counter.querySelector('.js-countdown-seconds');

                    function updateClock() {
                        var time = getRemainingTime(endtime);

                        daysItem.innerHTML = time.days;
                        hoursItem.innerHTML = ('0' + time.hours).slice(-2);
                        minutesItem.innerHTML = ('0' + time.minutes).slice(-2);
                        secondsItem.innerHTML = ('0' + time.seconds).slice(-2);

                        if (time.total <= 0) {
                            clearInterval(timeinterval);
                        }
                    }

                    updateClock();
                    var timeinterval = setInterval(updateClock, 1000);
                }

                initClock('js-countdown-{{$value->id}}', countdown);
            }
            ;
        </script>
        <!-- End Count Down Area -->
    @endforeach
    <div class="p-3"></div>
@endsection