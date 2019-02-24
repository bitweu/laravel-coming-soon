<?php

namespace Bitweu\ComingSoon;

use Illuminate\Support\ServiceProvider;

class ComingSoonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Load package assets
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'coming-soon');

        // Load helpers
        $this->loadHelpers();

        if ($this->app->runningInConsole()) {
            // Publishing the config
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('coming-soon.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/coming-soon'),
            ], 'views');

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/coming-soon'),
            ], 'assets');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'coming-soon');

        $this->app->singleton('coming-soon', function () {
            return new ComingSoon(config('coming-soon.title'), config('coming-soon.intro'), config('coming-soon.background'));
        });
    }

    /**
     * Register package helpers.
     */
    protected function loadHelpers()
    {
        if (file_exists($file = __DIR__.'/helpers.php')) {
            require_once $file;
        }
    }
}
