<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/assets/img/logo-parkir.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="bd-none d-md-inline"><h6>Parking Vehicle</h6></span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/assets/img/user.jpg') }}" class="brand-image img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('profile.edit')}}" class="d-block">
                    @auth
                    {{Auth::user()->name }}
                    @endauth
                </a>
                <span class="text-primary">Role : {{ Auth::user()->role }}</span>
            </div>
        </div>
        <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{'/area_parkir'}}" class="nav-link active">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Area Parkir</p>
                    </a>
                </li>
                @if(Auth::user()->role == 'administrator')
                <li class="nav-item menu-open">
                    <a href="{{'/kampus'}}" class="nav-link active">
                        <i class="nav-icon fas fa-university"></i>
                        <p>Kampus</p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{'/kendaraan'}}" class="nav-link active">
                        <i class="nav-icon fas fa-car"></i>
                        <p>Kendaraan</p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{'/transaksi'}}" class="nav-link active">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{'/jenis'}}" class="nav-link active">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Jenis</p>
                    </a>
                </li>
                @endif
                
                <li class="nav-item menu-open">
                    <a href="http://127.0.0.1:8000/" class="nav-link active">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
