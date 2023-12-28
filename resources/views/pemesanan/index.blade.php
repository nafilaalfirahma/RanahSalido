<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Kelapa Sawit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include("navbar.php") ?>
    <!-- Tabel Data Pemesanan -->
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
                        <th>Kepentingan</th>
                        <th>Jenis Kelapa Sawit</th>
                        <th>Jumlah Pemesanan (ton)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Pemesanan akan ditampilkan di sini -->
                    <tr>
                        <td> </td>  
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td> 
                            <a type="submit" class="btn btn-success" href="#">Edit</a>
                            <a type="submit" class="btn btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>

