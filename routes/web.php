<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TictacstationController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localize',
        'localizationRedirect',
        'localeSessionRedirect',
        'localeCookieRedirect',
    ],
], function () {
    Route::get('/', function () {
        return view('pages.welcome');
    })->name('home');

    Route::get('/tictalks', function () {
        return view('pages.tictalks');
    })->name('tictalks');

    Route::get('/gameon', function () {
        return view('pages.gameon');
    })->name('gameon');

    Route::get('/tictacstation', TictacstationController::class)
        ->name('tictacstation');

    Route::livewire('/tictactivity', 'pages::tictactivity')
        ->name('tictactivity');
});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
Route::group(
    ['prefix' => 'login', 'as' => 'login.', 'middleware' => ['guest', 'throttle']], function () {
        Route::get('/auth/{provider}', [LoginController::class, 'redirectToProvider'])
            ->where('provider', 'facebook|google|apple')
            ->name('auth');
        Route::get('/auth/{provider}/callback', [LoginController::class, 'handleProviderCallback'])
            ->where('provider', 'facebook|google|apple')
            ->name('auth.redirect');
    }
);

Route::post('/logout', LogoutController::class)
    ->name('logout');
