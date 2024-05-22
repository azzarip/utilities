<?php

namespace Azzarip\AdminPanel\Tests;

use App\Http\User;
use Azzarip\Utilities\AzzaripServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Laravel\Fortify\FortifyServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->setUpDatabase(app());

        $this->actingAs($this->user);

        Artisan::call('admin-panel:install');
        $this->withoutVite();
    }

    protected function getPackageProviders($app)
    {
        return [
            LivewireServiceProvider::class,
            AzzaripServiceProvider::class,
            FortifyServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        config()->set('domains.base', 'localhost');
    }

    protected function setUpDatabase($app)
    {
        $schema = $app['db']->connection()->getSchemaBuilder();

        $schema->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->useCurrent();
        });

        $this->user = User::create(['name' => 'Test User', 'email' => 'test@user.com', 'email_verified_at' => now()]);
    }
}
