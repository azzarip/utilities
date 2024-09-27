<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\Filament\Widgets\AdminButton;
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
            ->hasTranslations()
            ->hasRoute('routes');

    }

    public function bootingPackage(): void
    {
        Livewire::component('azzarip.utilities.filament.widgets.admin-button', AdminButton::class);
    }

    protected function getPath()
    {
        return base_path() . '/vendor/azzarip/utilities/resources';
    }
}
