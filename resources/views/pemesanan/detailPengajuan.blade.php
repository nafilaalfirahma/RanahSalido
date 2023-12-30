@extends('layouts.layout')

    @section('content')

    <br>
    <br>
    <div class="card">
        <br>
       <h2 class="text-center">Detail Pengajuan Pemesanan Anda</h2>
        <div class="card-body">
            <h5 class="card-title">Nama Lengkap: </h5>
            <p class="card-text">{{ $pemesanan->nama }}</p>

            <h5 class="card-title">Asal Instansi: </h5>
            <p class="card-text">{{ $pemesanan->instansi }}</p>

            <h5 class="card-title">Email: </h5>
            <p class="card-text">{{ $pemesanan->email }}</p>

            <h5 class="card-title">Jenis Sawit: </h5>
            <p class="card-text">{{ $pemesanan->jenis_sawit }}</p>

            <h5 class="card-title">Jumlah (ton): </h5>
            <p class="card-text">{{ $pemesanan->jumlah_ton }}</p>

            <a href="{{ route('pemesanan.index.user') }}" class="btn btn-success">Kembali</a>
        </div>
        <div class="card-footer text-body-secondary">
            {{ $pemesanan->updated_at }}
        </div>
    </div>

@endsection