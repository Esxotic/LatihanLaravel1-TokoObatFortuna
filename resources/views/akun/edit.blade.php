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
            <form method="POST" action="{{ route('akun.update', $user) }}" class="row g-3">
                @method('put')
                @csrf
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"
                        class="form-control @error('email')
                    is-invalid
                @enderror"
                        id="email" name="email" value="{{ old('email', $user->email) }}" />
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                        class="form-control @error('password')
                    is-invalid
                @enderror"
                        id="password" name="password" value="{{ old('password', $user->password) }}" />
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="akses" class="form-label">Akses Sebelumnya</label>
                    <input type="text" class="form-control" id="akses" name="akses" value="{{ $user->name }}"
                        readonly />
                </div>

                <div class="col-md-6">
                    <label for="name" class="form-label">Ubah Akses</label>
                    <select id="name" class="form-select" name="name">
                        <option value="pemilik">pemilik</option>
                        <option value="admin">admin</option>
                        <option value="kasir">kasir</option>
                    </select>
                </div>

                <div class="col-12 btnjerman">
                    <button type="submit" class="btn btn-success btnj">
                        Simpan
                    </button>
                    <button type="reset" class="btn btn-warning btnj">
                        Reset
                    </button>
                    <a href="{{ route('akun.index') }}">
                        <button type="button" class="btn btn-secondary btnj">
                            Kembali
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
