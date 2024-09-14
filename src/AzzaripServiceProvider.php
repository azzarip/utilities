<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\Address\AddressManager;
use Azzarip\Utilities\Address\AddressRouter;
use Azzarip\Utilities\Filament\Widgets\AdminButton;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AzzaripServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        $package
            ->name('utilities')
            ->hasViews()
            ->hasRoute('routes');

    }

    public function bootingPackage(): void
    {
        Livewire::component('address-manager', AddressManager::class);
        Livewire::component('azzarip.utilities.filament.widgets.admin-button', AdminButton::class);
        Blade::component('address-router', AddressRouter::class);
        Blade::anonymousComponentPath(
            $this->getPath() . '/views/forms', 'forms');
        Blade::anonymousComponentPath(
                $this->getPath() . '/views/modals', 'modals');

        $this->loadTranslationsFrom($this->getPath() . '/lang', 'a');
        $this->loadJsonTranslationsFrom($this->getPath() . '/lang');
    }


    protected function getPath()
    {
        return base_path() . '/vendor/azzarip/utilities/resources';
    }
}
