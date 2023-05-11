<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.index') }}">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-shop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Netkitchen</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.foods') }}">
            <i class="fa-solid fa-utensils" style"=color: #7c97e4;"></i>
            <span>Makanan</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.reservations') }}">
            <i class="fa-solid fa-envelope"></i>
            <span>Reservasi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
