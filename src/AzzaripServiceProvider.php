<?php

namespace Azzarip\Utilities;

use Livewire\Livewire;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Azzarip\Utilities\Filament\Widgets\AdminButton;
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
        Blade::directive('image', function ($expression) {
            return "<?php echo image($expression); ?>";
        });
    }

    protected function getPath()
    {
        return base_path() . '/vendor/azzarip/utilities/resources';
    }
}
