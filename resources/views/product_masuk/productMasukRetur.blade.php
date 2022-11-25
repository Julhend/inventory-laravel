<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nota Retur</title>


</head>

<style>
    #table-data {
        border-collapse: collapse;
        padding: 3px;
    }

    #table-data td, #table-data th {
        border: 1px solid black;
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
                                <h1>Nota Retur</h1>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


    <table border="0" id="table-data" width="80%">
        <tr>
            <td width="70px">Nota ID</td>
            <td width="">: {{ $product_masuk->id }}</td>
            <td width="30px">Created</td>
            <td>: {{ $product_masuk->tanggal }}</td>
        </tr>

        <tr>
            <td>Telepon</td>
            <td>: {{ $product_masuk->supplier->telepon }}</td>
            <td>Alamat</td>
            <td>: {{ $product_masuk->supplier->alamat }}</td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>: {{ $product_masuk->supplier->nama }}</td>
            <td>Email</td>
            <td>: {{ $product_masuk->supplier->email }}</td>
        </tr>

        <tr>
            <td>Product</td>
            <td >: {{ $product_masuk->product->nama }}</td>
            <td>Quantity</td>
            <td >: {{ $product_masuk->qty }}</td>
        </tr>

    </table>

    {{--<hr  size="2px" color="black" align="left" width="45%">--}}


    <table border="0" width="80%">
        <tr align="right">
            <td><br/>Hormat Kami<br /><br/><br /></td>
        </tr>
    </table>
    <table border="0" width="80%">
        <tr align="right">
            <td>Bank Perkreditan Rakyat</td>
        </tr>
        <tr align="right">
            <td>Asli Dana Mandiri</td>
        </tr>
    </table>
</div>
