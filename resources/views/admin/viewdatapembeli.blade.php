@extends('layouts.app_admin')
@section('title')
<<<<<<< HEAD
<title>Data Nelayan Page - Fishapp</title>
=======
<title>Data Nelayan Page - Raracookies</title>
>>>>>>> 1689366 (Benerin nama)
<style>
    .text-center {
    text-align: center;
}

#datatablesSimple th,
#datatablesSimple td {
    text-align: center;
    vertical-align: middle; /* Menjadikan teks vertikal di tengah */
    border: 1px solid #cccaca; /* Menambahkan border */
}

</style>
@endsection

@section('content')
<ol class="breadcrumb mt-4">
    <li class="breadcrumb-item active">Permintaan Pendaftaran Akun</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Akun Terdaftar
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>No</th> <!-- Kolom nomor -->
                    <th>Name</th>
                    <th>Email</th>
<<<<<<< HEAD
                   
=======

>>>>>>> 1689366 (Benerin nama)
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th> <!-- Kolom nomor -->
                    <th>Name</th>
                    <th>Email</th>
<<<<<<< HEAD
                    
=======

>>>>>>> 1689366 (Benerin nama)
                </tr>
            </tfoot>
            <tbody>
                @foreach($data as $index => $nelayan)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                    <td>{{ $nelayan->name }}</td>
                    <td>{{ $nelayan->email }}</td>
                </tr>
                @endforeach
            </tbody>
<<<<<<< HEAD
        </table>        
    </div>
</div>
@endsection
=======
        </table>
    </div>
</div>
@endsection
>>>>>>> 1689366 (Benerin nama)
