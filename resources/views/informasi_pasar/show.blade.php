<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Kelapa Sawit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 

    @include('layouts.app')
    <div class="container">
        <h1 class="mt-4">Detail Harga Pasar</h1>

        <dl class="row">
            <dt class="col-sm-3">Periode Waktu</dt>
            <dd class="col-sm-9">{{ $hargaPasar->periode_waktu }}</dd>

            <dt class="col-sm-3">Jenis Sawit</dt>
            <dd class="col-sm-9">{{ $hargaPasar->jenis_sawit }}</dd>

            <dt class="col-sm-3">Lokasi</dt>
            <dd class="col-sm-9">{{ $hargaPasar->lokasi }}</dd>

            <dt class="col-sm-3">Harga per Kilo</dt>
            <dd class="col-sm-9">{{ $hargaPasar->harga_per_kilo }}</dd>

            <dt class="col-sm-3">Analisis Pasar</dt>
            <dd class="col-sm-9">{{ $hargaPasar->analisis_pasar }}</dd>
        </dl>

        <a href="{{ route('admin.harga_pasar.edit', $hargaPasar->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('admin.harga_pasar.destroy', $hargaPasar->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
        </form>
    </div>