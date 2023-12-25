@extends('layouts.layout')

@section('content')
  <section id="list">
    <div class="container">
      <h1>Data Pengelolaan Perkebunan</h1>
      @if (count($pengelolaan) > 0)
        <div class="table-responsive">
          <table class="table-striped table">
            <thead>
              <tr>
                <th>Tanggal Tanam</th>
                <th>Tanggal Panen</th>
                <th>Jenis Bibit</th>
                <th>Jenis Pupuk</th>
                <th>Jumlah Tanam</th>
                <th>Estimasi Panen</th>
                <th>Jumlah Panen</th>
                <th>Persentase Keberhasilan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pengelolaan as $kebun)
                <tr>
                  <td>{{ $kebun->tanggal_tanam }}</td>
                  <td>{{ $kebun->tanggal_panen }}</td>
                  <td>{{ $kebun->jenis_bibit }}</td>
                  <td>{{ $kebun->jumlah_tanam }}</td>
                  <td>{{ $kebun->estimasi_jumlah_panen }}</td>
                  <td>{{ $kebun->jumlah_panen }}</td>
                  <td>{{ $kebun->presentase_keberhasilan }}</td>
                  <td></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p>Tidak ada Data Pengelolaan Kebun.</p>
      @endif
    </div>
  </section>
@endsection