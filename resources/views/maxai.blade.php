@extends('layouts.main')
    @section('content')
    <header>
        <a href="{{ route('home') }}" class="logo">iLoveDogs</a>
        <ul class="navlist">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('catalogue') }}">Contest</a></li>
            <li><a href="{{ route('maxai') }}" style="border-bottom: 2px solid white">MaxAI</a></li>
            <li><a href="{{ route('game') }}">BONUS</a></li>
        </ul>
        <div class='bx bx-menu' id="menu-icon"></div>
    </header>
    <section class="hero">
        <div class="hero-text">
            <h4>Happy to demonstrate you</h4>
            <h1>MaxAI</h1>
            <p>Didn't you want to understand your pet? <br> Don't be shy, <b>ask a question!</b></p>
        <form method="post" action="{{ route('gptrequest') }}">
            @csrf
            <input class="qform" type="text" name="question" placeholder="What do you want to ask?">
            <input class="qsubmit" type="submit" value="Ask">
        </form>
        </div>
        <div class="hero-img">
            <img src="/imgs/kisspng-dog-pet-puppy-cat-dog-5a7525d302cf50.4332442915176268350115.png" style="">
            @if($response)
            <div class="response-box">
                {{ $response }}
            </div>
            @endif
        </div>
    </section>
    @endsection