<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TictacstationController;
use App\Http\Controllers\TictactivityController;
use App\Http\Controllers\TictalkController;
use App\Http\Middleware\RedirectToHomeIfNotAuth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],

], function () {
    Route::get('/', function () {
        $meta = [
            'en' => [
                'title' => 'TicTacLand | Your Ultimate Crunchy Snack Destination',
                'description' => 'More than just a snack. Join the fun at TicTacLand! Explore our bold flavors, join exciting TicTactivity, and get your daily crunch fix of Tic Tac Pilus.',
            ],
            'id' => [
                'title' => 'Jelajahi Dunia Seru TicTacLand | Pilus TicTac Dua Kelinci',
                'description' => 'Bikin hari-harimu makin kriuk di TicTacLand! Pusat informasi snack pilus favorit, event TicTactivity, hingga update TicTalks yang seru. Masuk sekarang!',
            ],
        ];
        
        $locale = LaravelLocalization::getCurrentLocale();

        seo()
            ->title($meta[$locale]['title'], template: false)
            ->description($meta[$locale]['description']);

        return view('pages.welcome');
    })->name('home');

    Route::group([
        'prefix' => 'tictalks',
        'as' => 'tictalks.',
    ], function () {
        Route::livewire('/', 'pages::tictalks')
            ->name('index');

        Route::get('/{article}', [TictalkController::class, 'show'])
            ->name('show');
    });

    Route::livewire('/gameon', 'pages::gameon')
        ->middleware(RedirectToHomeIfNotAuth::class)
        ->name('gameon');

    Route::get('/tictacstation', TictacstationController::class)
        ->name('tictacstation');

    Route::group([
        'prefix' => 'tictactivity',
        'as' => 'tictactivity.',
    ], function () {
        Route::livewire('/', 'pages::tictactivity')
            ->name('index');

        Route::get('/{article}', [TictactivityController::class, 'show'])
            ->name('show');
    });

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
