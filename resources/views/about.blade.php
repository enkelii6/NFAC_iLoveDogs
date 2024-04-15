@extends('layouts.main')
    @section('content')
    <header>
        <a href="{{ route('home') }}" class="logo">iLoveDogs</a>
        <ul class="navlist">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}" style="border-bottom: 2px solid white">About</a></li>
            <li><a href="{{ route('catalogue') }}">Contest</a></li>
            <li><a href="{{ route('maxai') }}">MaxAI</a></li>
            <li><a href="{{ route('game') }}">BONUS</a></li>
        </ul>
        <div class='bx bx-menu' id="menu-icon"></div>
    </header>
    <section class="hero">
        <div class="hero-text">
            <br>
            <h1>Personal</h1>
            <p>My name is Gleb and now I'm 17 years old. I don't have a lot of experience in programming, but can create base HTML5/CSS3 with JS front-end page. And I am better back-ender anyways. My links are on the left side of the page!</p>
        </div>
        <div class="hero-img">
            <img src="../imgs/Screenshot 2024-04-11 at 10.37.26.png">
            <img src="../imgs/Screenshot 2024-04-11 at 10.40.53.png">
        </div>
        <div class="icons">
        <a href="https://www.instagram.com/enkelii6/"><i class="ri-instagram-line"></i></a> 
        <a href="https://github.com/enkelii6"><i class="ri-github-fill"></i></a>
        <a href="https://www.linkedin.com/in/gleb-kukartsev-07687a2ab/"><i class="ri-linkedin-box-fill"></i></a>
        <a href="http://telegram.me/lilsupee"><i class="ri-telegram-fill"></i></a>
    </div>
    </section>
    @endsection