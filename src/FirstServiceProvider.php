<?php

namespace Sahil\First;

use Illuminate\Support\ServiceProvider;

class FirstServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__."/routes/routes.php";
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
