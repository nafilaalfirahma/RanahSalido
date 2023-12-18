<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan Kerjasama Investor</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Pengajuan Kerjasama Investor</h2>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>

            <div class="form-group">
                <label for="instansi">Instansi:</label>
                <input type="text" class="form-control" name="instansi" required>
            </div>

            <div class="form-group">
                <label for="kebutuhan">Kebutuhan:</label>
                <input type="text" class="form-control" name="kebutuhan" required>
            </div>

            <div class="form-group">
                <label for="kontak">Kontak:</label>
                <input type="text" class="form-control" name="kontak" required>
            </div>

            <div class="form-group">
                <label for="pilihan_kerjasama">Pilihan Kerjasama:</label>
                <select class="form-control" name="pilihan_kerjasama" required>
                    <option value="Option 1">Lahan</option>
                    <option value="Option 2">Dana</option>
                    <option value="Option 3">Bibit</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Tambahkan script Bootstrap JS (opsional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
