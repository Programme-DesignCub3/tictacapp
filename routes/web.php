<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

Route::get('/tictalks', function () {
    return view('pages.tictalks');
})->name('tictalks');

Route::get('/tictacplay', function () {
    return view('pages.welcome');
})->name('tictacplay');

Route::get('/tictacstation', function () {
    return view('pages.tictacstation');
})->name('tictacstation');

Route::get('/tictactivity', function () {
    return view('pages.tictactivity');
})->name('tictactivity');
