@extends('layouts.layout')

@section('content')

  <section id="list">
    <div class="container">
      <br><h1>Data Pengelolaan Perkebunan</h1>
      <p>Berikut merupakan data pengelolaan Kebun Kelapa Sawit milik Kelompok Tani Ranah Salido</p>
      @if (count($pengelolaan) > 0)
      <br><br>
        <div class="table-responsive">
          <table class="table  table-hover table-striped table-bordered table-success">
            <thead class="table-dark">
              <tr style="text-align: center; vertical-align: middle;">
                <th>Tanggal Tanam</th>
                <th>Tanggal Panen</th>
                <th>Jenis Bibit</th>
                <th>Jenis Pupuk</th>
                <th>Jumlah Tanam (pohon)</th>
                <th>Estimasi Panen (ton)</th>
                <th>Jumlah Panen (ton)</th>
                <th>Persentase Keberhasilan (%)</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pengelolaan as $kebun)
                <tr style="text-align: center; vertical-align: middle;" >
                  <td>{{ $kebun->tanggal_tanam }}</td>
                  <td>{{ $kebun->tanggal_panen }}</td>
                  <td>{{ $kebun->jenis_bibit }}</td>
                  <td>{{ $kebun->jenis_pupuk }}</td>
                  <td>{{ $kebun->jumlah_tanam }}</td>
                  <td>{{ $kebun->estimasi_jumlah_panen }}</td>
                  <td>{{ $kebun->jumlah_panen }}</td>
                  <td>{{ $kebun->presentase_keberhasilan }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p>Tidak ada Data Pengelolaan Kebun.</p>
      @endif
    </div>
    <br><br>
    <center><a href="{{ route('index') }}" class="btn btn-success">Kembali ke Beranda</a>
  </section>
  @endsection

