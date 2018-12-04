<?php

namespace Idecardo\NovaTelescope;

use Illuminate\Support\ServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-telescope');

        $this->publishes([
            __DIR__.'/../config/nova-telescope.php' => config_path('nova-telescope.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/nova-telescope.php', 'nova-telescope'
        );
    }
}
