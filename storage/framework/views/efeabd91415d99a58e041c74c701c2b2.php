<?php $__env->startSection('title', 'Berita Konyol'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/hover.css')); ?>">

<div class="container text-center py-5">
    <h1 class="text-black">Berita Konyol</h1>
    <p class="text-black">Kumpulan berita unik dan lucu dari berbagai penjuru negeri.</p>

    <div class="row row-cols-1 row-cols-md-3 g-3 mt-4">
        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card border-0 shadow-sm news-card">
                    <img src="<?php echo e($item['image']); ?>" class="card-img" alt="<?php echo e($item['title']); ?>">
                    <div class="card-img-overlay news-overlay text-white p-3 d-flex flex-column justify-content-end">
                        <h5 class="card-title mb-1"><?php echo e($item['title']); ?></h5>
                        <p class="card-text small mb-1"><?php echo e($item['summary']); ?></p>
                        <small class="text-light"><?php echo e($item['date']); ?> | <?php echo e($item['category']); ?></small>
                    </div>
                    <div class="read-btn">
                        <a href="#" class="btn btn-sm btn-outline-light">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<!-- Review Section -->
<div class="review-section">
    <h2 class="section-title-text-white">🗣️ Review Pembaca</h2>

    <div class="review-grid">
        <div class="review-card">
            <div class="review-header">
                <img src="<?php echo e(asset('images/angger.png')); ?>" alt="User" class="review-avatar">
                <div>
                    <h4 class="review-name">Angger uhuyy</h4>
                    <span class="review-date">20 Oktober 2025</span>
                </div>
            </div>
            <p class="review-text">
                Suka banget sama tampilannya! Berita-berita di sini dikemas dengan ringan dan menarik. Cocok banget buat bacaan santai tiap pagi ☕
            </p>
            <div class="review-rating">⭐⭐⭐⭐⭐</div>
        </div>

        <div class="review-card">
            <div class="review-header">
                <img src="<?php echo e(asset('images/fatan.jpg')); ?>" alt="User" class="review-avatar">
                <div>
                    <h4 class="review-name">Fathi Fathan</h4>
                    <span class="review-date">18 Oktober 2025</span>
                </div>
            </div>
            <p class="review-text">
                Web-nya ringan dan informatif. Tapi mungkin bisa ditambah fitur komentar langsung di tiap berita biar makin interaktif.
            </p>
            <div class="review-rating">⭐⭐⭐⭐</div>
        </div>

        <div class="review-card">
            <div class="review-header">
                <img src="<?php echo e(asset('images/padil.jpg')); ?>" alt="User" class="review-avatar">
                <div>
                    <h4 class="review-name">Fadillah Dani P</h4>
                    <span class="review-date">17 Oktober 2025</span>
                </div>
            </div>
            <p class="review-text">
                Lucu banget berita-berita bagian “konyol” 😂 bikin ketawa tapi tetap informatif!
            </p>
            <div class="review-rating">⭐⭐⭐⭐⭐</div>
        </div>

         <div class="review-card">
            <div class="review-header">
                <img src="<?php echo e(asset('images/hapis.jpg')); ?>" alt="User" class="review-avatar">
                <div>
                    <h4 class="review-name">Hafidz Bang Jago</h4>
                    <span class="review-date">20 Oktober 2025</span>
                </div>
            </div>
            <p class="review-text">
               Websitenya jelek bangeett
            <div class="review-rating">⭐⭐</div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Assesment1\resources\views/news.blade.php ENDPATH**/ ?>