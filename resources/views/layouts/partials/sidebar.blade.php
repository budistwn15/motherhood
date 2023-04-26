<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @guest
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link {{(request()->is('/')) ? 'active' : ''}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('diagnosis.create')}}" class="nav-link {{(request()->is('/diagnosis/*')) ? 'active' : ''}}">
                    <i class="nav-icon fas fa-stethoscope"></i>
                    <p>
                        Diagnosis Penyakit
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.informasi.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-info"></i>
                    <p>
                        Informasi
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.artikel.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-blog"></i>
                    <p>
                        Artikel
                    </p>
                </a>
            </li>
        @else
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{(request()->is('admin/dashboard*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-header">Master</li>
        <li class="nav-item">
            <a href="{{route('gejalas.index')}}" class="nav-link {{(request()->is('admin/gejala*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-tape"></i>
                <p>
                    Gejala
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('penyakits.index')}}" class="nav-link {{(request()->is('admin/penyakit*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-virus"></i>
                <p>
                    Penyakit
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('solusis.index')}}" class="nav-link {{(request()->is('admin/solusi*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-syringe"></i>
                <p>
                    Solusi
                </p>
            </a>
        </li>
        <li class="nav-header">Relasi</li>
        <li class="nav-item">
            <a href="#" class="nav-link {{(request()->is('admin/relasi/*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-link"></i>
                <p>
                    Relasi
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('relasi-gejala.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Gejala - Penyakit</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('relasi-solusi.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Solusi - Penyakit</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-header">Pengguna</li>
        <li class="nav-item">
            <a href="{{route('admins.index')}}" class="nav-link {{(request()->is('admin/admin*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Admin
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Users
                </p>
            </a>
        </li>
        <li class="nav-header">Artikel</li>
        <li class="nav-item">
            <a href="{{route('artikels.index')}}" class="nav-link {{(request()->is('admin/artikels*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-blog"></i>
                <p>
                    Artikel
                </p>
            </a>
        </li>
        <li class="nav-header">Informasi</li>
        <li class="nav-item">
            <a href="{{route('informasis.index')}}" class="nav-link {{(request()->is('admin/informasi*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-info"></i>
                <p>
                    Informasi
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-door-closed"></i>
                <p>
                    Logout
                </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        @endguest
    </ul>
</nav>
<!-- /.sidebar-menu -->
