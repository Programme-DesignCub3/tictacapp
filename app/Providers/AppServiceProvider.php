<?php

namespace App\Providers;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use BezhanSalleh\LanguageSwitch\LanguageSwitch;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Traits\LoadsTranslatedCachedRoutes;
use Spatie\Translatable\Facades\Translatable;

class AppServiceProvider extends ServiceProvider
{
    use LoadsTranslatedCachedRoutes;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RouteServiceProvider::loadCachedRoutesUsing(fn () => $this->loadCachedRoutes());

        if ($this->app->runningInConsole()) {
            $this->optimizes(
                optimize: 'route:trans:cache',
                clear: 'route:trans:clear',
                key: 'routes'
            );
        }

        Translatable::fallback(
            fallbackAny: true,
        );

        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['id', 'en']); // also accepts a closure
        });

        TranslatableTabs::configureUsing(function (TranslatableTabs $component) {
            $component
                // locales labels
                ->localesLabels([
                    'id' => __('Indonesia'),
                    'en' => __('English'),
                ])
                // default locales
                ->locales(['id', 'en']);
        });
    }
}
