<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Download</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
        }

        #ttd {
            display: block;
            margin-top: 150px;
            margin-left: 70%;
            text-align: center;
        }
    </style>
</head>

<body>
    <span class="text-center">
        <h1>APOTEK FORTUNA</h1>
        <h4>LAPORAN PENJUALAN</h4>
        <h6>Periode {{ $transaksis[0]->created_at->format('d-m-Y') }}</h6>
    </span>

    <table class="table table-striped table-bordered">
        <thead>
            <tr class="">
                <th scope="col">No</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Qty</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $transaksi)
                <tr class="">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $transaksi->obat->nama_obat }}</td>
                    <td>{{ $transaksi->kuantiti }}</td>
                    <td>{{ $transaksi->harga }}</td>
                    <td id="total">{{ number_format($transaksi->total, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot class="table-secondary">
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" colspan="2">Total Penjualan</th>
                <th scope="col" class="">{{ number_format($transaksi->sum('total'), 0, ',', '.') }}</th>
            </tr>
        </tfoot>
    </table>

    <span id="ttd">
        <h6>Mengetahui</h6>
        <br>
        <br>
        <br>
        <h6>Pemilik</h6>
    </span>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        $('#total').val().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    </script>
</body>

</html>
