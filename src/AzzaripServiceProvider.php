<?php

namespace Azzarip\Utilities;

use Livewire\Livewire;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Azzarip\Utilities\CookieConsent\ConsentManager;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Azzarip\Utilities\AdminPanel\Commands\InstallCommand;
use Azzarip\Utilities\AdminPanel\Commands\RefreshCommand;
use Azzarip\Utilities\AdminPanel\Commands\MakePanelCommand;

class AzzaripServiceProvider extends PackageServiceProvider
{
    public function registeringPackage(): void
    {
        Fortify::loginView(fn () => view('azzarip::login'));
        Config::set('fortify.domain', env('DOMAIN_ADMIN'));
        Config::set('fortify.home', 'http://' . env('DOMAIN_ADMIN'));
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('azzarip')
            ->hasConfigFile('domains')
            ->hasRoute('routes')
            ->hasCommands([InstallCommand::class, MakePanelCommand::class, RefreshCommand::class])
            ->hasTranslations()
            ->hasViews();
        }

    public function bootingPackage(): void
    {
        Livewire::component('cookie-consent', ConsentManager::class);
        EncryptCookies::except('cookie_consent');
    }
}
