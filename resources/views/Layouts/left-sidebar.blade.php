<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link{{ request()->is('/show') ? 'active' : '' }}" href="/" ><i class="fa fa-fw fa-user-circle"></i>Home <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-divider">
                        DATA BARANG
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('/item/show') ? 'active' : '' }}" href="/item/show" ><i class="fa fa-fw fa-user-circle"></i>Daftar Barang <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="/item/create" ><i class="fa fa-fw fa-user-circle"></i>Input Barang Masuk <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#" ><i class="fa fa-fw fa-user-circle"></i>Input Barang Keluar <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-divider">
                        DATA SALES
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" ><i class="fa fa-fw fa-rocket"></i>Daftar Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" ><i class="fas fa-fw fa-chart-pie"></i>Permintaan Barang</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" ><i class="fab fa-fw fa-wpforms"></i>Forms</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" ><i class="fas fa-fw fa-table"></i>Tables</a>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
