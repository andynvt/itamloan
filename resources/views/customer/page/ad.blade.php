@extends('customer.master')
@section('head')
    <title>Quảng cáo | i Tâm loan</title>
@endsection
@section('content')
<div class="pt-50"></div>
    <div class="section-top-border">
        <div class="container">
            <div class="row">
                @foreach($promo as $index => $value)
                <div class="col-lg-6 single-km mb-3">
                    <a href="#" target="_blank">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="storage/promo/{{$value->promo_image}}">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title text-white">Xem ngay</h3>
                            </div>
                        </div>
                    </a>
                    <h3 class="text-center">Xem ngay</h3>

                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="p-3"></div>

@endsection