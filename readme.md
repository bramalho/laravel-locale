# Laravel Locale Package

[![Latest Stable Version](https://poser.pugx.org/bramalho/laravel-locale/v/stable)](https://packagist.org/packages/bramalho/laravel-locale)
[![Total Downloads](https://poser.pugx.org/bramalho/laravel-locale/downloads)](https://packagist.org/packages/bramalho/laravel-locale)
[![License](https://poser.pugx.org/bramalho/laravel-locale/license)](https://packagist.org/packages/bramalho/laravel-locale)

Laravel Locale is a package that provide locale switcher for you application.

## Installation
Install the package
```sh
composer require bramalho/laravel-locale
```

Add the service provider in `config/app.php`

```php
BRamalho\LaravelLocale\LaravelLocaleServiceProvider::class,
```

Publish the configs
```sh
php artisan vendor:publish --provider 'BRamalho\LaravelLocale\LaravelLocaleServiceProvider'
```

Register the Middleware in `app\Http\Kernel.php`
```php
<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Bramalho\LaravelLocale\Http\Middleware\Locale;

class Kernel extends HttpKernel
{
    // ...

    protected $middleware = [
        \Illuminate\Session\Middleware\StartSession::class,
        Locale::class
    ];
}
```

## Usage

### Something

## License
The **Laravel Locale** is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
