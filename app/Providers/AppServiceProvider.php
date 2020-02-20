<?php

namespace App\Providers;


use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        /*if (env('APP_ENV') !== 'local') {
             $this->app['request']->server->set('HTTPS', true);

        }*/

        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        } else if ($this->app->environment('development')) {
            URL::forceScheme('http');
        }

        // if (!app()->runningInConsole()) {
        //     // Your code...
        //     Schema::defaultStringLength(191);
        // }
    }
}
