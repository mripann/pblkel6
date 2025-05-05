<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">

    @yield('title')

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/logorara.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

     <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.min.css" rel="stylesheet">

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <style>
    body {
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      background-attachment: fixed;
      background-image: url("{{asset('img/bg.svg')}}");
   }

   .warning-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background: linear-gradient(45deg, #ff0000, #b20000);
        color: #000;
        font-weight: bold;
        font-size: 16px;
        text-align: center;
        padding: 15px 10px;
        z-index: 1000;
        box-shadow: 0px -4px 6px rgba(0, 0, 0, 0.1);
        border-top: 4px solid #fffb00;
        text-transform: uppercase;
    }
    .warning-banner span {
        font-size: 14px;
        color: #ffffff;
        display: block;
        margin-top: 5px;
    }
   </style>
</head>
<body class="font-sans antialiased min-h-screen dark:bg-gray-900">

@include('components.spiner')

@if (Auth::check())
@include('layouts.navigation')
@else
@include('layouts.guestnavigation')
@endif

<div class="warning-banner">
    ⚠️ Perhatian: Website ini masih dalam tahap pengembangan ⚠️
    <span>Fitur-fitur tertentu mungkin belum berfungsi dengan sempurna. Terima kasih atas pengertiannya.</span>
</div>

@yield('content')

<!-- Tombol Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
   style="position: fixed; bottom: 160px; right: 20px; width: 60px; height: 60px; background-color: #00bcd4; color: white; border-radius: 50%; display: flex; justify-content: center;
   align-items: center; font-size: 24px; font-weight: bold; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); cursor: pointer; text-decoration: none; z-index: 999;">
    <i class="bi bi-arrow-up"></i>
</a>

<!-- Tombol Bantuan -->
<a href="{{ route('bantuan') }}" title="Bantuan"
   style="position: fixed; bottom: 90px; right: 20px; width: 60px; height: 60px; background-color: #00bcd4; color: white; border-radius: 50%; display: flex; justify-content: center;
   align-items: center; font-size: 30px; font-weight: bold; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); cursor: pointer; text-decoration: none; z-index: 1000;">
    <i class="bi bi-question-circle"></i>
</a>

@yield('foot')

<script>
    function toggleDarkMode() {
        document.documentElement.classList.toggle('dark');
    }
</script>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js"></script>

<script>
    @if($errors->any())
        Swal.fire({
            icon: "error",
            title: "Oops...",
            html: `{!! implode('<br>', $errors->all()) !!}`,  // Gabungkan semua error menjadi string.
        });
    @endif
</script>

<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            html: `{!! session('success') !!}`,  // Menggunakan 'html' agar bisa menampilkan HTML/teks langsung.
        });
    @elseif(session('status'))
        Swal.fire({
            icon: 'info',
            title: 'Status',
            html: `{!! session('status') !!}`,
        });
    @elseif(session('gagal'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: `{!! session('gagal') !!}`,
        });
    @endif
</script>
</body>
</html>
