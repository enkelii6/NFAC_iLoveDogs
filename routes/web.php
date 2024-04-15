<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/chat', function () {
    return view('maxai', [
        'response' => ''
    ]);
})->name('maxai');
Route::post('/chat', [ChatController::class, 'getGPTresponse'])->name('gptrequest');

Route::get('/game', function () {
    return view('index');
})->name('game');


// Make!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
Route::get('/contest', [ContestController::class, 'getBest'])->name('catalogue'); 

Route::get('/play', [ContestController::class, 'getRandom'])->name('play');
