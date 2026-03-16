<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

if (! function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name', 'TicTacLand');
    }
}


if (!function_exists('get_alternate_lang_properties')){
    /**
     * Get the alternate language properties for the current page.
     *
     * @return array
     */
    function get_alternate_lang_properties(){

        $alternatePageUrl = [];

        $supportedLocales = LaravelLocalization::getSupportedLocales();
        $currentLocale = LaravelLocalization::getCurrentLocale();

        foreach ($supportedLocales as $localeCode => $properties) {
            if ($localeCode !== $currentLocale) {
                $alternatePageUrl[] = [
                    'href' => LaravelLocalization::getLocalizedURL($localeCode, null, [], true),
                    'native' => $properties['native'],
                    'code' => $localeCode,
                    'name' => $properties['name']
                ];
            }
        }

        return $alternatePageUrl;
    }
}

if (!function_exists('active_class')) {

    /**
     * Get the active class if the condition is not falsy.
     *
     * @param  $condition
     * @param  string  $activeClass
     * @param  string  $inactiveClass
     * @return string
     */
    function active_class($condition, $activeClass = 'active', $inactiveClass = '')
    {
        return $condition ? $activeClass : $inactiveClass;
    }
}

if (! function_exists('html_lang')) {
    /**
     * Access the html_lang helper.
     */
    function html_lang()
    {
        return str_replace('_', '-', app()->getLocale());
    }
}
