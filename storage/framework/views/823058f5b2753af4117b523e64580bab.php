

<?php $__env->startSection('title', 'Page Not Found'); ?>

<?php $__env->startSection('content'); ?>

<!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Russo+One&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/NotFound_style.css')); ?>">
    <div class="content">
      <h1>404</h1>
      <h2>PAGE NOT FOUND</h2>
      <p>
        The page you are looking for was moved, removed, renamed, or might never
        existed.
      </p>
      <div class="action">
        <a href="<?php echo e(route('home')); ?>">
          <button>BACK</button>
        </a>
        <a href="<?php echo e(route('contact')); ?>">
          <button>CONTACT US</button>
        </a>
      </div>
      <img src="<?php echo e(asset('images/cat.gif')); ?>">
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Assesment1\resources\views/NotFound/NF.blade.php ENDPATH**/ ?>