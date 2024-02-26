<?php
 
namespace Azzarip\Utilities\Dropbox;

use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Spatie\FlysystemDropbox\DropboxDriver;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Contracts\Foundation\Application;
use Azzarip\Utilities\Dropbox\DropboxAccessToken;

 
class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Storage::extend('dropbox', function (Application $app, array $config) {
            $config['authorization_token'] = DropboxAccessToken::get();
            $adapter = new DropboxAdapter(new DropboxClient(
                $config['authorization_token']
            ));
            
            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });
    }
}

