<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        app()->setLocale(config('app.locale'));

        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }

        return $next($request);
    }
}
