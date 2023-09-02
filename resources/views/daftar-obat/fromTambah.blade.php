@extends('template.main')

@section('container')
<style>
    img#logo {
      filter: drop-shadow(0px 0px 2px rgba(0, 0, 0, 0.7));
    }
    form {
      padding: 20px 40px;
    }
    form label {
      margin-top: 10px;
      margin-bottom: -5px;
    }
    form input {
      margin-bottom: 10px;
    }
    .btnjerman {
      margin: 50px 200px 0;
    }
    .btnj {
      width: 200px;
    }
  </style>
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
        <form class="row g-3">
            <div class="col-md-6">
            <label for="inputEmail4" class="form-label"
                >Nama Obat</label
            >
            <input
                type="text"
                class="form-control"
                id="inputEmail4"
            />
            </div>
            <div class="col-md-6">
            <label for="inputPassword4" class="form-label"
                >Stok</label
            >
            <input
                type="number"
                class="form-control"
                id="inputPassword4"
            />
            </div>
            <div class="col-md-6">
            <label for="inputAddress" class="form-label">Harga</label>
            <input
                type="number"
                class="form-control"
                id="inputAddress"
                placeholder="Cth. 17000"
            />
            </div>
            <div class="col-md-6">
            <label for="inputAddress1" class="form-label"
                >Keterangan</label
            >
            <input
                type="text"
                class="form-control"
                id="inputAddress1"
                placeholder="buk plis saya cuma mau lulus"
            />
            </div>
            <div class="col-md-6">
            <label for="inputState" class="form-label"
                >Tipe Obat</label
            >
            <select id="inputState" class="form-select">
                <option selected>-Pilih Tipe Obat-</option>
                <option>Obat Bebas</option>
                <option>Obat Bebas Terbatas</option>
                <option>Obat Keras</option>
                <option>Obat Herbal</option>
                <option>Obat Wajib Apotek</option>
                <option>Obat Golongan Narkotika</option>
            </select>
            </div>
            <div class="col-md-6">
            <label for="inputState2" class="form-label">Umur</label>
            <select id="inputState2" class="form-select">
                <option selected>-Pilih Tipe Umur-</option>
                <option>Anak-anak</option>
                <option>Dewasa</option>
                <option>Lansia</option>
            </select>
            </div>
            <div class="col-12 btnjerman">
            <button type="submit" class="btn btn-success btnj">
                Simpan
            </button>
            <button type="reset" class="btn btn-warning btnj">
                Reset
            </button>
            <a href="/daftar-obat">
                <button type="button" class="btn btn-danger btnj">
                Keluar
                </button>
            </a>
            </div>
        </form>
        </div>
    </div>
@endsection
