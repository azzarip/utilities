<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\Address\AddressManager;
use Azzarip\Utilities\Address\AddressRouter;
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
            ->hasCommands($this->getCommands());
    }

    public function bootingPackage(): void
    {
        Livewire::component('cookie-consent', ConsentManager::class);
        Livewire::component('address-manager', AddressManager::class);
        Livewire::component('azzarip.utilities.filament.widgets.admin-button', AdminButton::class);
        EncryptCookies::except('cookie_consent');
        Blade::component('theme', Theme::class);
        Blade::component('address-router', AddressRouter::class);
        Blade::anonymousComponentPath(
            $this->getPath() . '/views/forms', 'forms');
        Blade::anonymousComponentPath(
                $this->getPath() . '/views/modals', 'modals');

        $this->loadTranslationsFrom($this->getPath() . '/lang', 'a');
        $this->loadJsonTranslationsFrom($this->getPath() . '/lang');

        $this->loadViewsFrom($this->getPath() . '/views/azzarip', 'azzarip');
    }

    public function registeringPackage(): void
    {
        Config::set('app-modules.modules_namespace', 'Domains');
        Config::set('app-modules.modules_directory', 'domains');
    }

    public function packageBooted(): void
    {

    }

    protected function getCommands(): array
    {
        return [
            GenerateSitemap::class,
        ];
    }

    protected function getPath()
    {
        return base_path() . '/vendor/azzarip/utilities/resources';
    }
}
