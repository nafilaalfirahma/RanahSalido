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
    
    <!-- Buat About Us -->
        <br>
        <div class="card text-center">
            <div class="card-body">
                <h3>Beranda Admin</h3>
            </div>
        </div>

        <!-- Content Dashboardnya -->
        <!-- Pegawai Pekerja, Luas Tanah, Jenis Bibit-->
        <!-- Existing code -->
                <center>
                <div class="container mt-4">
                <div class="row">
                    <!-- Existing cards -->
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card">
                            <h5>Informasi Pasar</h5>
                            <br>
                            <a type="submit" class="btn btn-success" href=""></a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card">
                            <!-- Card content -->
                            <h5>Pengelolaan Perkebunan</h5>
                            <br>
                            <a type="submit" class="btn btn-success" href="{{ route('pengelolaan_perkebunan.index') }}">Kelola Data</a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card">
                            <!-- Card content -->
                            <h5>Peta Sebaran</h5>
                            <br>
                            <a type="submit" class="btn btn-success" href=""></a>
                        </div>
                    </div>
                </div>
                </div>

                <!-- New row for the remaining cards -->
                <center>
                <div class="container mt-4">
                <div class="row">
                    <!-- Card 4 -->
                    <div class="col-md-4">
                        <div class="card">
                            <h5>Riwayat Pengajuan Pemesanan</h5>
                            <br>
                            <a type="submit" class="btn btn-success" href="{{ route('pemesanan.index') }}">List Pengajuan Pemesanan</a>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="col-md-4">
                        <div class="card">
                            <h5>Riwayat Pengajuan Kerjasama</h5>
                            <br>
                            <a type="submit" class="btn btn-success" href=""></a>
                        </div>
                    </div>
                </div>
                </div>

                <br>
                <div>
                    <form action="">
                    <a type="submit" class="btn btn-danger" href={{ route('logout')}}>Logout</a>
                    </form>
                </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous">
        </script>

</body>

</html>
