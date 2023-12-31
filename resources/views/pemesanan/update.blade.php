@extends('layouts.layout')

    @section('content')

    <br>
    <div class="container mt-5">
        <br>
        <h2 class="text-center">Update Pemesanan Kelapa Sawit</h2>

        <!-- Form Pemesanan -->
        <form method="POST" action="{{ route('pemesanan.replace', ['id' => $pemesanan->id]) }}">

            @csrf 

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $pemesanan->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <input type="text" class="form-control" id="instansi" name="instansi" value="{{ $pemesanan->instansi }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $pemesanan->email }}" required>
            </div>
            <div class="mb-3">
                <label for="jenis_sawit" class="form-label">Jenis Kelapa Sawit</label>
                <input type="text" class="form-control" id="jenis_sawit" name="jenis_sawit" value="{{ $pemesanan->jenis_sawit }}" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_ton" class="form-label">Jumlah Pemesanan (ton)</label>
                <input type="number" class="form-control" id="jumlah_ton" name="jumlah_ton" value="{{ $pemesanan->jumlah_ton }}" required>
            </div>
            <button type="submit" class="btn btn-success" >Update Pemesanan</button>
        </form>

        @if (session('message'))
            <script type="text/javascript">
            Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{ session('message') }}",
            confirmButtonText: 'OK'
                })
            </script>
        @endif

        @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif


@endsection