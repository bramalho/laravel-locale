<?php

namespace BRamalho\LaravelLocale;

use Illuminate\Support\ServiceProvider;

class LaravelLocaleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    public function register()
    {

    }
}
