<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pasar dan Harga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 

    @extends('layouts.layout')
    @section('content')
    <div class="container">
        <h1 class="mt-4">Daftar Harga Pasar</h1>
        <a href="{{ route('informasi_pasar.create') }}" class="btn btn-success mb-3">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Periode Waktu</th>
                    <th>Jenis Sawit</th>
                    <th>Lokasi</th>
                    <th>Harga per Kilo</th>
                    <th>Analisis Pasar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($InformasiPasar as $data)
                    <tr>
                        <td>{{ $data->periode_waktu }}</td>
                        <td>{{ $data->jenis_sawit }}</td>
                        <td>{{ $data->lokasi }}</td>
                        <td>{{ $data->harga_per_kilo }}</td>
                        <td>{{ $data->analisis_pasar }}</td>
                        <td>
                            <a href="{{ route('informasi_pasar.show', ['id' => $data->id]) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('informasi_pasar.edit', ['id' => $data->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('informasi_pasar.destroy', $data->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
@endsection