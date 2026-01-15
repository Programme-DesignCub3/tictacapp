<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

Route::get('/tictalks', function () {
    return view('pages.tictalks');
})->name('tictalks');

Route::get('/gameon', function () {
    return view('pages.gameon');
})->name('gameon');

Route::get('/tictacstation', function () {
    return view('pages.tictacstation');
})->name('tictacstation');

Route::get('/tictactivity', function () {
    return view('pages.tictactivity');
})->name('tictactivity');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(
    ['prefix' => 'login', 'as' => 'login.', 'middleware' => ['guest', 'throttle']], function () {
        Route::get('/auth/{provider}', [LoginController::class, 'redirectToProvider'])
            ->where('provider', 'facebook|google|apple')
            ->name('auth');
        Route::get('/auth/{provider}/callback', [LoginController::class, 'handleProviderCallback'])
            ->where('provider', 'facebook|google|apple')
            ->name('auth.redirect');
    });
