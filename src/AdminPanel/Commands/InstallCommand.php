<?php

namespace Azzarip\Utilities\AdminPanel\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    public $signature = 'admin-panel:install';

    public $description = 'Install admin panels';

    public function handle(): int
    {
        $destination = resource_path('views/vendor');
        if (! File::isDirectory($destination)) {
            File::makeDirectory($destination, 0755, true, true);
        }
        $destination .= '/admin-panel';
        if (! File::isDirectory($destination)) {
            File::makeDirectory($destination, 0755, true, true);
        }

        Artisan::call('admin-panel:make home');
        $this->info('Main Panel created successfully.');

        return self::SUCCESS;
    }
}
