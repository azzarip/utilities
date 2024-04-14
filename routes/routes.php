<?php

use Azzarip\Utilities\AdminPanel\AdminPanel;
use Illuminate\Support\Facades\Route;
use Azzarip\Utilities\Http\Controllers\DeployController;
use Azzarip\Utilities\CookieConsent\Middleware\AuthenticateSession;

Route::view('/privacy-policy', 'azzarip::privacy')->name('privacy-policy');
Route::view('/cookie-policy', 'azzarip::cookie')->name('cookie-policy');
Route::post('/deploy', DeployController::class);

Route::domain('admin.' . config('domains.base'))
    ->middleware(['web', 'auth', 'verified', AuthenticateSession::class])
    ->group(function () {
        Route::view('/', 'vendor.admin-panel.home')->name('admin.dashboard');
    If( ! empty(AdminPanel::items())){
        Route::get('/{panel}', function (string $panel) {
            return view('vendor.admin-panel.' . $panel);
        })->whereIn('panel', array_keys(AdminPanel::items()))
        ->name('admin');
    }
    });
