<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\AdminPanel\Commands;
use Azzarip\Utilities\Commands\GenerateSitemap;
use Azzarip\Utilities\CookieConsent\ConsentManager;
use Azzarip\Utilities\Theme\Theme;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Laravel\Fortify\Fortify;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AzzaripServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('azzarip')
            ->hasConfigFile('domains')
            ->hasConfigFile('utilities')
            ->hasRoute('routes')
            ->hasCommands($this->getCommands())
            ->hasTranslations()
            ->hasViews();
    }

    public function bootingPackage(): void
    {
        Livewire::component('cookie-consent', ConsentManager::class);
        EncryptCookies::except('cookie_consent');
        Blade::component('theme', Theme::class);
    }

    public function registeringPackage(): void
    {
        //Config::set('fortify.domain', env('DOMAIN_ADMIN'));
        Config::set('fortify.views', false);
        //Config::set('fortify.home', 'http://'.env('DOMAIN_ADMIN'));
    }

    protected function getCommands(): array
    {
        return [
            Commands\InstallCommand::class,
            Commands\MakePanelCommand::class,
            Commands\RefreshCommand::class,
            GenerateSitemap::class,
        ];
    }
}
