 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">

{{-- start nav --}}

<nav class="sb-topnav navbar navbar-expand navbar-light "
    style="background-color: #000000; box-shadow: 0 -2px 8px rgba(0, 0, 0, 1);  ">
    <!-- Navbar Brand-->
    <a href="{{ route('admin.dashboard') }}">
        <img src="{{ asset('img/logorara.png') }}" alt="logo" style="width: 60px; height: 55px; margin-left: 10px;">
            <span style="
            font-family: 'cookie', cursive;
            font-size: 1.8rem;
            font-weight: semi bold;
            color: white;
            line-height: 1;">RaraCookies </span>
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fas fa-user fa-fw"></i>{{ Auth::guard('admin')->user()->name }}</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu" style="background-color: #ffffff">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="/admin/dashboard"
                        style="{{ request()->is('admin/dashboard') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    @php
                        $nelayan1 = \App\Models\Nelayan::where(
                            'status', 'pending',
                        )->count();

                        $nelayan2 = \App\Models\Seafood::where(
                            'status', 'menunggu di verifikasi admin',
                        )->count();

                        $barang = \App\Models\BarangSewa::where(
                            'status', 'menunggu di verifikasi admin',
                        )->count();

                        $jumlah = $nelayan1+$nelayan2+$barang;
                    @endphp


                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed"
                        style="
                    {{ request()->routeIs('viewdatanelayan') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                    {{ request()->routeIs('detailpermintaanakunnelayan') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                     {{ request()->routeIs('viewdatapermintaannelayan') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                      {{ request()->routeIs('checkpenjualan') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                       {{ request()->routeIs('dataseafood') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                      "
                        href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false"
                        aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                <path fill-rule="evenodd"
                                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                            </svg>
                        </div>
                        Manajemen Akun Nelayan
                            @if ($jumlah === 0)
                            @else
                            <span class="badge badge-pill badge-danger">
                            {{$jumlah}}
                        </span>
                            @endif
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('viewdatapermintaannelayan') }}">Permintaan Pendaftaran Akun
                                    @if ($nelayan1 === 0)
                                    @else
                                    <span class="badge badge-pill badge-danger">
                                    {{$nelayan1}}
                                </span>
                                    @endif
                            </a>
                            <a class="nav-link" href="{{ route('viewdatanelayan') }}">Data Akun Client/a>
                            <a class="nav-link" href="{{ route('checkpenjualan') }}">Permintaan Client
                                @if ($nelayan2 === 0)
                                    @else
                                    <span class="badge badge-pill badge-danger">
                                    {{$nelayan2}}
                                </span>
                                    @endif
                            </a>
                            <a class="nav-link" href="{{ route('dataseafood') }}">Data Seafood</a>

                            <a class="nav-link" href="{{ route('checkpenyewaanalat.nelayan') }}">Permintaan Penyewaan Alat
                                @if ($barang=== 0)
                                    @else
                                    <span class="badge badge-pill badge-danger">
                                    {{$barang}}
                                </span>
                                    @endif
                            </a>
                            <a class="nav-link" href="{{ route('dataseafood') }}">Data Alat</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                <path fill-rule="evenodd"
                                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                            </svg>
                        </div>
                        Manajemen Akun Pembeli
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.viewpembeli') }}">Lihat Data Para Pembeli</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ Auth::guard('admin')->user()->name }}
            </div>
        </nav>
    </div>

    {{-- end nav --}}
