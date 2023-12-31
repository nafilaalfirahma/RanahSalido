@extends('layouts.layoutAdmin')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">TAMBAH DATA PENGELOLAAN KEBUN</h1>
      <p class="tambahp">Tambahkan Informasi ke Tabel Informasi Pengelolaan Kebun</p>
      <form action="{{ route('pengelolaan_perkebunan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="tanggal_tanam">Tanggal Tanam</label>
        <input id="wtanam" name="tanggal_tanam" type="date" required  placeholder="Masukkan Tanggal Tanam">
        <label for="tanggal_panen">Tanggal Panen</label>
        <input id="wpanen" name="tanggal_panen" type="date" required placeholder="Masukkan Tanggal Panen">
        <label for="jenis_bibit">Jenis Bibit</label>
            <br>
            <select class="form-control" id="jenis_bibit" name="jenis_bibit" required>
                    <option value="" disabled selected>Pilih Bibit</option>
                    <option value="Costarika">Costarika</option>
                    <option value="Marihat">Marihat</option>
                    <option value="Lonsum">Lonsum</option>
            </select>
        <!-- <input id="bibit" name="jenis_bibit" type="text" required placeholder="Masukkan Jenis Bibit yang Ditanam"> -->
        <label for="jenis_pupuk">Jenis Pupuk</label>
        <input id="pupuk" name="jenis_pupuk" type="text"  placeholder="Masukkan Jenis Pupuk yang Digunakan">
        <label for="jumlah_tanam">Jumlah Tanam (pohon)</label>
        <input id="jtanam" name="jumlah_tanam" type="number" required placeholder="Masukkan Jumlah Bibit yang Ditanam">
        <label for="jumlah_panen">Jumlah Panen (ton)</label>
        <input id="jpanen" name="jumlah_panen" type="number"  placeholder="Masukkan Jumlah Panen yang Diperoleh">
        <!-- <label for="presentase_keberhasilan">Persentase Keberhasilan (%)</label>
        <input id="persentase" name="presentase_keberhasilan" type="number" placeholder="Masukkan Persentase"> -->
        <!-- <label for="estimasi_jumlah_panen">Estimasi Jumlah Panen (ton)</label>
        <input id="estimasi" name="estimasi_jumlah_panen" type="number" placeholder="Masukkan Estimasi"> -->
        <button class="btn btn-success" type="submit" action="{{ route('pengelolaan_perkebunan.store') }}" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>

@endsection