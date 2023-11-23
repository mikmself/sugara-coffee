<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }
    public function boot(): void
    {
        view()->composer('userview.article', function ($view) {
            $view->with('createSlug', new \App\Helpers\SlugHelper());
        });
    }
}
