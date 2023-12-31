<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>
    <title>Form Kerjasama Investor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    @include('layouts.navbar')
    <div class="container mt-5">
        <h2 class="text-center">Update Kerjasama Investor</h2>

        <!-- Form Kerjasama -->
        <form method="POST" action="{{ route('kerjasama.replace', ['id' => $kerjasama->id]) }}">

            @csrf 

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kerjasama->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <input type="text" class="form-control" id="instansi" name="instansi" value="{{ $kerjasama->instansi }}" required>
            </div>
            <div class="mb-3">
                <label for="kebutuhan" class="form-label">Kebutuhan</label>
                <input type="text" class="form-control" id="kebutuhan" name="kebutuhan" value="{{ $kerjasama->kebutuhan }}" required>
            </div>
            <div class="mb-3">
                <label for="kontak" class="form-label">Kontak</label>
                <input type="text" class="form-control" id="kontak" name="kontak" value="{{ $kerjasama->kontak }}" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kerjasama" class="form-label">Jenis Kerjasama</label>
                <input type="text" class="form-control" id="jenis_kerjasama" name="jenis_kerjasama" value="{{ $kerjasama->jenis_kerjasama }}" required>
            </div>
            <button type="submit" class="btn btn-success" >Update kerjasama</button>
        </form>


        @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif


    <!-- JavaScript dan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</body>
</html>