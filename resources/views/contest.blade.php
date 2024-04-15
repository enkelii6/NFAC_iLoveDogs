@extends('layouts.main')
    @section('content')
    <header>
        <a href="{{ route('home') }}" class="logo">iLoveDogs</a>
        <ul class="navlist">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('catalogue') }}" style="border-bottom: 2px solid white">Contest</a></li>
            <li><a href="{{ route('maxai') }}">MaxAI</a></li>
            <li><a href="{{ route('game') }}">BONUS</a></li>
        </ul>
        <div class='bx bx-menu' id="menu-icon"></div>
    </header>
    <section class="hero">
        <div class="hero-text">
            <h4>Hello, dear Visitor!<br>We are happy to greet you on our</h4>
            <h1>CONTEST!</h1>
            <a href="{{ route('play') }}">Tap to play!</a>
        </div>
        <div class="winner">
                <img src="{{ $first }}">
                <i class='bx bxs-medal' style="color: gold"></i>
                <div class="overlay">Score: {{ $firstscore }}</div>
                <img src="{{ $second }}">
                <i class='bx bxs-medal' style="color: silver"></i>
                <div class="overlay">Score: {{ $secondscore }}</div>
                <img src="{{ $third }}">
                <i class='bx bxs-medal' style="color: #BF5100" ></i>
                <div class="overlay">Score: {{ $thirdscore }}</div>
        </div>
    </section>
    @endsection