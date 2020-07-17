<?php

namespace Positus\Laravel;

use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/positus.php' => config_path('positus.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/positus.php', 'positus');

        $this->app->singleton(Client::class, function () {
            return new Client();
        });
    }
}
