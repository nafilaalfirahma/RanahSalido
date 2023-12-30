@extends('layouts.layout')

    @section('content')

    <br>
    <div class="mt-5">
            <br>
            <h2 class="text-center">Data Pemesanan Kelapa Sawit</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pemesan</th>
                        <th>Instansi</th>
                        <th>Kontak</th>
                        <th>Jenis Kelapa Sawit</th>
                        <th>Jumlah Pemesanan (ton)</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pemesanans as $pemesanan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pemesanan->nama }}</td>
                        <td>{{ $pemesanan->instansi }}</td>
                        <td>{{ $pemesanan->email }}</td>
                        <td>{{ $pemesanan->jenis_sawit }}</td>
                        <td>{{ $pemesanan->jumlah_ton }}</td>
                        <td>
                            <a href="{{ route('pemesanan.show', ['id' => $pemesanan->id]) }}" class="btn btn-success">Lihat Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                        
            </table>
        </div>

    </div>

@endsection