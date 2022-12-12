<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route(('dashboard')) }}">Tabungan Siswa</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route(('dashboard')) }}">TS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('dashboard.rombel') }}" class="nav-link"><i class="fas fa-user"></i><span>Rombel</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('dashboard.rayon') }}" class="nav-link"><i class="fas fa-map"></i><span>Rayon</span></a>
            </li>
        </ul>

    </aside>
</div>
