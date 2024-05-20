<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

it('installs vendor/admin-panel folder if does not exists', function () {
    $destination = resource_path('views/vendor');
    if (File::isDirectory($destination)) {
        File::deleteDirectory($destination);
    }

    $destination .= '/admin-panel';

    Artisan::call('admin-panel:install');

    expect(File::isDirectory($destination))->toBeTrue();
});

it('creates the home blade', function () {
    $file = resource_path('views/vendor/admin-panel/home.blade.php');

    if (File::exists($file)) {
        File::delete($file);
    }

    Artisan::call('admin-panel:install');

    expect(File::exists($file))->toBeTrue();
});

it('creates a new panel blade', function () {
    $file = resource_path('views/vendor/admin-panel/test.blade.php');

    if (File::exists($file)) {
        File::delete($file);
    }

    Artisan::call('admin-panel:make test');

    expect(File::exists($file))->toBeTrue();
    File::delete($file);
});

it('returns error if called twice', function () {
    Artisan::call('admin-panel:make test');
    $response = Artisan::call('admin-panel:make test');

    expect($response)->toBe(1);

    $file = resource_path('views/vendor/admin-panel/test.blade.php');
    File::delete($file);
});
