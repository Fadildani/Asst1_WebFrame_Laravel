@extends('layout')

@section('title', 'Pemerintah')

@section('content')

<link rel="stylesheet" href="{{ asset('css/pemerintah.css') }}">

<div class="container py-5">
    <h1 class="text-center text-primary mb-4">Program Pemerintah</h1>
    <p class="text-center mb-5">Inisiatif dan layanan publik yang berdampak langsung bagi masyarakat Indonesia.</p>

    @foreach ($programs as $program)
        <div class="program-section mb-5 d-flex flex-column flex-md-row align-items-center">
            <div class="program-image mb-3 mb-md-0 me-md-4">
                <img src="{{ $program['image'] }}" alt="{{ $program['title'] }}" class="img-fluid rounded shadow-sm">
            </div>
            <div class="program-content">
                <h4 class="text-primary">{{ $program['title'] }}</h4>
                <p>{{ $program['description'] }}</p>
                <span class="badge bg-secondary me-2">{{ $program['category'] }}</span>
                <small class="text-muted">{{ $program['date'] }}</small>
            </div>
        </div>
    @endforeach
</div>
@endsection