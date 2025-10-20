<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Konyol</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-5">
        <div class="row w-100 align-items-center">
            <!-- LEFT: Logo -->
            <div class="col-4 d-flex justify-content-start align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logonav.png') }}" alt="Vision+" height="40">
                </a>
            </div>

            <!-- MIDDLE: Menu -->
            <div class="col-4 d-flex justify-content-center">
                <div class="collapse navbar-collapse show" id="navMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item mx-2"><a class="nav-link" href="{{ route('news') }}">News</a></li>
                        <li class="nav-item mx-2"><a class="nav-link" href="{{ route('konyol') }}">Konyol</a></li>
                        <li class="nav-item mx-2"><a class="nav-link" href="{{ route('pemerintah') }}">Pemerintah</a></li>
                        <li class="nav-item mx-2"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT: Icons -->
            <div class="col-4 d-flex justify-content-end align-items-center gap-3">
                <a href="#" class="nav-icon" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="bi bi-search fs-4"></i>
                </a>
                <a href="#" class="nav-icon" data-bs-toggle="modal" data-bs-target="#profileModal">
                    <i class="bi bi-person-circle fs-4"></i>
                </a>
                <a href="#" class="nav-icon" data-bs-toggle="modal" data-bs-target="#themeModal">
                    <i class="bi bi-gear fs-4"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<main class="container-fluid p-0">
    @yield('content')
</main>

<!-- Modals -->
<div class="modal fade" id="searchModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cari Konten</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" placeholder="Masukkan kata kunci...">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="profileModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title">Profil Pengguna</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('images/user.png') }}" class="rounded-circle mb-3" width="80" alt="User">
        <p>Selamat datang, Azar!</p>
        <a href="#" class="btn btn-primary">Lihat Akun</a>
        <a href="#" class="btn btn-outline-secondary ms-2">Keluar</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="themeModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title">Mode Tampilan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Pilih mode tampilan yang kamu suka:</p>
        <div class="d-flex justify-content-center gap-3">
          <button class="btn btn-outline-dark">🐊 Light</button>
          <button class="btn btn-outline-dark">💤 Dark</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="text-center py-4 bg-dark mt-5">
    <p class="mb-0">&copy; {{ date('Y') }} NEWS+ Clone by Laravel</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>