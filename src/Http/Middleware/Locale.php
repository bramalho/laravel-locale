<?php

namespace BRamalho\LaravelLocale\Http\Middleware;

use Closure;

class Locale
{
    public function handle($request, Closure $next)
    {
        if(!session('locale')) {
            session()->put('locale', config('app.locale'));
        }

        app()->setLocale(session('locale'));

        return $next($request);
    }
}
