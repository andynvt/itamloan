@extends('admin.master')
@section('head')
    <title>Thống kê - Admin | i Tâm Loan</title>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>THỐNG KÊ</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">shopping_basket</i>
                    </div>
                    <div class="content">
                        <div class="number count-to" data-from="0" data-to="12225" data-speed="1000" data-fresh-interval="20"></div>
                        <div class="text">ĐƠN HÀNG</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-indigo hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">shop</i>
                    </div>
                    <div class="content">
                        <div class="number count-to" data-from="0" data-to="12225" data-speed="1000" data-fresh-interval="20"></div>
                        <div class="text">SẢN PHẨM</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-deep-purple hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="content">
                        <div class="number count-to" data-from="0" data-to="12225" data-speed="1000" data-fresh-interval="20"></div>
                        <div class="text">KHÁCH HÀNG</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-deep-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="number count-to" data-from="0" data-to="1025" data-speed="1000" data-fresh-interval="20"></div>
                        <div class="text">ĐÁNH GIÁ</div>
                    </div>
                </div>
            </div>

        </div>
        <!-- #END# Widgets -->

        <div class="row clearfix">
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
                        <a href="bill.html">
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
                            data: [225, 50, 100, 30, 10],
                            backgroundColor: [
                                "#EF5350",
                                "#5C6BC0",
                                "#26A69A",
                                "#FFEE58",
                                "#8D6E63",
                            ],
                        }],
                        labels: [
                            "Chờ xác nhận",
                            "Đã thanh toán online",
                            "Đang gửi",
                            "Hoàn tất",
                            "Thất bại",
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
            <!-- Thống kê Sản phẩm -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="product.html">
                            <h2>SẢN PHẨM</h2>
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
                        labels: ["iPhone", "iPad", "Mac", "Apple Watch"],
                        datasets: [{
                            label: "Đã bán",
                            data: [65, 59, 80, 81],
                            backgroundColor: "#8BC34A"
                        }, {
                            label: "Tồn kho",
                            data: [28, 48, 40, 19],
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
            <!-- #END# Thống kê Sản phẩm-->
            <!-- Thống kê đánh giá -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="feedback.html">
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
                            data: [225, 50, 100, 30, 10],
                            backgroundColor: [
                                "#EF5350",
                                "#5C6BC0",
                                "#26A69A",
                                "#FFEE58",
                                "#8D6E63",
                            ],
                        }],
                        labels: [
                            "5 Sao",
                            "4 Sao",
                            "3 Sao",
                            "2 Sao",
                            "1 Sao",
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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="product.html">
                            <h2>iPhone</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="iphone_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("iphone_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["5s", "6", "6plus", "7", "7plus", "8", "8plus", "X"],
                        datasets: [{
                            label: "Đã bán",
                            data: [65, 59, 80, 81],
                            backgroundColor: "#EF5350"
                        }, {
                            label: "Tồn kho",
                            data: [28, 48, 40, 19],
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
            <!-- #END# Thống kê iphone-->
            <!-- Thống kê iPad -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="product.html">
                            <h2>iPad</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="ipad_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("ipad_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["5s", "6", "6plus", "7", "7plus", "8", "8plus", "X"],
                        datasets: [{
                            label: "Đã bán",
                            data: [65, 59, 80, 81, 65, 59, 80, 81],
                            backgroundColor: "#5C6BC0"
                        }, {
                            label: "Tồn kho",
                            data: [28, 48, 40, 19, 28, 48, 40, 19],
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
            <!-- #END# Thống kê iPad-->
            <!-- Thống kê mac -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="product.html">
                            <h2>Mac</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="mac_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("mac_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["5s", "6", "6plus", "7", "7plus", "8", "8plus", "X"],
                        datasets: [{
                            label: "Đã bán",
                            data: [65, 59, 80, 81],
                            backgroundColor: "#26A69A"
                        }, {
                            label: "Tồn kho",
                            data: [28, 48, 40, 19],
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
            <!-- #END# Thống kê mac-->
            <!-- Thống kê aw -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="product.html">
                            <h2>Apple Watch</h2>
                        </a>
                    </div>
                    <div class="body">
                        <canvas id="watch_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById("watch_chart");
                var OrderChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["5s", "6", "6plus", "7", "7plus", "8", "8plus", "X"],
                        datasets: [{
                            label: "Đã bán",
                            data: [65, 59, 80, 81],
                            backgroundColor: "#F06292"
                        }, {
                            label: "Tồn kho",
                            data: [28, 48, 40, 19],
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
            <!-- #END# Thống kê aw-->
        </div>
    </div>
</section>
@section('script')
<script>
    $(function() {
        $('.delete-btn i').on('click', function() {
            var type = $(this).data('type');
            //                    alert(type);
            if (type === 'cancel') {
                showCancelMessage();
            }
        });
    });

    function showCancelMessage() {
        swal({
            title: "Bạn có chắn chắn?",
            text: "Bạn sẽ không thể khôi phục được khuyến mãi này!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3F51B5",
            confirmButtonText: "Xoá",
            cancelButtonText: "Huỷ",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm) {
            if (isConfirm) {
                swal("Đã xoá!", "Khuyến mãi đã được xoá", "success");
            } else {
                swal("Đã huỷ", "Khuyến mãi vẫn còn", "error");
            }
        });
    }
</script>
<script>
    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#gallery-photo-add').on('change', function() {
            $('.gallery').empty();
            imagesPreview(this, 'div.gallery');
        });
    });
    $(function() {
        // Multiple images preview in browser
        var imagesPreviewEdit = function(input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#gallery-photo-edit').on('change', function() {
            $('.gallery-edit').empty();
            imagesPreviewEdit(this, 'div.gallery-edit');
        });
    });
</script>
@endsection
</body>
@endsection
