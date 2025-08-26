<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\Commands\ClearLogCommand;
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
            ->hasCommand(ClearLogCommand::class)
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
        return base_path().'/vendor/azzarip/utilities/resources';
    }
}
