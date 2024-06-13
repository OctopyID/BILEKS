<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Vanderlee\Syllable\Syllable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register() : void
    {
        Syllable::setCacheDir(storage_path(
            'framework/cache'
        ));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot() : void
    {
        //
    }
}
