<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('Backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Surokkha</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('Backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth('doctor')->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                @auth('doctor')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctor.dashboard') }}">
                            <i class="nav-icon fa fa-home text-warning"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctor.user.all') }}">
                            <i class="nav-icon fa fa-user text-warning"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctor.user.first-dose') }}">
                            <i class="nav-icon fa fa-user text-warning"></i>
                            <p>First Dose</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctor.user.second-dose') }}">
                            <i class="nav-icon fa fa-user text-warning"></i>
                            <p>Second Dose</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('doctor.logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-success btn-block">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
