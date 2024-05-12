<?php

namespace Azzarip\Utilities\Theme;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Theme extends Component
{
    public function render(): View|Closure|string
    {
        $domain = request()->getHost();

        $key = array_search($domain, config('domains'));

        return view('components.sites.'.$key);
    }
}
