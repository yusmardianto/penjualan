<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{asset('img/dapen-bulat.png') }}" width="50"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Admin</span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ url('user/profile') }}">Profil</a></li>
                        <li><a class="dropdown-item" href="{{ url('user/resetpassword') }}">Ubah Password</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    Kimia Farma
                </div>
            </li>
            <li class="landing_link">
                <a href="{{ url('home') }}">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">Home</span>
                </a>
            </li>

            <li @if(Request::segment(1) == 'laporan') class="active" @endif>
                <a href="#">
                    <i class="fa fa-print"></i> <span class="nav-label">Employee</span> <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ url('penjualan') }}">Data Penjualan</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
