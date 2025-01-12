<?php

namespace Azzarip\Utilities\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ClearLogCommand extends Command 
{

protected $signature = 'log:clear';

protected $description = 'Clear Laravel log';

public function handle(){
    exec('echo "" > ' . storage_path('logs/laravel.log'));
    $this->info('Logs have been cleared');
    return self::SUCCESS;
}
}