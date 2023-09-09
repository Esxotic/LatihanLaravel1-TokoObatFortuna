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
    .btnj {
      margin-top: 50px;
      width: 200px;
    }
</style>

    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <form class="row g-3">
          <div class="col-md-4">
            <label for="inputPassword4" class="form-label"
              >Nama Obat</label
            ><br />
            <select
              class="form-select"
              aria-label="Default select example"
              id="inputPassword4"
            >
              <option selected>Open this select menu</option>
              <option value="1">Anakonidin</option>
              <option value="2">Imodium</option>
              <option value="3">Nutrimax Omega 3</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputEmail4" class="form-label"
              >Nama Pelanggan</label
            >
            <input
              type="text"
              class="form-control"
              id="inputEmail4"
            />
          </div>

          <div class="col-md-4">
            <label for="inputAddress" class="form-label">Harga</label>
            <input
              type="number"
              class="form-control"
              id="inputAddress"
              placeholder="Rp.17,000"
              disabled
            />
          </div>
          <div class="col-md-6">
            <label for="inputAddressq" class="form-label"
              >Kontak / Alamat</label
            >
            <input
              type="text"
              class="form-control"
              id="inputAddressq"
              placeholder=""
            />
          </div>
          <div class="col-md-6">
            <label for="inputAddress3" class="form-label"
              >Keterangan</label
            >
            <input
              type="text"
              class="form-control"
              id="inputAddress3"
              placeholder=""
            />
          </div>
          <div class="col-12 btnjerman text-center">
            <button type="submit" class="btn btn-success btnj">
              Simpan
            </button>
            <button type="reset" class="btn btn-warning btnj">
                Reset
              </button>
            <a href="{{ route('daftarObat.index') }}">
              <button type="button" class="btn btn-danger btnj">
                Keluar
              </button>
            </a>
          </div>
        </form>
      </div>
    </div>
@endsection
