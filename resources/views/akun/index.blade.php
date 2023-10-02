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
       </style>

       @if (session()->has('success'))
           <div class="alert alert-success alert-dismissible fade show col-xl-12 col-lg-7 mb-4" role="alert">
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
       @endif

       @if ($users->count())
           <div class="col-xl-12 col-lg-7">
               <div class="card shadow mb-4">
                   <table class="table" id="users">
                       <thead>
                           <tr>
                               <th scope="col">No.</th>
                               <th scope="col">Email</th>
                               <th scope="col">Akses</th>
                               <th scope="col">Aksi</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($users as $user)
                               <tr>
                                   <th scope="row">{{ $users->firstItem() + $loop->index }}</th>
                                   <td>{{ $user->email }}</td>
                                   <td>{{ $user->name }}</td>
                                   <td>
                                       <a href="{{ route('akun.edit', $user) }}" class="btn btn-warning">
                                           <i class="fa fa-wrench" aria-hidden="true"></i>
                                       </a>
                                       <form action="{{ route('akun.destroy', $user->id) }}" method="POST" class="d-inline">
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
       {{ $users->links() }}
   @endsection
