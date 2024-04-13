<?php

namespace Azzarip\Utilities;

use Azzarip\Utilities\AdminPanel\Commands\MakePanelCommand;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Azzarip\Utilities\AdminPanel\Commands\InstallCommand;

class AzzaripServiceProvider extends PackageServiceProvider
{
    public function registeringPackage(): void
    {
        Fortify::loginView(fn () => view('azzarip::login'));
        Config::set('fortify.domain', 'admin.' . env('DOMAIN_BASE'));
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('azzarip')
            ->hasConfigFile('domains')
            ->hasRoute('routes')
            ->hasCommands([InstallCommand::class, MakePanelCommand::class])
            ->hasTranslations()
            ->hasViews();
        }
}
