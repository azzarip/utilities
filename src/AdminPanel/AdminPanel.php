<?php

namespace Azzarip\Utilities\AdminPanel;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class AdminPanel
{
    public static function items(): array
    {
        return Cache::remember('admin-panel', now()->addDay(), function () {
            return self::getItems();
        });
    }

    protected static function getItems(): array
    {
        return [];
        $directory = resource_path('views/vendor/admin-panel');
        $files = File::files($directory);

        $routes = Collection::make($files)
            ->map(fn ($file) => str_replace('.blade.php', '', $file->getFilename()))
            ->filter(fn ($file) => $file != 'main');
        $menu = $routes->map( fn($item) => ucwords(str_replace('-', ' ', $item)));
        return array_combine($routes->toArray(), $menu->toArray());
    }



}
