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
        <h1 class="mt-4">Edit Data Harga Pasar</h1>

        <form method="POST" action="{{ route('admin.harga_pasar.update', $hargaPasar->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="periode_waktu">Periode Waktu</label>
                <input type="text" class="form-control" id="periode_waktu" name="periode_waktu" value="{{ $hargaPasar->periode_waktu }}" required>
            </div>

            <div class="form-group">
                <label for="jenis_sawit">Jenis Sawit</label>
                <input type="text" class="form-control" id="jenis_sawit" name="jenis_sawit" value="{{ $hargaPasar->jenis_sawit }}" required>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $hargaPasar->lokasi }}" required>
            </div>

            <div class="form-group">
                <label for="harga_per_kilo">Harga per Kilo</label>
                <input type="number" class="form-control" id="harga_per_kilo" name="harga_per_kilo" value="{{ $hargaPasar->harga_per_kilo }}" required>
            </div>

            <div class="form-group">
                <label for="analisis_pasar">Analisis Pasar</label>
                <textarea class="form-control" id="analisis_pasar" name="analisis_pasar" rows="3" required>{{ $hargaPasar->analisis_pasar }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>