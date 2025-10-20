@extends('layout')

@section('title', 'Drama & Film')

@section('content')

<link rel="stylesheet" href="{{ asset('css/hover.css') }}">

<div class="container text-center py-5">
    <h1 class="text-white">Konyol</h1>
    <p>Koleksi Drama dan Film Lucu.</p>
    <div class="row row-cols-1 row-cols-md-3 g-3 mt-4">
        @foreach ($films as $film)
            <div class="col">
                <div class="card border-0 shadow-sm film-card">
                    <img src="{{ $film['poster'] }}" class="card-img" alt="{{ $film['title'] }}">
                    <div class="card-img-overlay film-overlay text-white p-3 d-flex flex-column justify-content-end">
                        <h5 class="card-title mb-1">{{ $film['title'] }}</h5>
                        <p class="card-text small mb-1">{{ $film['description'] }}</p>
                        <small class="text-light">Durasi: {{ $film['duration'] }} | Genre: {{ $film['genre'] }}</small>
                    </div>
                    <div class="watch-btn">
                        <a href="#" class="btn btn-sm btn-outline-light">Tonton Sekarang</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection