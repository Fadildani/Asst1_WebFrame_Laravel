

<?php $__env->startSection('title', 'Drama & Film'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/hover.css')); ?>">

<div class="container text-center py-5">
    <h1 class="text-white">Konyol</h1>
    <p>Koleksi Drama dan Film Lucu.</p>
    <div class="row row-cols-1 row-cols-md-3 g-3 mt-4">
        <?php $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card border-0 shadow-sm film-card">
                    <img src="<?php echo e($film['poster']); ?>" class="card-img" alt="<?php echo e($film['title']); ?>">
                    <div class="card-img-overlay film-overlay text-white p-3 d-flex flex-column justify-content-end">
                        <h5 class="card-title mb-1"><?php echo e($film['title']); ?></h5>
                        <p class="card-text small mb-1"><?php echo e($film['description']); ?></p>
                        <small class="text-light">Durasi: <?php echo e($film['duration']); ?> | Genre: <?php echo e($film['genre']); ?></small>
                    </div>
                    <div class="watch-btn">
                        <a href="#" class="btn btn-sm btn-outline-light">Tonton Sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Assesment1\resources\views/konyol.blade.php ENDPATH**/ ?>