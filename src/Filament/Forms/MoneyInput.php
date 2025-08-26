<?php

namespace Azzarip\Utilities\Filament\Forms;

use Filament\Forms\Components\TextInput;

class MoneyInput
{
    public static function make(string $name)
    {
        return TextInput::make($name)
            ->required()
            ->numeric()
            ->minValue(0)
            ->inputMode('decimal')
            ->step(0.05)
            ->suffix('CHF');
    }
}
