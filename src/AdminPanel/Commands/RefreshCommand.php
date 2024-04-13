<?php

namespace Azzarip\Utilities\AdminPanel\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Azzarip\Utilities\AdminPanel\AdminPanel;

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
