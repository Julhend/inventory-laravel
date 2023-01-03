{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="UTF-8">--}}
{{--<meta name="viewport"--}}
{{--content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--<link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css ')}}">--}}
{{--<!-- Font Awesome -->--}}
{{--<link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}} ">--}}
{{--<!-- Ionicons -->--}}
{{--<link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css')}} ">--}}

{{--<title>Product Masuk Exports All PDF</title>--}}
{{--</head>--}}
{{--<body>--}}
<style>
    #product-masuk {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #product-masuk td,
    #product-masuk th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #product-masuk tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #product-masuk tr:hover {
        background-color: #ddd;
    }

    #product-masuk th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }

    h2,
    h3 {
        text-align: left;
        /* margin-right: 100px;
        margin-left: 100px; */
    }

</style>

<table cellpadding="0" cellspacing="0">
    <tr class="top">
        <td colspan="2">
            <table>
                <tr>
                    <td class="title">
                        <div>

                            <h2><img src="https://files.fm/thumb_show.php?i=v8fhdrga5" alt="logo" width="400" height="80"></h2>
                            <h3>Pre Order Barang</h3>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table id="product-masuk" width="100%">
    <thead>
        <tr>
            <td>ID</td>
            <td>Product</td>
            <td>Quantity</td>
            <td>Date</td>
        </tr>
    </thead>
    <?php $sum_tot_qty = 0 ?>
    @foreach($product_keluar as $p)
    <tbody>
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->product->nama }}</td>
            <td>{{ $p->qty }}</td>
            <td>{{ $p->tanggal }}</td>
        </tr>
    </tbody>
    <?php $sum_tot_qty += $p->qty ?>
    @endforeach

</table>

<table border="0" width="100%">
    <tr align="right">
        <td><br />Total Quantity : {{$sum_tot_qty}}<br /><br /><br /><br /></td>
    </tr>
</table>

<table border="0" width="100%">
    <tr align="right">
        <td><br />Mengetahui<br /><br /><br /><br /></td>
    </tr>
</table>
<table border="0" width="100%">
    <tr align="right">
        <td>___________________</td>
    </tr>
</table>
