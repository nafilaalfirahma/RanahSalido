<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kerjasama Investor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 

    @include('layouts.navbar')

    <!-- Tabel  -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">DATA KERJASAMA INVESTOR</h2>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Instansi</th>
                            <th>Kebutuhan</th>
                            <th>Kontak</th>
                            <th>Jenis Kerjasama</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($kerjasamas as $kerjasama)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kerjasama->nama }}</td>
                                <td>{{ $kerjasama->instansi }}</td>
                                <td>{{ $kerjasama->kebutuhan }}</td>
                                <td>{{ $kerjasama->kontak }}</td>
                                <td>{{ $kerjasama->jenis_kerjasama }}</td>
                                <td>
                                    <a href="{{ route('kerjasama.update', ['id' => $kerjasama->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                    
                                    <form action="{{ route('kerjasama.destroy', ['id' => $kerjasama->id]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center mt-3">
                    <a href="{{ route('kerjasama.create') }}" class="btn btn-primary">Tambah Data Kerjasama Baru</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
