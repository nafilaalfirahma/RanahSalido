
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Ranah Salido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<center>
    <div><?php include("navbar.php") ?></div>
    <div>
        <br><br><br>
    <table class="table table-striped table-hover">
        <thead>
            <h3>Tabel Informasi Pengelolaan Perkebunan</h3><br>
        </thead>
        <tbody>
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
            <tr>
                <th><button class="btn btn-primary">Edit</button></th>
            <!-- <th scope="row">3</th>
            <td colspan="2" class="table-active">Larry the Bird</td>
            <td>@twitter</td> -->
            </tr>
            <tr class="table-active">

            </tr>
        </tbody>
    </table>
    </div>
    </center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>