<?php

namespace Azzarip\Utilities\AdminPanel\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class MakePanelCommand extends Command implements PromptsForMissingInput
{
    public $signature = 'admin-panel:make {name : The name of the panel}';

    public $description = 'Creates an admin panel';

    public function handle(): int
    {
        $name = $this->argument('name');

        $sourcePath = __DIR__.'/../../../stubs/admin-panel.blade.php';
        $destinationPath = resource_path("views/admin-panel/{$name}.blade.php");

        if (File::exists($destinationPath)) {
            $this->error("Panel {$name} already exists.");

            return self::FAILURE;
        }

        File::copy($sourcePath, $destinationPath);
        $this->info("Panel {$name} created successfully.");

        Artisan::call('admin-panel:refresh');

        return self::SUCCESS;
    }

    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'name' => 'What should the panel be named?',
        ];
    }
}
