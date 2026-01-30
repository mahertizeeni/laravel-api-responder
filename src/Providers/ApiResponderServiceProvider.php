<?php

namespace Maher\ApiResponder\Providers;

use Illuminate\Support\ServiceProvider;
use Maher\ApiResponder\ApiResponder;
use Maher\ApiResponder\Contracts\ResponderInterface;

class ApiResponderServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ResponderInterface::class, function () {
            return new ApiResponder();
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/api-responder.php' => config_path('api-responder.php'),
        ], 'config');
    }
}
