<?php

namespace Azzarip\Utilities\Filament\Widgets;

use Filament\Widgets\Widget;

class AdminButton extends Widget
{
    public string $path = '/';

    public string $name;

    public string $primary;

    public string $secondary = 'white';

    public string $icon;

    protected static string $view = 'utilities::filament.admin-button';
}
