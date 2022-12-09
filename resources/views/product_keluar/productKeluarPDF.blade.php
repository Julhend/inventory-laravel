<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>


</head>

<style>
    #table-data {
        border-collapse: collapse;
        padding: 3px;
    }

    #table-data td,
    #table-data th {
        border: 1px solid black;
    }

    h2,
    h3 {
        text-align: left;
        /* margin-right: 100px;
        margin-left: 100px; */

    }
</style>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                            <h2><img src="https://files.fm/thumb_show.php?i=v8fhdrga5" alt="logo" width="400" height="80"></h2>
                                <h3>Invoice Barang Keluar</h3>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>


        <table border="0" id="table-data" width="100%">
            <tr>
                <td width="70px">Invoice ID</td>
                <td width="">: {{ $product_keluar->id }}</td>
                <td width="30px">Created</td>
                <td>: {{ $product_keluar->tanggal }}</td>
            </tr>

            <tr>
                <td>Telepon</td>
                <td>: {{ $product_keluar->customer->telepon }}</td>
                <td>Alamat</td>
                <td>: {{ $product_keluar->customer->alamat }}</td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>: {{ $product_keluar->customer->nama }}</td>
                <td>Email</td>
                <td>: {{ $product_keluar->customer->email }}</td>
            </tr>

            <tr>
                <td>Product</td>
                <td>: {{ $product_keluar->product->nama }}</td>
                <td>Quantity</td>
                <td>: {{ $product_keluar->qty }}</td>
            </tr>

        </table>

        {{--<hr size="2px" color="black" align="left" width="45%">--}}


        <table border="0" width="100%">
    <tr align="right">
        <td><br />Mengetahui<br /><br /><br /><br /></td>
    </tr>
</table>
<table border="0" width="100%">
    <tr align="right">
        <td>(______________________)</td>
    </tr>
</table>
    </div>