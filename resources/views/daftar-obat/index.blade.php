@extends('template.main')

@section('container')
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7 mt-n2">
      <a href="/tambahData" class="btn btn-primary btntambah"
        >Tambah Data</a
      >
      <div class="card shadow mb-4 mt-2">
        <table class="table" id="tobat">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Obat</th>
              <th scope="col">Jenis Obat</th>
              <th scope="col">Harga</th>
              <th scope="col">Umur</th>
              <th scope="col">Stok</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($obats as $obat)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $obat->nama_obat }}</td>
                    <td>Obat Bebas</td>
                    <td>{{ $obat->harga }}</td>
                    <td>Anak-anak</td>
                    <td>{{ $obat->stok }}</td>
                    <td colspan="2">
                        <button class="btn btn-warning">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection
