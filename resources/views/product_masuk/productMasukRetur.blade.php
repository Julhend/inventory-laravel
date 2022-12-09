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

    #table-data td,
    #table-data th {
        border: 1px solid black;
    }

    h2,
    h3 {
        text-align: center;
        margin-right: 100px;
        margin-left: 100px;

    }

    /* div {
        text-align: justify;
    }

    div:after {
        content: "";
        display: inline-block;
        width: 80%;
    } */
</style>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <div>

                                    <h2>Bank Perkreditan Rakyat Asli Dana Mandiri</h2>
                                    <h3>Nota Retur</h3>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>


        <table border="0" id="table-data" width="100%">
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
                <td>: {{ $product_masuk->product->nama }}</td>
                <td>Quantity</td>
                <td>: {{ $product_masuk->qty }}</td>
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