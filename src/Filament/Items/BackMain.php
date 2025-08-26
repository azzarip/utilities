<?php

namespace Azzarip\Utilities\Filament\Items;

use Filament\Navigation\NavigationItem;

class BackMain
{
    public static function make()
    {
        return NavigationItem::make('Back to Main Menu')
            ->url('/')
            ->icon('heroicon-o-arrow-uturn-left')
            ->sort(-9999);
    }
}
