@extends('template.main')

@section('container')
    <div class="card shadow p-0" style="width: 18rem;">
        <img src="/img/finance.avif" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Laporan Penjualan</h5>
            <p class="card-text">Silahkan klik tombol di bawah untuk melihat laporan penjualan</p>
            <a href="laporan/cetakLaporan" class="btn btn-primary">Lihat Laporan</a>
        </div>
    </div>
@endsection
