{{-- Sidebar --}}
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="bi bi-grid"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Data</div>
                <a class="nav-link {{ Request::is('dashboard/data-kriteria*') ? 'active' : '' }}" href="/dashboard/data-kriteria">
                    <div class="sb-nav-link-icon"><i class="bi bi-clipboard"></i></div>
                    Kriteria
                </a>
                <a class="nav-link {{ Request::is('dashboard/data-sub-kriteria*') ? 'active' : '' }}" href="/dashboard/data-sub-kriteria">
                    <div class="sb-nav-link-icon"><i class="bi bi-clipboard-plus"></i></div>
                    Sub Kriteria
                </a>
                <a class="nav-link {{ Request::is('dashboard/data-alternatif*') ? 'active' : '' }}" href="/dashboard/data-alternatif">
                    <div class="sb-nav-link-icon"><i class="bi bi-file-text"></i></div>
                    Alternatif
                </a>
                <a class="nav-link {{ Request::is('dashboard/data-penilaian*') ? 'active' : '' }}" href="/dashboard/data-penilaian">
                    <div class="sb-nav-link-icon"><i class="bi bi-files"></i></div>
                    Penilaian
                </a>
                <a class="nav-link {{ Request::is('dashboard/data-perhitungan*') ? 'active' : '' }}" href="/dashboard/data-perhitungan">
                    <div class="sb-nav-link-icon"><i class="bi bi-code"></i></div>
                    Perhitungan
                </a>
                <a class="nav-link {{ Request::is('dashboard/data-hasil-akhir*') ? 'active' : '' }}" href="/dashboard/data-hasil-akhir">
                    <div class="sb-nav-link-icon"><i class="bi bi-code-slash"></i></div>
                    Hasil Akhir
                </a>
                
                @can('admin')
                <div class="sb-sidenav-menu-heading">Admin</div>
                <a class="nav-link {{ Request::is('dashboard/data-user*') ? 'active' : '' }}" href="/dashboard/data-user">
                    <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                    Users
                </a>
                @endcan
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>