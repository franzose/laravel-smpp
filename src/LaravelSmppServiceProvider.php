<?php

namespace LaravelSmpp;

use Illuminate\Support\ServiceProvider;

class LaravelSmppServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot service provider.
     *
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'laravel-smpp');
        $this->publishes([
            __DIR__ . '/../config/laravel-smpp.php' => config_path('laravel-smpp.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SmppServiceInterface::class, SmppService::class);
    }
}