<?php

namespace Azzarip\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Process;

class DeployController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        Artisan::call('down');
        try {
        Process::run('git pull');
        Process::run('composer install --optimize-autoloader --no-dev');
        Artisan::call('sitemap:generate');
    } finally {
        Artisan::call('up');
        Process::run('npm run build');
        }
    }
}
