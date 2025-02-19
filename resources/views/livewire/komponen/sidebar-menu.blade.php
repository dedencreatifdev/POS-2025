<div>
    <aside class="main-sidebar sidebar-light-lightblue elevation-4">
        <!-- Brand Logo -->
        <a wire:navigate href="{{ route('dashboard.sales') }}" class="brand-link bg-lightblue">
            <img src="{{ asset('style') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="pb-3 mt-3 mb-3 user-panel d-flex">
                <div class="image">
                    <img src="{{ asset('style') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item {{ request()->routeIs('dashboard.*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->routeIs('dashboard.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a wire:navigate href="{{ route('dashboard.sales') }}"
                                    class="nav-link {{ request()->routeIs('dashboard.sales') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sales</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>CRM</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->routeIs('produk.*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->routeIs('produk.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Produk
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a wire:navigate href="{{ route('produk.list') }}"
                                    class="nav-link {{ request()->routeIs('produk.list') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Produk List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</div>
