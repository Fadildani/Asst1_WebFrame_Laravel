@extends('layout')

@section('title', 'Page Not Found')

@section('content')

<!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Russo+One&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/NotFound_style.css') }}">
    <div class="content">
      <h1>404</h1>
      <h2>PAGE NOT FOUND</h2>
      <p>
        The page you are looking for was moved, removed, renamed, or might never
        existed.
      </p>
      <div class="action">
        <a href="{{ route('home') }}">
          <button>BACK</button>
        </a>
        <a href="{{ route('contact') }}">
          <button>CONTACT US</button>
        </a>
      </div>
      <img src="{{ asset('images/cat.gif') }}">
    </div>
@endsection