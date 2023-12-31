@extends('layouts.layoutAdmin')

@section('content')

  <section id="list">
    <div class="container">
      <br><h1>Data Pengelolaan Perkebunan</h1>
      @if (count($pengelolaan) > 0)
      <br><br>
        <div class="table-responsive">
          <table class="table  table-hover table-striped table-bordered">
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
                <th>Ubah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pengelolaan as $kebun)
                <tr style="text-align: center; vertical-align: middle;">
                  <td>{{ $kebun->tanggal_tanam }}</td>
                  <td>{{ $kebun->tanggal_panen }}</td>
                  <td>{{ $kebun->jenis_bibit }}</td>
                  <td>{{ $kebun->jenis_pupuk }}</td>
                  <td>{{ $kebun->jumlah_tanam }}</td>
                  <td>{{ $kebun->estimasi_jumlah_panen }}</td>
                  <td>{{ $kebun->jumlah_panen }}</td>
                  <td>{{ $kebun->presentase_keberhasilan }}</td>
                  <td><a type="submit" class="btn btn-primary" href="{{ route('pengelolaan_perkebunan.edit', ['id' => $kebun->id]) }}">Edit</a> <a type="submit" class="btn btn-danger" href="{{ route('pengelolaan_perkebunan.destroy', ['id' => $kebun->id]) }}">Hapus</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p>Tidak ada Data Pengelolaan Kebun.</p>
      @endif
    </div>
    <div>
      <center>
      <a type="submit" class="btn btn-primary" href="{{ route('pengelolaan_perkebunan.create') }}">Tambahkan Data</a>
      <br><br><a href="{{ route('adminPage') }}" class="btn btn-success">Kembali ke Beranda</a>
      </center>
    </div>
  </section>
  @if (session('message'))
            <script type="text/javascript">
            Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{ session('message') }}",
            confirmButtonText: 'OK'
                })
            </script>
            @endif


        @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
  @endsection

