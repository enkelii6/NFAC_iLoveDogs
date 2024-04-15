@extends('layouts.main')
    @section('content')
    <header>
        <a href="{{ route('home') }}" class="logo">iLoveDogs</a>
        <ul class="navlist">
            <li><a href="{{ route('home') }}" style="border-bottom: 2px solid white">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('catalogue') }}">Contest</a></li>
            <li><a href="{{ route('maxai') }}">MaxAI</a></li>
            <li><a href="{{ route('game') }}">BONUS</a></li>
        </ul>
        <div class='bx bx-menu' id="menu-icon"></div>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h5>People's best friend!</h5>
            <h4>Loved by everyone!</h4>
            <h1>DOGS</h1>
            <p>Stuck in people's heart all over the world!! <br> Who doesn't love these <b>gorgeous pets</b>?</p>
            <a href="{{ route('catalogue') }}">View Contest</a>
            <a href="{{ route('maxai') }}">MaxAI</a>
        </div>

        <div class="hero-img">
            <img src="../imgs/5a2217853ed5b2.3924497015121836852574.png">
        </div>
    </section>

    <div class="icons">
        <a href="https://www.instagram.com/enkelii6/"><i class="ri-instagram-line"></i></a> 
        <a href="https://github.com/enkelii6"><i class="ri-github-fill"></i></a>
        <a href="https://www.linkedin.com/in/gleb-kukartsev-07687a2ab/"><i class="ri-linkedin-box-fill"></i></a>
        <a href="http://telegram.me/lilsupee"><i class="ri-telegram-fill"></i></a>
    </div>
    @endsection
