

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Carousel -->
<div id="visionCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo e(asset('images/1.jpg')); ?>" class="d-block w-100 carousel-img" alt="Cinta Yasmin">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('images/abetaekwondo.png')); ?>" class="d-block w-100 carousel-img" alt="Drama Lain">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('images/kiri.png')); ?>" class="d-block w-100 carousel-img" alt="Sports">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('images/purbaya.png')); ?>" class="d-block w-100 carousel-img" alt="Drama Lain">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#visionCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#visionCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Main Content -->
<div class="content-wrapper">
    <h2 class="section-title text-black">📰 Today's Highlight</h2>

    <!-- Content Grid -->
    <div class="content-grid">
        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Large Featured Card -->
            <div class="news-card news-card-medium">
                <img src="<?php echo e(asset('images/cipung.png')); ?>" class="card-image" alt="Featured News">
                <div class="card-content">
                    <div>
                        <span class="card-badge konyol">Berita Konyol</span>
                        <h3 class="card-title">Cipung ngajak Kang Dedi ngopi dirumah, Netizen: Lucuu bangettt!!</h3>
                        <p class="card-excerpt">
                            Momen menggemaskan kembali datang dari Cipung, si bocah viral yang selalu bikin netizen gemas. Kali ini, Cipung terlihat mengajak Kang Dedi Mulyadi ngopi bareng di rumahnya. Dalam video yang diunggah di media sosial, Cipung dengan gaya polosnya bilang...
                        </p>
                    </div>
                    
                </div>
            </div>

            <!-- Medium Cards -->
            <div class="news-card news-card-medium">
                <img src="<?php echo e(asset('images/sty.png')); ?>" class="card-image" alt="Sports News">
                <div class="card-content">
                    <div>
                        <span class="card-badge sport">Berita Sport</span>
                        <h3 class="card-title">Anggota Komisi X setuju jika Shin Tae-Yong balik latih Indonesia</h3>
                        <p class="card-excerpt">
                            Anggota Komisi X DPR RI menyatakan dukungan penuh terhadap kembalinya Shin Tae-Yong sebagai pelatih tim nasional Indonesia. Dalam rapat kerja yang digelar Kamis kemarin...
                        </p>
                    </div>
                  
                </div>
            </div>

            <div class="news-card news-card-medium">
                <img src="<?php echo e(asset('images/bahlil.png')); ?>" class="card-image" alt="Government News">
                <div class="card-content">
                    <div>
                        <span class="card-badge news">Berita Pemerintah</span>
                        <h3 class="card-title">Bahlil tidak bisa memenuhi kebutuhan POM Swasta</h3>
                        <p class="card-excerpt">
                            Menteri Investasi/Kepala BKPM, Bahlil Lahadalia, mengakui bahwa pemerintah belum mampu memenuhi kebutuhan Pusat Obat dan Makanan (POM) swasta yang semakin meningkat...
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Trending Card -->
            <div class="sidebar-card">
                <h3 class="sidebar-title text-white">
                    🔥 Trending Sekarang
                </h3>
                <div class="trending-item">
                    <div class="trending-number">1</div>
                    <div class="trending-text">
                        <h4>Cipung ngajak Kang Dedi ngopi dirumah</h4>
                        <span>15.2k pembaca</span>
                    </div>
                </div>
                <div class="trending-item">
                    <div class="trending-number">2</div>
                    <div class="trending-text">
                        <h4>Shin Tae-Yong balik latih Indonesia</h4>
                        <span>12.8k pembaca</span>
                    </div>
                </div>
                <div class="trending-item">
                    <div class="trending-number">3</div>
                    <div class="trending-text">
                        <h4>Bahlil tidak bisa memenuhi POM Swasta</h4>
                        <span>11.5k pembaca</span>
                    </div>
                </div>
                <div class="trending-item">
                    <div class="trending-number">4</div>
                    <div class="trending-text">
                        <h4>Ayu Ting Ting santet Raffi Ahmad</h4>
                        <span>10.9k pembaca</span>
                    </div>
                </div>
                <div class="trending-item">
                    <div class="trending-number">5</div>
                    <div class="trending-text">
                        <h4>Panas matahari tidak wajar di Bekasi</h4>
                        <span>9.7k pembaca</span>
                    </div>
                </div>
            </div>

            <!-- Quick Info Card -->
            <div class="sidebar-card">
                <h3 class="sidebar-title text-white">
                    ℹ️ Info Hari Ini
                </h3>
                <div class="info-row">
                    <div class="info-header">
                        <span class="info-label">Cuaca Jakarta</span>
                        <span class="info-value neutral">☀️ 32°C</span>
                    </div>
                    <span class="info-detail">Cerah berawan</span>
                </div>
                <div class="info-row">
                    <div class="info-header">
                        <span class="info-label">USD/IDR</span>
                        <span class="info-value negative">15.750 ▼</span>
                    </div>
                    <span class="info-detail">-0.32%</span>
                </div>
                <div class="info-row">
                    <div class="info-header">
                        <span class="info-label">Emas</span>
                        <span class="info-value positive">1.045.000 ▲</span>
                    </div>
                    <span class="info-detail">+0.85%</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Grid - More News -->
    <div class="bottom-grid">
        <div class="news-card news-card-small">
            <img src="<?php echo e(asset('images/ayu.png')); ?>" class="card-image" alt="News">
            <div class="card-content">
                <div>
                    <span class="card-badge konyol">Berita Konyol</span>
                    <h3 class="card-title">Ayu Ting Ting santet Rafi Ahmad biar nempel terus</h3>
                </div>
                <div class="card-meta">
                    <button class="read-btn">Read</button>
                    <span>1h</span>
                    <span>24 Jan 2022</span>
                </div>
            </div>
        </div>

        <div class="news-card news-card-small">
            <img src="<?php echo e(asset('images/list.jpg')); ?>" class="card-image" alt="Weather">
            <div class="card-content">
                <div>
                    <span class="card-badge news">Berita Cuaca</span>
                    <h3 class="card-title">Panas Matahari hari Kamis dianggap tidak wajar</h3>
                </div>
                <div class="card-meta">
                    <button class="read-btn">Read</button>
                    <span>2h</span>
                    <span>16 Okt 2022</span>
                </div>
            </div>
        </div>

        <div class="news-card news-card-small">
            <img src="<?php echo e(asset('images/timnas.png')); ?>" class="card-image" alt="News">
            <div class="card-content">
                <div>
                    <span class="card-badge sport">Berita Sport</span>
                    <h3 class="card-title">Timnas Indonesia siap hadapi Malaysia</h3>
                </div>
                <div class="card-meta">
                    <button class="read-btn">Read</button>
                    <span>3h</span>
                    <span>25 Jan 2022</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Assesment1\resources\views/home.blade.php ENDPATH**/ ?>