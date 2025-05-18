@extends('layouts.app')
@section('title')
<title>Perbarui Kata Sandi - Raracookies</title>

<style>
    .custom-title {
        font-size: 2rem; /* Sesuaikan ukuran font sesuai kebutuhan */
        font-weight: bold; /* Opsional: membuat font menjadi tebal */
    }
</style>
@endsection

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <form action="{{ route('password.store') }}" method="POST" class="shadow p-4 rounded bg-white">
                <h1 class="text-center mb-4">Perbarui Kata Sandi</h1>
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email Anda" value="{{ $request->email }}" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="password">Kata Sandi Baru</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan kata sandi Anda">
                        <div class="input-group-append" id="toggle-password" style="cursor: pointer;">
                            <span class="input-group-text d-flex align-items-center" style="height: 100%;">
                                <i class="bi bi-eye" id="eye-icon"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="confirm_password" name="password_confirmation" required placeholder="Masukkan kata sandi Anda">
                        <div class="input-group-append" id="toggle-password-confirmation" style="cursor: pointer;">
                            <span class="input-group-text d-flex align-items-center" style="height: 100%;">
                                <i class="bi bi-eye" id="eye-icon-confirm"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">Perbarui Kata Sandi</button>
            </form>
        </div>
    </div>
</div>

@include('components.foot')
@endsection

@section('foot')
<script>
    document.getElementById('toggle-password').addEventListener('click', function() {
           const passwordInput = document.getElementById('password');
           const eyeIcon = document.getElementById('eye-icon');

           if (passwordInput.type === 'password') {
               passwordInput.type = 'text'; // Tampilkan password
               eyeIcon.classList.remove('bi-eye'); // Ganti ikon mata
               eyeIcon.classList.add('bi-eye-slash'); // Ganti ikon mata
           } else {
               passwordInput.type = 'password'; // Sembunyikan password
               eyeIcon.classList.remove('bi-eye-slash'); // Ganti ikon mata
               eyeIcon.classList.add('bi-eye'); // Ganti ikon mata
           }
       });

       document.getElementById('toggle-password-confirmation').addEventListener('click', function() {
           const passwordInput = document.getElementById('confirm_password');
           const eyeIcon = document.getElementById('"eye-icon-confirm');

           if (passwordInput.type === 'password') {
               passwordInput.type = 'text'; // Tampilkan password
               eyeIcon.classList.remove('bi-eye'); // Ganti ikon mata
               eyeIcon.classList.add('bi-eye-slash'); // Ganti ikon mata
           } else {
               passwordInput.type = 'password'; // Sembunyikan password
               eyeIcon.classList.remove('bi-eye-slash'); // Ganti ikon mata
               eyeIcon.classList.add('bi-eye'); // Ganti ikon mata
           }
       });
</script>
@endsection
