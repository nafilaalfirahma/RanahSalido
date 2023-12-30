@extends('layouts.layout')

    @section('content')
    <br>
    <div class="container mt-5">
        <br>
        <h2 class="text-center">Form Pemesanan Kelapa Sawit</h2>

        <!-- Form Pemesanan -->
        <form method="POST" action="{{ route('pemesanan.store') }}">

            @csrf 

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <input type="text" class="form-control" id="instansi" name="instansi" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="jenis_sawit" class="form-label">Jenis Kelapa Sawit</label>
                <select class="form-control" id="jenis_sawit" name="jenis_sawit" required>
                    <option value="Costarika">Costarika</option>
                    <option value="Marihat">Marihat</option>
                    <option value="Lonsum">Lonsum</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_ton" class="form-label">Jumlah Pemesanan (ton)</label>
                <input type="number" class="form-control" id="jumlah_ton" name="jumlah_ton" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Ajukan Pemesanan</button>
        </form>

        <!-- Session Error belum login  -->
        @if (session('error'))
            <script type="text/javascript">
                alert("{{ session('error') }}");
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