<?php

use Azzarip\Utilities\Http\Controllers\DeployController;
use Azzarip\Utilities\Http\Middleware\DomainKey;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::view('/privacy-policy', 'azzarip::privacy')->name('privacy-policy');
Route::view('/cookie-policy', 'azzarip::cookie')->name('cookie-policy');
Route::post('/deploy', DeployController::class);

Route::middleware(DomainKey::class)->group(function () {
    Route::get('/sitemap.xml', function () {
        $key = request()->get('domainKey');
        $xml = File::get(storage_path("app/sitemaps/$key.xml"));

        return response($xml, 200)->header('Content-Type', 'application/xml');
    });
});
