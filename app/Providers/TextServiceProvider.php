<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TextServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', '\App\Http\Composers\textComposer');

    }
}
