<?php

namespace Azzarip\Utilities\AdminPanel\Commands;

use Azzarip\Utilities\AdminPanel\AdminPanel;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RefreshCommand extends Command
{
    public $signature = 'admin-panel:refresh';

    public $description = 'Refresh admin panels cache';

    public function handle(): int
    {
        Cache::forget('admin-panel');
        AdminPanel::items();

        return self::SUCCESS;
    }
}
