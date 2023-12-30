@extends('layouts.app')

@section('addStyle')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif



            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Data Peta Persebaran</span>

                    <a class="btn btn-primary ml-auto" href="{{ route('admin.tambah_data_persebaran') }}">Tambah
                        Data</a>
                </div>


                <div class="card-body">


                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Lokasi</th>
                                <th>Longitude</th>
                                <th>Latitude</th>
                                <th>Sektor</th>
                                <th>Jenis Bibit</th>
                                <th>Jumlah Bibit</th>
                                <th>Luas Tanah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_peta as $item)


                            <tr>
                                <td>{{ $item->lokasi }}</td>
                                <td>{{ $item->longitude }}</td>
                                <td>{{ $item->latitude }}</td>
                                <td>{{ $item->sektor }}</td>
                                <td>{{ $item->jenis_bibit }}</td>
                                <td>{{ $item->jumlah_bibit }}</td>
                                <td>{{ $item->luas_tanah }}</td>
                                <td>
                                    <a href="{{ route('admin.hapus_data_peta', $item->id) }}" class="btn btn-danger">
                                        <span class="fas fa-trash"></span>
                                    </a>

                                    <a href="{{ route('admin.edit_data_persebaran', $item->id) }}"
                                        class="btn btn-warning">
                                        <span class="fas fa-pencil"></span>
                                    </a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Lokasi</th>
                                <th>Longitude</th>
                                <th>Latitude</th>
                                <th>Sektor</th>
                                <th>Jenis Bibit</th>
                                <th>Jumlah Bibit</th>
                                <th>Luas Tanah</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addScript')

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>

@endsection