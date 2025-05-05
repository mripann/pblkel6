<!-- About Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5" style="color: #097ABA;">Tentang RaraCookies</h1>

        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{asset('img/logorara.png')}}" alt="Rara" class="img-fluid rounded shadow-sm" style="object-fit: cover;">
            </div>
            <div class="col-md-6">
                <h2 class="mb-4">Apa itu RaraCookies?</h2>
                <p style="color: black;">RaraCookies adalah brand kue kering rumahan yang di buat dengan penuh cinta dan inovasi rasa.</p>
                <ul style="list-style-type: none; padding: 0;">
                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Hasil yang lezat dan berkualitas</li>
                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Sistem pemesanan online yang mudah digunakan</li>
                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Jaringan pengiriman cepat dan aman</li>
                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Pembayaran aman dengan berbagai metode</li>
                </ul>
                <a class="btn btn-warning py-3 px-5 mt-2" href="{{ route('about_information') }}">Selengkapnya</a>
            </div>
        </div>

        <!-- Langkah Bergabung Start -->
<div class="container py-5">
    <h2 class="text-center mb-5" style="color: #097ABA;">Cara Bergabung dengan RaraCookies</h2>
    <div class="row g-4 justify-content-center">

        <!-- Pendaftaran Pengguna Biasa -->
        <div class="col-lg-5 col-md-6">
            <div class="bg-light p-4 rounded shadow-sm text-center h-100">
                <i class="fa fa-user fa-3x text-warning mb-3"></i>
                <h4 class="mb-3">Pendaftaran Pembeli</h4>
                <p>Bergabung dengan RaraCookies sebagai pembeli dan nikmati kue kering yang lezat.</p>
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
                <h4 class="mb-3">Pendaftaran Sebagai Client</h4>
                <p>Daftar sebagai Client dan mulai menjual Produk Kue Kering Anda dengan mudah melalui RaraCookies.</p>
                <div class="text-start">
                    <p><i class="fa fa-edit text-primary me-2"></i>Isi formulir pendaftaran yang sudah disediakan.</p>
                    <p><i class="fa fa-hourglass-start text-primary me-2"></i>Tunggu 2x24 jam untuk proses verifikasi admin.</p>
                    <p><i class="fa fa-envelope text-primary me-2"></i>Terima email konfirmasi terkait status pendaftaran.</p>
                    <p><i class="fa fa-lock text-primary me-2"></i>Daftarkan akun dan buat kata sandi baru.</p>
                </div>
                <a href="{{route('form_registrasi_nelayan')}}" class="btn btn-warning mt-3">Daftar Nelayan</a>
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
                        <p>RaraCookies memastikan produk lokal yang Anda beli adalah hasil yang lezat berkualitas.</p>
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
                        <h5>Memberdayakan produk lokal</h5>
                        <p>Kami mendukung produk lokal dengan memberikan akses langsung ke pasar digital.</p>
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
