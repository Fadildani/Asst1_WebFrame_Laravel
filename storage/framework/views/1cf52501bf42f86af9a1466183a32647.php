

<?php $__env->startSection('title', 'Pemerintah'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/pemerintah.css')); ?>">

<div class="container py-5">
    <h1 class="text-center text-primary mb-4">Program Pemerintah</h1>
    <p class="text-center mb-5">Inisiatif dan layanan publik yang berdampak langsung bagi masyarakat Indonesia.</p>

    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="program-section mb-5 d-flex flex-column flex-md-row align-items-center">
            <div class="program-image mb-3 mb-md-0 me-md-4">
                <img src="<?php echo e($program['image']); ?>" alt="<?php echo e($program['title']); ?>" class="img-fluid rounded shadow-sm">
            </div>
            <div class="program-content">
                <h4 class="text-primary"><?php echo e($program['title']); ?></h4>
                <p><?php echo e($program['description']); ?></p>
                <span class="badge bg-secondary me-2"><?php echo e($program['category']); ?></span>
                <small class="text-muted"><?php echo e($program['date']); ?></small>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Assesment1\resources\views/pemerintah.blade.php ENDPATH**/ ?>