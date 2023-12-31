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
        <h1 class="mt-4">Detail Harga Pasar</h1>

        <dl class="row">
            <dt class="col-sm-3">Periode Waktu</dt>
            <dd class="col-sm-9">{{ $InformasiPasar->periode_waktu }}</dd>

            <dt class="col-sm-3">Jenis Sawit</dt>
            <dd class="col-sm-9">{{ $InformasiPasar->jenis_sawit }}</dd>

            <dt class="col-sm-3">Lokasi</dt>
            <dd class="col-sm-9">{{ $InformasiPasar->lokasi }}</dd>

            <dt class="col-sm-3">Harga per Kilo</dt>
            <dd class="col-sm-9">{{ $InformasiPasar->harga_per_kilo }}</dd>

            <dt class="col-sm-3">Analisis Pasar</dt>
            <dd class="col-sm-9">{{ $InformasiPasar->analisis_pasar }}</dd>
        </dl>

        <a href="{{ route('informasi_pasar.edit', $InformasiPasar->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('informasi_pasar.destroy', $InformasiPasar->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
        </form>
    </div>
@endsection