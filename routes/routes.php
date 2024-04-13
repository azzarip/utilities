<?php

use Azzarip\Utilities\AdminPanel\AdminPanel;
use Illuminate\Support\Facades\Route;
use Azzarip\Utilities\Http\Controllers\DeployController;
use Azzarip\Utilities\CookieConsent\Middleware\AuthenticateSession;

Route::view('/privacy-policy', 'Azzarip::privacy')->name('privacy-policy');
Route::view('/cookie-policy', 'Azzarip::cookie')->name('cookie-policy');
//Route::post('/deploy', DeployController::class);

Route::domain('admin.' . config('domains.base'))
    ->middleware(['web', 'auth', AuthenticateSession::class])
    ->group(function () {
        Route::view('/', 'azzarip::home')->name('admin.dashboard');
        Route::get('/{panel}', function (string $panel) {
            return view('azzarip::' . $panel);
        })->whereIn('panel', array_keys(AdminPanel::items()))
        ->name('admin');
    });
