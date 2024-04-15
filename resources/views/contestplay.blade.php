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
            <a href="{{ route('play') }}?id={{ $firstid }}">
                <img class="contestpic" src="{{ $first }}">
            </a>
            <a href="{{ route('play') }}?id={{ $secondid }}">
                <img class="contestpic" src="{{ $second }}">
            </a>
            <div class="contest-text">
                Which one do you find <b>the cutest?</b>
            </div>
    </section>
    
    @endsection
