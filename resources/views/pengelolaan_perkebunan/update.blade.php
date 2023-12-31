@extends('layouts.layoutAdmin')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">UPDATE DATA PENGELOLAAN KEBUN</h1>
      <p class="tambahp">Ubah Informasi ke Tabel Informasi Pengelolaan Kebun</p>
      <form action="{{ route('pengelolaan_perkebunan.update', ['id' => $pengelolaan->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="tanggal_tanam">Tanggal Tanam</label>
        <input id="wtanam" name="tanggal_tanam" type="date"  value="{{$pengelolaan->tanggal_tanam}}">
        <label for="tanggal_panen">Tanggal Panen</label>
        <input id="wpanen" name="tanggal_panen" type="date" value="{{$pengelolaan->tanggal_panen}}" >
        <label for="jenis_bibit">Jenis Bibit</label>
        <input id="bibit" name="jenis_bibit" type="text"  value="{{$pengelolaan->jenis_bibit}}">
        <label for="jenis_pupuk">Jenis Pupuk</label>
        <input id="pupuk" name="jenis_pupuk" type="text" value="{{$pengelolaan->jenis_pupuk}}" >
        <label for="jumlah_tanam">Jumlah Tanam (pohon)</label>
        <input id="jtanam" name="jumlah_tanam" type="number" value="{{$pengelolaan->jumlah_tanam}}">
        <label for="jumlah_panen">Jumlah Panen (ton)</label>
        <input id="jpanen" name="jumlah_panen" type="number"  value="{{$pengelolaan->jumlah_panen}}">
        <!-- <label for="presentase_keberhasilan">Persentase Keberhasilan (%)</label>
        <input id="persentase" name="presentase_keberhasilan" type="number" value="{{$pengelolaan->presentase_keberhasilan}}">
        <label for="estimasi_jumlah_panen">Estimasi Jumlah Panen (ton)</label>
        <input id="estimasi" name="estimasi_jumlah_panen" type="number" value="{{$pengelolaan->estimasi_jumlah_panen}}"> -->
        <button class="btn btn-success" type="submit"  style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
@endsection
