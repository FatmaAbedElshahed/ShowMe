<?php

namespace FatmaAbedElshahed\ShowMe;

use Illuminate\Support\ServiceProvider;

class ShowMeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
           $this->loadRoutesFrom(__DIR__.'/show.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
