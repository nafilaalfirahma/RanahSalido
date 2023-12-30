<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kerjasama Investor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 

    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                        <?php $__currentLoopData = $kerjasamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kerjasama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($kerjasama->nama); ?></td>
                                <td><?php echo e($kerjasama->instansi); ?></td>
                                <td><?php echo e($kerjasama->kebutuhan); ?></td>
                                <td><?php echo e($kerjasama->kontak); ?></td>
                                <td><?php echo e($kerjasama->jenis_kerjasama); ?></td>
                                <td>
                                    <a href="<?php echo e(route('kerjasama.update', ['id' => $kerjasama->id])); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    
                                    <form action="<?php echo e(route('kerjasama.destroy', ['id' => $kerjasama->id])); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="text-center mt-3">
                    <a href="<?php echo e(route('kerjasama.create')); ?>" class="btn btn-primary">Tambah Data Kerjasama Baru</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\RanahSalido\resources\views/kerjasama/index.blade.php ENDPATH**/ ?>