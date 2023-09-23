   @extends('template.main')
   @section('search')
       <!-- Topbar Search -->
       <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
           action="/daftarObat" method="GET">
           <div class="input-group">
               <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." name="search"
                   value="{{ request('search') }}" />
               <div class="input-group-append">
                   <button class="btn btn-primary" type="submit">
                       <i class="fa fa-search" aria-hidden="true"></i>
                   </button>
               </div>
           </div>
       </form>
   @endsection

   @section('container')
       <style>
           img#logo {
               filter: drop-shadow(0px 0px 2px rgba(0, 0, 0, 0.7));
           }

           .btntambah {
               margin-bottom: 5px;
           }
       </style>

       @if (session()->has('success'))
           <div class="alert alert-success alert-dismissible fade show col-xl-12 col-lg-7 mb-4" role="alert">
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
       @endif

       @if ($obats->count())
           <div class="col-xl-12 col-lg-7">
               <a href="{{ route('daftarObat.create') }}" class="btn btn-primary btntambah mt-n3">Tambah Data</a>
               <div class="card shadow mb-4">
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
                                   <th scope="row">{{ $obats->firstItem() + $loop->index }}</th>
                                   <td>{{ $obat->nama_obat }}</td>
                                   <td>{{ $obat->jenis->nama }}</td>
                                   <td>{{ $obat->harga }}</td>
                                   <td>{{ $obat->umur->nama }}</td>
                                   <td>{{ $obat->stok }}</td>
                                   <td colspan="2">
                                       <a href="{{ route('daftarObat.edit', $obat) }}" class="btn btn-warning">
                                           <i class="fa fa-wrench" aria-hidden="true"></i>
                                       </a>
                                       <form action="{{ route('daftarObat.destroy', $obat) }}" method="POST"
                                           class="d-inline">
                                           @method('delete')
                                           @csrf
                                           <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">
                                               <i class="fa fa-trash" aria-hidden="true"></i>
                                           </button>
                                       </form>
                                   </td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       @else
           <p class="text-center fs-4">No Data Found!</p>
       @endif
       {{ $obats->links() }}
   @endsection
