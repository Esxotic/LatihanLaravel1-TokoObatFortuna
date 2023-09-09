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

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <form method="POST" action="/daftarObat" class="row g-3">
                @csrf
            <div class="col-md-6">
                <label for="nama" class="form-label"
                >Nama Obat</label
                >
                <input
                type="text"
                class="form-control @error('nama_obat')
                    is-invalid
                @enderror"
                id="nama"
                name="nama_obat"
                value="{{ old('nama_obat') }}"
                />
                @error('nama_obat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="stok" class="form-label"
                >Stok</label
                >
                <input
                type="number"
                class="form-control @error('stok')
                    is-invalid
                @enderror"
                id="stok"
                name="stok"
                value="{{ old('stok') }}"
                />
                @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="harga" class="form-label">Harga</label>
                <input
                type="number"
                class="form-control @error('harga')
                    is-invalid
                @enderror"
                id="harga"
                placeholder="Cth. 17000"
                name="harga"
                value="{{ old('harga') }}"
                />
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="jenis" class="form-label"
                >Tipe Obat</label
                >
                <select id="jenis" class="form-select" name="jenis_id">
                    @foreach ($jenis as $j)
                        @if (old('jenis_id') == $j->id)
                            <option value="{{ $j->id }}" selected>{{ $j->nama }}</option>
                        @else
                            <option value="{{ $j->id }}">{{ $j->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="umur" class="form-label">Umur</label>
                <select id="umur" class="form-select" name="umur_id">
                    @foreach ($umurs as $umur)
                        @if (old('umur_id') == $umur->id)
                            <option value="{{ $umur->id }}" selected>{{$umur->nama}}</option>
                        @else
                            <option value="{{ $umur->id }}">{{$umur->nama}}</option>
                        @endif

                    @endforeach
                </select>
            </div>
            <div class="col-12 btnjerman">
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
