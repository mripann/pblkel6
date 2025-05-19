@extends('layouts.app')

@section('title')
<title>About-Information - Raracookies</title>
@endsection

@section('content')

<!-- About Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5" style="color: #097ABA;">Tentang FishApp</h1>

        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{asset('img/Ikan-Tuna-Sirip-Kuning.jpg')}}" alt="FishApp" class="img-fluid rounded shadow-sm" style="object-fit: cover;">
            </div>
            <div class="col-md-6">
                <h2 class="mb-4">Rara Cookies</h2>
                <p style="color: black;">Rara cookies adalah brand kue kering rumahan yang di buat dengan penuh cinta dan inovasi rasa.</p>
                <ul style="list-style-type: none; padding: 0;">
                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Hasil kue kering rumahan</li>
                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Sistem pemesanan online yang mudah digunakan</li>
                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Jaringan pengiriman cepat dan aman</li>
                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Pembayaran aman dengan berbagai metode</li>
                </ul>
            </div>
        </div>

        <!-- Langkah Bergabung Start -->
<div class="container py-5">
    <h2 class="text-center mb-5" style="color: #097ABA;">Cara Bergabung dengan Rara Cookies</h2>
    <div class="row g-4 justify-content-center">

        <!-- Pendaftaran Pengguna Biasa -->
        <div class="col-lg-5 col-md-6">
            <div class="bg-light p-4 rounded shadow-sm text-center h-100">
                <i class="fa fa-user fa-3x text-warning mb-3"></i>
                <h4 class="mb-3">Pendaftaran Pembeli</h4>
                <p>Bergabung dengan RaraCookies sebagai pembeli dan nikmati lezatnya kue kering rumahan.</p>
                <div class="text-start">
                    <p><i class="fa fa-check text-primary me-2"></i>Daftar akun dengan email dan kata sandi.</p>
                    <p><i class="fa fa-check text-primary me-2"></i>Verifikasi email untuk aktivasi akun.</p>
                    <p><i class="fa fa-check text-primary me-2"></i>Mulai belanja dan lakukan transaksi.</p>
                    <p><i class="fa fa-check text-primary me-2"></i>jelajahhi fitur-fitur menarik lainnya</p>
                </div>
                <a href="{{ route('register') }}" class="btn btn-warning mt-3">Daftar Sekarang</a>
            </div>
        </div>

        <!-- Pendaftaran Nelayan -->
        <div class="col-lg-5 col-md-6">
            <div class="bg-light p-4 rounded shadow-sm text-center h-100">
                <i class="fa fa-anchor fa-3x text-warning mb-3"></i>
                <h4 class="mb-3">Pendaftaran Sebagai User</h4>
                <p>Daftar sebagai Penjual dan mulai menjual hasil roti Anda dengan mudah melalui Raracookies.</p>
                <div class="text-start">
                    <p><i class="fa fa-edit text-primary me-2"></i>Isi formulir pendaftaran yang sudah disediakan.</p>
                    <p><i class="fa fa-hourglass-start text-primary me-2"></i>Tunggu 1x24 jam untuk proses verifikasi admin.</p>
                    <p><i class="fa fa-envelope text-primary me-2"></i>Terima email konfirmasi terkait status pendaftaran.</p>
                    <p><i class="fa fa-lock text-primary me-2"></i>Daftarkan akun dan buat kata sandi baru.</p>
                </div>
                <a href="{{route('form_registrasi_nelayan')}}" class="btn btn-warning mt-3">Daftar User</a>
            </div>
        </div>
    </div>
</div>
<!-- Langkah Bergabung End -->


        <!-- Manfaat FishApp Start -->
        <h2 class="text-center mt-5 mb-4" style="color: #097ABA;">Mengapa Memilih RaraCookies?</h2>
        <div class="row gy-4">
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <i class="fa fa-star text-warning fa-2x me-3"></i>
                    <div>
                        <h5>Produk Berkualitas</h5>
                        <p>RaraCookies memastikan produk yang Anda beli adalah hasil dari roti pilihan dan berkualitas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <i class="fa fa-shield-alt text-warning fa-2x me-3"></i>
                    <div>
                        <h5>Pembayaran Aman</h5>
                        <p>Kami menyediakan berbagai metode pembayaran yang aman dan terpercaya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <i class="fa fa-users text-warning fa-2x me-3"></i>
                    <div>
                        <h5>Memberdayakan Penjual</h5>
                        <p>Kami mendukung penjual rumahan dengan memberikan akses langsung ke pasar digital.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <i class="fa fa-clock text-warning fa-2x me-3"></i>
                    <div>
                        <h5>Pengiriman Cepat</h5>
                        <p>Dapatkan pesanan Anda dengan cepat dan tepat waktu, langsung ke pintu rumah Anda.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Manfaat FishApp End -->
    </div>
</div>
<!-- About Section End -->

@include('components.foot')
@endsection


