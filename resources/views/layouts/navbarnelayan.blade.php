 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">

 {{-- start nav --}}
 <nav class="sb-topnav navbar navbar-expand navbar-light "
     style="background-color: #ffcc00; box-shadow: 0 -2px 8px rgba(0, 0, 0, 1);  ">
     <!-- Navbar Brand-->
     <a href="{{ route('nelayan.dashboard') }}">
         <img src="{{ asset('img/logorara.png') }}" alt="logo"
             style="width: 60px; height: 55px; margin-left: 10px;">
         <span
             style="
            font-family: 'cookie', cursive;
            font-size: 1.8rem;
            font-weight: semi bold;
            color: white;
            line-height: 1;">RaraCookies
         </span>
     </a>
     <!-- Sidebar Toggle-->
     <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
             class="fas fa-bars"></i></button>
     <!-- Navbar Search-->
     <form action="{{ route('sefood.index') }}" method="GET"
         class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
         <div class="input-group">
             <input class="form-control me-2" type="text" name="search" placeholder="Search for..."
                 aria-label="Search for..." />
             <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
         </div>
     </form>

     <!-- Navbar-->
     <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                 style="{{ request()->routeIs('nelayan.pengaturan') ? 'color: white;' : '' }} {{ request()->routeIs('nelayan.profile') ? 'color: white;' : '' }}"
                 data-bs-toggle="dropdown" aria-expanded="false">
                 @if (Auth::guard('nelayan')->user()->detailProfile->foto)
                     <img class="border rounded-circle p-2"
                         src="{{ asset('storage/fotonelayan/' . Auth::guard('nelayan')->user()->detailProfile->foto) }}"
                         style="width: 40px; height: 40px;">
                 @else
                     <i class="fas fa-user fa-fw"></i>
                 @endif
                 {{ Auth::guard('nelayan')->user()->name }}
             </a>
             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                 <li><a class="dropdown-item" href="{{ route('nelayan.profile') }}">Profile</a></li>
                 <li><a class="dropdown-item" href="{{ route('nelayan.pengaturan') }}">Settings</a></li>
                 <li>
                     <hr class="dropdown-divider" />
                 </li>
                 <li><a class="dropdown-item" href="{{ route('nelayan.logout') }}">Logout</a></li>
             </ul>
         </li>
     </ul>
 </nav>
 <div id="layoutSidenav">
     <div id="layoutSidenav_nav">
         <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
             <div class="sb-sidenav-menu" style="background-color: #a17e1d">
                 <div class="nav">
                     <div class="sb-sidenav-menu-heading">Core</div>
                     <a class="nav-link" href="/nelayan/dashboard"
                         style="{{ request()->is('nelayan/dashboard') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}">
                         <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                         Dashboard
                     </a>
                     <div class="sb-sidenav-menu-heading">Management</div>
                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                         style="{{ request()->routeIs('sefood.index') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                        {{ request()->routeIs('seafood.detail.nelayan') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                         {{ request()->routeIs('barangsewa.index') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}"
                         data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                         <div class="sb-nav-link-icon"><i class="fas fa-box-open"></i></div>
                         Produk
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                         data-bs-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="{{ route('sefood.index') }}">Seafood</a>
                             <a class="nav-link" href="{{ route('barangsewa.index') }}">Barangsewa</a>
                         </nav>
                     </div>

                     @php
                         $jumlahpesananSeafood = \App\Models\PesananSeafood::with('keranjangs.seafood') // Pastikan eager loading hingga relasi seafood
                         ->where('status', 'sedang dikemas')
                             ->get()
                             ->filter(function ($pesanan) {
                                 return $pesanan->keranjangs
                                     ->filter(function ($keranjang) {
                                         return $keranjang->seafood->nelayan_id === Auth::guard('nelayan')->user()->id;
                                     })
                                     ->isNotEmpty();
                             })
                             ->count();

                             $jumlahTotalPesanan = $jumlahpesananSeafood
                     @endphp


                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                         data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                         style="{{ request()->routeIs('nelayan.pesanan.seafood') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                        {{ request()->routeIs('nelayan.pesanan.barangsewa') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                        ">
                         <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                         Daftar Pesanan
                         @if($jumlahTotalPesanan == 0)
                         @else
                         <span class="badge rounded-pill bg-danger">
                            {{ $jumlahTotalPesanan }}
                        </span>
                         @endif
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                         data-bs-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                             <a class="nav-link" href="{{ route('nelayan.pesanan.seafood') }}">Seafood
                                @if($jumlahpesananSeafood == 0)
                         @else
                                <span class="badge rounded-pill bg-danger">
                                    {{ $jumlahpesananSeafood }}
                                </span>
                                @endif
                             </a>
                             <a class="nav-link" href="{{ route('nelayan.pesanan.barangsewa') }}">Barang Sewa</a>
                         </nav>
                     </div>

                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                         data-bs-target="#collapseTransaksi" aria-expanded="false" aria-controls="collapseTransaksi"
                         style="
                        {{ request()->routeIs('history.transaksi.seafood') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                        {{ request()->routeIs('history.transaksi.barangsewa') ? 'background: rgba(21, 76, 108, 0.368);' : '' }}
                        ">
                         <div class="sb-nav-link-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                         History Transaksi
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseTransaksi" aria-labelledby="headingThree"
                         data-bs-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="{{ route('history.transaksi.seafood') }}">Seafood</a>
                             <a class="nav-link" href="{{ route('history.transaksi.barangsewa') }}">Barang Sewa</a>
                         </nav>
                     </div>

                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                         data-bs-target="#collapseDokumen" aria-expanded="false" aria-controls="collapseDokumen">
                         <div class="sb-nav-link-icon"><i class="fas fa-folder-open"></i></div>
                         Dokumen
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseDokumen" aria-labelledby="headingFour"
                         data-bs-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="#">Laporan</a>
                             <a class="nav-link" href="#">Panduan</a>
                             <a class="nav-link" href="#">Dokumen Lainnya</a>
                         </nav>
                     </div>

                 </div>
             </div>
             <div class="sb-sidenav-footer">
                 <div class="small">Logged in as:</div>
                 {{ Auth::guard('nelayan')->user()->name }}
             </div>
         </nav>
     </div>

     {{-- end nav --}}
