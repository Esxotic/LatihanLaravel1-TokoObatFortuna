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
                <div class="col-md-3">
                    <label for="nama_obat" class="form-label">Nama Obat</label><br />
                    <select class="form-select" aria-label="Default select example" id="nama_obat" name="nama_obat">
                        @foreach ($obats as $obat)
                            @if (old('nama_obat') == $obat->nama_obat)
                                <option value="{{ $obat->id }}" selected>{{ $obat->nama_obat }}</option>
                            @else
                                <option value="{{ $obat->id }}">{{ $obat->nama_obat }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="qty" class="form-label">Qty</label>
                    <input type="number" class="form-control" id="qty" />
                </div>

                <div class="col-md-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" placeholder="Rp.17,000" readonly />
                </div>

                <div class="col-md-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="text" class="form-control" id="total" placeholder="" readonly name="total" />
                </div>

                <div class="col-md-6">
                    <label for="bayar" class="form-label">Bayar</label>
                    <input type="number" class="form-control" id="bayar" placeholder="" />
                </div>

                <div class="col-md-6">
                    <label for="kembalian" class="form-label">Kembalian</label>
                    <input type="number" class="form-control" id="kembalian" placeholder="" readonly />
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#nama_obat').on('change', function() {
                var qty = $('#qty').val("");
                var total = $('#total').val("");
                var bayar = $('#bayar').val("");
                var total = $('#total').val("");
                var kembalian = $('#kembalian').val("");
                var id = $(this).val();
                var url = '{{ route('getObat', ':id') }}';
                url = url.replace(':id', id);

                $.ajax({
                    url: url,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        if (response != null) {
                            $('#harga').val(response.harga);
                        }
                        console.log(response);
                    }
                })
            });
            $('#qty').on('keyup', function() {
                var qty = $('#qty').val();
                var harga = $('#harga').val();
                var total = parseInt((qty * harga));
                $('#total').val(total);
            });
            $('#bayar').on('keyup', function() {
                var bayar = $('#bayar').val();
                var total = $('#total').val();
                var kembalian = parseInt(bayar - total);
                $('#kembalian').val(kembalian);
            })
        });
    </script>
@endsection
