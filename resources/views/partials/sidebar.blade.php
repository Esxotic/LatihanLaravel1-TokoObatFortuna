<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i><img src="/img/Untitled2.ico" alt="" class="img-circle" id="logo" /></i>
        </div>
        <div class="sidebar-brand-text mx-3">Fortuna</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Menu</div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fa fa-tachometer" aria-hidden="true"></i>
            <span>Dashboard</span></a>
    </li>

    @can('admin')
        <!-- Nav Item - Daftar Obat -->
        <li class="nav-item {{ Request::is('daftarObat*') ? 'active' : '' }}">
            <a class="nav-link" href="/daftarObat">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                <span>Daftar Obat</span></a>
        </li>
    @endcan

    @can('kasir')
        <!-- Nav Item - Transaksi -->
        <li class="nav-item {{ Request::is('transaksi*') ? 'active' : '' }}">
            <a class="nav-link" href="/transaksi">
                <i class="fa fa-exchange" aria-hidden="true"></i>
                <span>Transaksi</span></a>
        </li>
    @endcan

    @can('pemilik')
        <!-- Nav Item - Akun -->
        <li class="nav-item {{ Request::is('akun*') ? 'active' : '' }}">
            <a class="nav-link" href="/akun">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Akun</span></a>
        </li>
    @endcan

    @can('pemilik')
        <!-- Nav Item - Laporan -->
        <li class="nav-item {{ Request::is('laporan*') ? 'active' : '' }}">
            <a class="nav-link" href="/laporan">
                <i class="fa fa-area-chart" aria-hidden="true"></i>
                <span>Laporan</span></a>
        </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
