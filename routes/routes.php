<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Azzarip\Utilities\AdminPanel\AdminPanel;
use Azzarip\Utilities\Http\Middleware\DomainKey;
use Azzarip\Utilities\Http\Controllers\DeployController;
use Azzarip\Utilities\AdminPanel\Middleware\AuthenticateSession;

Route::view('/privacy-policy', 'azzarip::privacy')->name('privacy-policy');
Route::view('/cookie-policy', 'azzarip::cookie')->name('cookie-policy');
Route::post('/deploy', DeployController::class);

Route::group([
    'domain' => config('domains.admin.url'),
    'middleware' => 'web',
], function () {
    Route::get('/login', "Filament\Pages\Auth\Login")->name('admin.login');

    Route::middleware('auth:admin')->group(function () {
        Route::view('/', 'admin-panel.home')->name('admin.dashboard');
        if (! empty(AdminPanel::items())) {
            Route::get('/{panel}', function (string $panel) {
                return view('admin-panel.'.$panel);
            })->whereIn('panel', array_keys(AdminPanel::items()))
                ->name('admin.');
        }
    });
});


Route::middleware(DomainKey::class)->group(function() {
    Route::get('/sitemap.xml', function () {
        $key = request()->get('domainKey');
        $xml = File::get(storage_path("app/sitemaps/$key.xml"));
        return response($xml, 200)->header('Content-Type', 'application/xml');
    });
});
