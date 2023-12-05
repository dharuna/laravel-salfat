<?php

namespace Dharuna\LaravelSalfat;

use Illuminate\Support\ServiceProvider;

class LaravelSalfatServiceProvider extends ServiceProvider
{
   public function boot()
{
    $this->publishes([
        __DIR__.'/../config/laravel-salfat.php' => config_path('laravel-salfat.php'),
    ], 'laravel-salfat-config');
}


    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/laravel-salfat.php', 'laravel-salfat'
        );

        $this->app->bind('laravel-salfat', function () {
            return new ApiService();
        });
    }
}
