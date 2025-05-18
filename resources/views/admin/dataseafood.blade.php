@extends('layouts.app_admin')
@section('title')
<<<<<<< HEAD
<title>Data Seafood Page - Fishapp</title>
=======
<title>Data Seafood Page - Raracookies</title>
>>>>>>> 1689366 (Benerin nama)
@endsection

@section('content')
<ol class="breadcrumb mt-4">
    <li class="breadcrumb-item active">Data Seafood</li>
</ol>

<div class="container mt-4">
    <div class="row">

        @forEach($seafood as $se)
        <!-- Produk 1 -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <img src="{{asset('storage/fotoseafood/'.$se->foto)}}" class="card-img-top" alt="foto seafood" style="height: 150px; object-fit: cover;">
                <div class="card-body p-2">
                    <h5 class="card-title fs-6">{{$se->nama}}</h5>
                    <!-- Presentase Penjualan -->
                    <p class="card-text fw-bold mb-1">Rp {{ number_format($se->harga->harga, 0, ',', '.') }} /KG</p>
                    <p class="card-text mb-0">Tersedia {{$se->jumlah}} KG</p>
                    <p class="card-text mb-3" style="color: green">status {{$se->status}}</p>
                    <div class="d-flex gap-1">
                        <a href="{{route('admin.view.detail.seafood', ['id' => $se->kode_seafood])}}">
<<<<<<< HEAD
                            <button class="btn btn-sm btn-primary">Detail</button> 
=======
                            <button class="btn btn-sm btn-primary">Detail</button>
>>>>>>> 1689366 (Benerin nama)
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 1689366 (Benerin nama)
