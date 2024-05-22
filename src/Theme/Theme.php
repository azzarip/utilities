<?php

namespace Azzarip\Utilities\Theme;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Theme extends Component
{
    public function render(): View|Closure|string
    {
        $key = request()->get('domainKey');

        return view('themes.'.$key);
    }
}
