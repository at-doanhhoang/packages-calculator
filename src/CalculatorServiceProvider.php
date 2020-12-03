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
        include __DIR__.'/routes.php';
    }
}
