@extends('admin.master')
@section('head')
    <title>Thống kê - Admin | i Tâm Loan</title>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DOANH THU</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">monetization_on</i>
                    </div>
                    <div class="content">
                        <div class="number">{{\App\Http\Controllers\AdminController::convertMoney($dt_hn)}}</div>
                        <div class="text">HÔM NAY</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">monetization_on</i>
                    </div>
                    <div class="content">
                        <div class="number">{{\App\Http\Controllers\AdminController::convertMoney($dt_t)}}</div>
                        <div class="text">THÁNG {{$thang}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-teal hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">monetization_on</i>
                    </div>
                    <div class="content">
                        <div class="number">{{\App\Http\Controllers\AdminController::convertMoney($dt_n)}}</div>
                        <div class="text">NĂM {{$nam}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue-grey hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">monetization_on</i>
                    </div>
                    <div class="content">
                        <div class="number">{{\App\Http\Controllers\AdminController::convertMoney($t_dt)}}</div>
                        <div class="text">TỔNG</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-blue hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">shopping_cart</i>
                    </div>
                    <div class="content">
                        <div class="number count-to" data-from="0" data-to="{{$dh}}" data-speed="1000" data-fresh-interval="20"></div>
                        <div class="text">ĐƠN HÀNG</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">shop</i>
                    </div>
                    <div class="content">
                        <div class="number count-to" data-from="0" data-to="{{$sp}}" data-speed="1000" data-fresh-interval="20"></div>
                        <div class="text">SẢN PHẨM</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-indigo hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="content">
                        <div class="number count-to" data-from="0" data-to="{{$kh}}" data-speed="1000" data-fresh-interval="20"></div>
                        <div class="text">KHÁCH HÀNG</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-deep-purple hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="number count-to" data-from="0" data-to="{{$dg}}" data-speed="1000" data-fresh-interval="20"></div>
                        <div class="text">ĐÁNH GIÁ</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->

        <div class="row clearfix">

            <!-- Thống kê doanh thu -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="bill.html">
                            <h2>DOANH THU</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="revenue_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("revenue_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                        datasets: [{
                            label: "iPhone",
                            data: [65, 59, 80, 81, 56, 55, 40],
                            backgroundColor: "#EF5350"
                        }, {
                            label: "iPad",
                            data: [28, 48, 40, 19, 86, 27, 90],
                            backgroundColor: "#5C6BC0"
                        },
                            {
                                label: "Mac",
                                data: [8, 26, 70, 19, 66, 87, 40],
                                backgroundColor: "#26A69A"
                            },
                            {
                                label: "Apple Watch",
                                data: [25, 40, 6, 9, 50, 47, 30],
                                backgroundColor: "#FFEE58"
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'top'
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });
            </script>
            <!-- #END# Thống kê doanh thu -->
            <!-- Khách hàng -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>THÀNH VIÊN</h2>
                    </div>
                    <div class="body">
                        <canvas id="customer_chart" height="330"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("customer_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                        datasets: [{
                            label: "Chưa mua hàng",
                            data: [65, 59, 80, 81, 56, 55, 40, 59, 80, 81, 56, 55],
                            borderColor: 'rgba(0, 188, 212, 0.75)',
                            backgroundColor: 'rgba(0, 188, 212, 0.3)',
                            pointBorderColor: 'rgba(0, 188, 212, 0)',
                            pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                            pointBorderWidth: 1
                        }, {
                            label: "Đã mua hàng",
                            data: [28, 48, 40, 19, 86, 27, 90, 40, 19, 86, 27, 90],
                            borderColor: 'rgba(233, 30, 99, 0.75)',
                            backgroundColor: 'rgba(233, 30, 99, 0.3)',
                            pointBorderColor: 'rgba(233, 30, 99, 0)',
                            pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                            pointBorderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'top'
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });
            </script>
            <!-- #END# Khách hàng -->
            <!-- Thống kê đơn hàng -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="bill.html">
                            <h2>ĐƠN HÀNG</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="order_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("order_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                        datasets: [{
                            label: "Thành công",
                            data: [65, 59, 80, 81, 56, 55, 40],
                            backgroundColor: "#F06292"
                        }, {
                            label: "Thất bại",
                            data: [28, 48, 40, 19, 86, 27, 90],
                            backgroundColor: "#BDBDBD"
                        }]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'top'
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });
            </script>
            <!-- #END# Thống kê đơn hàng -->
            <!-- Thống kê trạng thái đơn hàng -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('admindonhang')}}">
                            <h2>TRẠNG THÁI ĐƠN HÀNG</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="billstatus_chart" height="330"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("billstatus_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [
                                @foreach($status as $i => $value)
                                    {{$value['sl']}},
                                @endforeach
                            ],
                            backgroundColor: [
                                @foreach($status as $i => $value)
                                    "{{$value['color']}}",
                                @endforeach
                            ],
                        }],
                        labels: [
                            @foreach($status as $i => $value)
                                "{{$value['status']}}",
                            @endforeach
                        ]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'top'
                        },
                    }
                });
            </script>
            <!-- #END# Thống kê trạng thái đơn hàng -->
            <!-- Thống kê loại Sản phẩm -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('adminlsp')}}">
                            <h2>LOẠI SẢN PHẨM</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="product_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("product_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [
                            @foreach($pt as $i => $value)
                                "{{$value['type']}}",
                            @endforeach
                            ]
                        ,
                        datasets: [{
                            label: "Đã bán",
                            data: [
                                @foreach($pt as $i => $value)
                                    {{$value['daban']}},
                                @endforeach
                            ],
                            backgroundColor: "#EF5350"
                        }, {
                            label: "Tồn kho",
                            data: [
                                @foreach($pt as $i => $value)
                                {{$value['tonkho']}},
                                @endforeach
                            ],
                            backgroundColor: "#90A4AE"
                        }]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'top'
                        },
                    }
                });
            </script>
            <!-- #END# Thống loại kê Sản phẩm-->
            <!-- Thống kê đánh giá -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('admindanhgia')}}">
                            <h2>ĐÁNH GIÁ</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="feedback_chart" height="330"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("feedback_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [
                                @foreach($fb as $i => $value)
                                    {{$value['sl']}},
                                @endforeach
                            ],
                            backgroundColor: [
                                @foreach($fb as $i => $value)
                                    "{{$value['color']}}",
                                @endforeach
                            ],
                        }],
                        labels: [
                            @foreach($fb as $i => $value)
                                "{{$value['stars']}}",
                            @endforeach
                        ]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'top'
                        },
                    }
                });
            </script>
            <!-- #END# Thống kê đánh giá-->

            <!-- Thống kê iPhone -->
            @foreach($type as $index => $value)
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('adminsp')}}">
                            <h2>{{$value['type']}}</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="{{$value['id']}}_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("{{$value['id']}}_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [
                            @foreach($value['data'] as $i => $v)
                            "{{$v['catalog']}}",
                            @endforeach
                        ],
                        datasets: [{
                            label: "Đã bán",
                            data: [
                                @foreach($value['data'] as $i => $v)
                                    {{$v['daban']}},
                                @endforeach
                            ],
                            backgroundColor: "#EF5350"
                        }, {
                            label: "Tồn kho",
                            data: [
                                @foreach($value['data'] as $i => $v)
                                {{$v['tonkho']}},
                                @endforeach
                            ],
                            backgroundColor: "#90A4AE"
                        }]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'top'
                        },
                    }
                });
            </script>
            @endforeach
            <!-- #END# Thống kê iphone-->

            {{----}}
            {{--<!-- Thống kê iPad -->--}}
            {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="header">--}}
                        {{--<a href="{{route('adminsp')}}">--}}
                            {{--<h2>iPad</h2>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="body">--}}
                        {{--<canvas id="ipad_chart" height="150"></canvas>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<script>--}}
                {{--var ctx = document.getElementById("ipad_chart");--}}
                {{--var OrderChart = new Chart(ctx, {--}}
                    {{--type: 'bar',--}}
                    {{--data: {--}}
                        {{--labels: ["5s", "6", "6plus", "7", "7plus", "8", "8plus", "X"],--}}
                        {{--datasets: [{--}}
                            {{--label: "Đã bán",--}}
                            {{--data: [65, 59, 80, 81, 65, 59, 80, 81],--}}
                            {{--backgroundColor: "#5C6BC0"--}}
                        {{--}, {--}}
                            {{--label: "Tồn kho",--}}
                            {{--data: [28, 48, 40, 19, 28, 48, 40, 19],--}}
                            {{--backgroundColor: "#90A4AE"--}}
                        {{--}]--}}
                    {{--},--}}
                    {{--options: {--}}
                        {{--responsive: true,--}}
                        {{--legend: {--}}
                            {{--display: true,--}}
                            {{--position: 'top'--}}
                        {{--},--}}
                    {{--}--}}
                {{--});--}}
            {{--</script>--}}
            {{--<!-- #END# Thống kê iPad-->--}}
            {{--<!-- Thống kê mac -->--}}
            {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="header">--}}
                        {{--<a href="product.html">--}}
                            {{--<h2>Mac</h2>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="body">--}}
                        {{--<canvas id="mac_chart" height="150"></canvas>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<script>--}}
                {{--var ctx = document.getElementById("mac_chart");--}}
                {{--var OrderChart = new Chart(ctx, {--}}
                    {{--type: 'bar',--}}
                    {{--data: {--}}
                        {{--labels: ["5s", "6", "6plus", "7", "7plus", "8", "8plus", "X"],--}}
                        {{--datasets: [{--}}
                            {{--label: "Đã bán",--}}
                            {{--data: [65, 59, 80, 81],--}}
                            {{--backgroundColor: "#26A69A"--}}
                        {{--}, {--}}
                            {{--label: "Tồn kho",--}}
                            {{--data: [28, 48, 40, 19],--}}
                            {{--backgroundColor: "#90A4AE"--}}
                        {{--}]--}}
                    {{--},--}}
                    {{--options: {--}}
                        {{--responsive: true,--}}
                        {{--legend: {--}}
                            {{--display: true,--}}
                            {{--position: 'top'--}}
                        {{--},--}}
                    {{--}--}}
                {{--});--}}
            {{--</script>--}}
            {{--<!-- #END# Thống kê mac-->--}}
            {{--<!-- Thống kê aw -->--}}
            {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="header">--}}
                        {{--<a href="product.html">--}}
                            {{--<h2>Apple Watch</h2>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="body">--}}
                        {{--<canvas id="watch_chart" height="150"></canvas>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<script>--}}
                {{--var ctx = document.getElementById("watch_chart");--}}
                {{--var OrderChart = new Chart(ctx, {--}}
                    {{--type: 'bar',--}}
                    {{--data: {--}}
                        {{--labels: ["5s", "6", "6plus", "7", "7plus", "8", "8plus", "X"],--}}
                        {{--datasets: [{--}}
                            {{--label: "Đã bán",--}}
                            {{--data: [65, 59, 80, 81],--}}
                            {{--backgroundColor: "#F06292"--}}
                        {{--}, {--}}
                            {{--label: "Tồn kho",--}}
                            {{--data: [28, 48, 40, 19],--}}
                            {{--backgroundColor: "#90A4AE"--}}
                        {{--}]--}}
                    {{--},--}}
                    {{--options: {--}}
                        {{--responsive: true,--}}
                        {{--legend: {--}}
                            {{--display: true,--}}
                            {{--position: 'top'--}}
                        {{--},--}}
                    {{--}--}}
                {{--});--}}
            {{--</script>--}}
            {{--<!-- #END# Thống kê aw-->--}}
        </div>
    </div>
</section>
@section('script')
@endsection
</body>
@endsection
