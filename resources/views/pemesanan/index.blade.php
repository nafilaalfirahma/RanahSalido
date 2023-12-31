<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Ranah Salido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body

    <!-- Tabel Data Pemesanan -->
    <br>
    <div class="mt-5">
            <br>
            <h2 class="text-center">Data Pemesanan Kelapa Sawit</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pemesan</th>
                        <th>Instansi</th>
                        <th>Kontak</th>
                        <th>Jenis Kelapa Sawit</th>
                        <th>Jumlah Pemesanan (ton)</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pemesanans as $pemesanan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pemesanan->nama }}</td>
                        <td>{{ $pemesanan->instansi }}</td>
                        <td>{{ $pemesanan->email }}</td>
                        <td>{{ $pemesanan->jenis_sawit }}</td>
                        <td>{{ $pemesanan->jumlah_ton }}</td>
                        <td>

                            <a href="{{ route('pemesanan.update', ['id' => $pemesanan->id]) }}" class="btn btn-success">Edit</a>

                            <form action="{{ route('pemesanan.destroy', ['id' => $pemesanan->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
                        
            </table>
            <center>
            <a href="{{ route('adminPage') }}" class="btn btn-success">Kembali ke Beranda</a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous">
        </script>

</body>

</html>