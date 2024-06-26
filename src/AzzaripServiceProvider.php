<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\Commands\GenerateSitemap;
use Azzarip\Utilities\CookieConsent\ConsentManager;
use Azzarip\Utilities\Filament\Widgets\AdminButton;
use Azzarip\Utilities\Theme\Theme;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
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
        Livewire::component('azzarip.utilities.filament.widgets.admin-button', AdminButton::class);
        EncryptCookies::except('cookie_consent');
        Blade::component('theme', Theme::class);
    }

    public function registeringPackage(): void
    {
        Config::set('fortify.views', false);
        Config::set('app-modules.modules_namespace', 'Domains');
        Config::set('app-modules.modules_directory', 'domains');
    }

    protected function getCommands(): array
    {
        return [
            GenerateSitemap::class,
        ];
    }
}
