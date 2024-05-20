<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

it('creates a sitemap in public folder', function () {
    config()->set('domains.base', 'localhost');
    $filepath = base_path('content');
    File::makeDirectory($filepath, 0755, true, true);

    $filepath .= 'sitemaps';
    File::makeDirectory($filepath, 0755, true, true);

    $content = '<?php return [];';
    file_put_contents($filepath.'base.php', $content);

    File::makeDirectory(public_path('sitemaps'), 0755, true, true);
    Artisan::call('sitemap:generate');
    expect(File::exists(public_path('sitemaps/base.xml')))->toBeTrue();

    // File::deleteDirectory(base_path('content'));
    // File::deleteDirectory(public_path('sitemaps'));
});
