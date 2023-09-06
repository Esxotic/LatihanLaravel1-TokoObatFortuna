<!-- Sidebar -->
<ul
class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
id="accordionSidebar"
>
    <!-- Sidebar - Brand -->
    <a
    class="sidebar-brand d-flex align-items-center justify-content-center"
    href="index.html"
    >
    <div class="sidebar-brand-icon">
        <i
        ><img src="/img/Untitled2.ico" alt="" class="img-circle" id="logo"
        /></i>
    </div>
    <div class="sidebar-brand-text mx-3">Fortuna</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Menu</div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ ($active === 'Dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class="fa fa-tachometer" aria-hidden="true"></i>
        <span>Dashboard</span></a
    >
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ ($active === 'Daftar Obat') ? 'active' : '' }}">
    <a class="nav-link" href="/daftar-obat">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
        <span>Daftar Obat</span></a
    >
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ ($active === 'transaksi') ? 'active' : '' }}">
    <a class="nav-link" href="Transaksi.html">
        <i class="fa fa-exchange" aria-hidden="true"></i>
        <span>Transaksi</span></a
    >
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
