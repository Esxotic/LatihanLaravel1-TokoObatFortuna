@extends('template.main')

@section('container')
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7 mt-n2">
      <a href="FormTambahData.html" class="btn btn-primary btntambah"
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
            <tr>
              <th scope="row">1</th>
              <td>Anakonidin</td>
              <td>Obat Bebas</td>
              <td>Rp.17,000</td>
              <td>Anak-anak</td>
              <td>25</td>
              <td colspan="2">
                <button class="btn btn-warning">
                  <i class="fa fa-wrench" aria-hidden="true"></i>
                </button>
                <button class="btn btn-danger">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Imodium</td>
              <td>Obat Bebas</td>
              <td>Rp.25,000</td>
              <td>Dewasa</td>
              <td>24</td>
              <td colspan="2">
                <button class="btn btn-warning">
                  <i class="fa fa-wrench" aria-hidden="true"></i>
                </button>
                <button class="btn btn-danger">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Nutrimax Omega 3</td>
              <td>Obat Bebas</td>
              <td>Rp.35,000</td>
              <td>Lansia</td>
              <td>12</td>
              <td colspan="2">
                <button class="btn btn-warning">
                  <i class="fa fa-wrench" aria-hidden="true"></i>
                </button>
                <button class="btn btn-danger">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection
