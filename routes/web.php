<?php

use Illuminate\Support\Facades\Route;

Route::view('/privacy-policy', 'Azzarip::privacy')->name('privacy-policy');
Route::view('/cookie-policy', 'Azzarip::cookie')->name('cookie-policy');