<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\Cookies\CookieConsent;
use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cookie\Middleware\EncryptCookies;

class AzzaripServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../lang/cookieConsent', 'cookieConsent');
        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'Azzarip');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        Livewire::component('cookie-consent', CookieConsent::class);
        EncryptCookies::except('cookie_consent');

    }
}