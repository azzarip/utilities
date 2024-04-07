<?php

use Illuminate\Support\Facades\Route;
use Azzarip\Utilities\Http\Controllers\DeployController;

Route::view('/privacy-policy', 'Azzarip::privacy')->name('privacy-policy');
Route::view('/cookie-policy', 'Azzarip::cookie')->name('cookie-policy');

Route::post('/deploy', DeployController::class);
