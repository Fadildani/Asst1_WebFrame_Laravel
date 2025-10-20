@extends('layout')

@section('title', 'Berita Konyol')

@section('content')

<link rel="stylesheet" href="{{ asset('css/hover.css') }}">

<div class="container text-center py-5">
    <h1 class="text-black">Berita Konyol</h1>
    <p class="text-black">Kumpulan berita unik dan lucu dari berbagai penjuru negeri.</p>

    <div class="row row-cols-1 row-cols-md-3 g-3 mt-4">
        @foreach ($news as $item)
            <div class="col">
                <div class="card border-0 shadow-sm news-card">
                    <img src="{{ $item['image'] }}" class="card-img" alt="{{ $item['title'] }}">
                    <div class="card-img-overlay news-overlay text-white p-3 d-flex flex-column justify-content-end">
                        <h5 class="card-title mb-1">{{ $item['title'] }}</h5>
                        <p class="card-text small mb-1">{{ $item['summary'] }}</p>
                        <small class="text-light">{{ $item['date'] }} | {{ $item['category'] }}</small>
                    </div>
                    <div class="read-btn">
                        <a href="#" class="btn btn-sm btn-outline-light">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<!-- Review Section -->
<div class="review-section">
    <h2 class="section-title-text-white">🗣️ Review Pembaca</h2>

    <div class="review-grid">
        <div class="review-card">
            <div class="review-header">
                <img src="{{ asset('images/angger.png') }}" alt="User" class="review-avatar">
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
                <img src="{{ asset('images/fatan.jpg') }}" alt="User" class="review-avatar">
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
                <img src="{{ asset('images/padil.jpg') }}" alt="User" class="review-avatar">
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
                <img src="{{ asset('images/hapis.jpg') }}" alt="User" class="review-avatar">
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

@endsection