<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        a {
            text-underline: none;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="http://www.itamloan.vn/image/catalog/nmkhoi/logo/logo%20AAR%20.png"
                                 style="width:100%; max-width:280px;">
                        </td>

                        <td>
                            Hoá đơn số : #123<br>
                            Ngày tạo: January 1, 2015<br>
                            Trạng thái: Đặt hàng thành công
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h2>Đặt hàng thành công !</h2>
                <p>Cảm ơn quý khách đã đặt hàng tại itamloan.vn. Đơn hàng của quý khách đã được tiếp nhận và đang trong quá trình xử lý. itamloan sẽ thông báo
                    đến quý khách ngay khi hàng chuẩn bị được giao.
                </p>

            </td>
        </tr>
        <tr>
            <td>
                <h3>THÔNG TIN VẬN CHUYỂN</h3>
            </td>
        </tr>
        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td style="padding: 0">
                            Nguyễn Văn Tài<br>
                            46-48 Trần Văn Khéo - Cái Khế - Ninh Kiều - Cần Thơ
                        </td>

                        <td style="padding: 0">
                            1900 6459<br>
                            cskh@itamloan.vn
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <h3>THÔNG TIN ĐƠN HÀNG</h3>
            </td>
        </tr>
        <tr class="heading">
            <td>
                Hình thức thanh toán
            </td>

            <td>
                Paypal
            </td>
        </tr>

        <tr class="item">
            <td>
                Paypal
            </td>
            <td>
                2.000.000
            </td>
        </tr>
        <tr class="details">
            <td>
                Phí vận chuyển
            </td>
            <td>
                50.000
            </td>
        </tr>
        <tr class="heading">
            <td>
                Sản phẩm
            </td>
            <td>
                Đơn giá
            </td>
        </tr>

        <tr class="item">
            <td>
                iPhone XS MAX 512GB Gold x 2
            </td>

            <td>
                20.000.000
            </td>
        </tr>
        <tr class="item">
            <td>
                iPhone XS MAX 512GB Gold x 2
            </td>

            <td>
                20.000.000
            </td>
        </tr>

        <tr class="item last">
            <td>
                iPhone XS MAX 512GB x 1
            </td>

            <td>
                20.000.000
            </td>
        </tr>

        <tr class="total">
            <td></td>
            <td>
                TỔNG: 100.000.000
            </td>
        </tr>
        <tr>
            <td style="height: 20px"></td>
            <td></td>
        </tr>
        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td style="padding: 0">
                            <b>Thông tin:</b><br>
                            itamloan.vn<br>
                            46-48 Trần Văn Khéo<br>
                            Cái Khế - Ninh Kiều - Cần Thơ
                        </td>

                        <td style="padding: 0">
                            <b>Liên hệ:</b><br>
                            <a href="tel:19006459">1900 6459</a><br>
                            <a href="mailto:support@itamloan.vn ">support@itamloan.vn</a><br>
                            <a href="mailto:cskh@itamloan.vn">cskh@itamloan.vn</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>