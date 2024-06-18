<?php
namespace Harshpawar\LaravelPassport;

use Illuminate\Support\ServiceProvider;

class PassportAuthServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings or services
    }

    public function boot()
    {
        // Publish routes
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        $this->publishes([
            __DIR__ . '/Http/Controllers' => app_path('Http/Controllers'),
        ], 'controllers');
    }
}
