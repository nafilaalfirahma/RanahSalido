    <?php $__env->startSection('content'); ?>
    <br>
    <div class="container mt-5">
        <br>
        <h2 class="text-center">Form Pemesanan Kelapa Sawit</h2>

        <!-- Form Pemesanan -->
        <form method="POST" action="<?php echo e(route('pemesanan.store')); ?>">

            <?php echo csrf_field(); ?> 

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <input type="text" class="form-control" id="instansi" name="instansi" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="jenis_sawit" class="form-label">Jenis Kelapa Sawit</label>
                <select class="form-control" id="jenis_sawit" name="jenis_sawit" required>
                    <option value="Costarika">Costarika</option>
                    <option value="Marihat">Marihat</option>
                    <option value="Lonsum">Lonsum</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_ton" class="form-label">Jumlah Pemesanan (ton)</label>
                <input type="number" class="form-control" id="jumlah_ton" name="jumlah_ton" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Ajukan Pemesanan</button>
        </form>

        <?php if(session('message')): ?>
            <script type="text/javascript">
            Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "<?php echo e(session('message')); ?>",
            confirmButtonText: 'OK'
                })
            </script>
            <?php endif; ?>


        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            </div>
        <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RanahSalido\resources\views/pemesanan/create.blade.php ENDPATH**/ ?>