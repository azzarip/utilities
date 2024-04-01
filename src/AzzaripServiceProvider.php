<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\Cookies\CookiesServiceProvider;
use Illuminate\Support\ServiceProvider;

class AzzaripServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->booted(function () {
            CookiesServiceProvider::register();
        });
    }
}