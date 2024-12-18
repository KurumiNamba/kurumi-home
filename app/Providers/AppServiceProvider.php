<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // asset()でURLを呼び出している個所でHTTPSでアクセスするようにする
         if (config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
    }
}
