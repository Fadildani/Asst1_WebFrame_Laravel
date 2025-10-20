@extends('layout')

@section('title', 'Kontak')

@section('content')

<div class="container py-5">
    <h1 class="mb-4 text-black">Contact Us</h1>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label text-black">Your Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-black">Your Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label text-black">Your Message</label>
            <textarea class="form-control" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Send Message</button>
    </form>
</div>
@endsection