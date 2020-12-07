<?php

namespace QuocDoanh\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('QuocDoanh\Calculator\CalculatorController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/quocdoanh/calculator'),
        ]);
    }
}
