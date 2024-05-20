<?php

namespace Azzarip\Utilities;

use Livewire\Livewire;
use Laravel\Fortify\Fortify;
use Azzarip\Utilities\Theme\Theme;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Azzarip\Utilities\CookieConsent\ConsentManager;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Azzarip\Utilities\AdminPanel\Commands;
use Azzarip\Utilities\Commands\GenerateSitemap;

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
        Fortify::loginView(fn () => view('azzarip::login'));
        Config::set('fortify.domain', env('DOMAIN_ADMIN'));
        Config::set('fortify.home', 'http://' . env('DOMAIN_ADMIN'));
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
