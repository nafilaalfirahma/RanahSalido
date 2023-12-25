@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">UBAH DATA PENGELOLAAN KEBUN</h1>
      <p class="tambahp">Edit Informasi ke Tabel Informasi Pengelolaan Kebun</p>
      <form action="{{ route('pengelolaan_perkebunan.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="tanggal_tanam">Tanggal Tanam</label>
        <input id="wtanam" name="plant" type="date" required placeholder="Masukkan Tanggal Tanam">
        <label for="tanggal_panen">Tanggal Panen</label>
        <input id="wpanen" name="harvest" type="date" required placeholder="Masukkan Tanggal Panen">
        <label for="jenis_bibit">Jenis Bibit</label>
        <input id="bibit" name="seed" type="text" required placeholder="Masukkan Jenis Bibit yang Ditanam">
        <label for="jenis_pupuk">Jenis Pupuk</label>
        <input id="pupuk" name="fertilizer" type="text" required placeholder="Masukkan Jenis Pupuk yang Digunakan">
        <label for="jumlah_tanam">Jumlah Tanam</label>
        <input id="jtanam" name="plantQty" type="number" required placeholder="Masukkan Jumlah Bibit yang Ditanam">
        <label for="jumlah_panen">Jumlah Panen</label>
        <input id="jpanen" name="harvestQty" type="number" required placeholder="Masukkan Jumlah Panen yang Diperoleh">
        <!-- <label for="presentase_keberhasilan">Persentase Keberhasilan</label>
        <input id="persentase" name="persentase" type="number" required placeholder="Masukkan Persentase">
        <label for="estimasi_jumlah_panen">Estimasi Jumlah Panen</label>
        <input id="estimasi" name="estimasi" type="number" required placeholder="Masukkan Estimasi"> -->
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
@endsection
