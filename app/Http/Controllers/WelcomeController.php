<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return inertia('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }
}
