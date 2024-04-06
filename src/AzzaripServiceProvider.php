<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\Cookies\CookieConsent;
use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class AzzaripServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../lang/cookieConsent', 'cookieConsent');
        $this->loadViewsFrom(__DIR__.'/Cookies/', 'cookie-consent');
        Livewire::component('cookie-consent', CookieConsent::class);
    }
}