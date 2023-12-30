<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kerjasama Investor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">FORM KERJASAMA INVESTOR</h2>

            <!-- Form kerjasama -->
            <form method="POST" action="<?php echo e(route('kerjasama.store')); ?>" class="d-flex flex-column">
                <?php echo csrf_field(); ?> 

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama : </label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="instansi" class="form-label">Instansi : </label>
                    <input type="text" class="form-control" id="instansi" name="instansi">
                </div>
                <div class="mb-3">
                    <label for="kebutuhan" class="form-label">Kebutuhan : </label>
                    <input type="text" class="form-control" id="kebutuhan" name="kebutuhan" required>
                </div>
                <div class="mb-3">
                    <label for="kontak" class="form-label">Kontak : </label>
                    <input type="text" class="form-control" id="kontak" name="kontak">
                </div>
                <div class="form-group mb-3">
                    <label for="jenis_kerjasama">Jenis Kerjasama : </label>
                    <select class="form-control" name="jenis_kerjasama" required>
                        <option value="Option 1">Lahan</option>
                        <option value="Option 2">Dana</option>
                        <option value="Option 3">Bibit</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-success btn-sm mb-1">Ajukan Kerjasama</button>
                </div>
            </form>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger mt-4">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- JavaScript dan Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\RanahSalido\resources\views/kerjasama/create.blade.php ENDPATH**/ ?>