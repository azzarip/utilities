<?php

namespace Azzarip\Utilities;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class AzzaripServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../lang/cookieConsent', 'cookieConsent');
        $this->loadViewsFrom(__DIR__.'/Cookies/', 'cookie-consent');
        Livewire::component('some-component', SomeComponent::class);
    }
}