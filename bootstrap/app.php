<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsArtisan;
use App\Http\Middleware\IsPending;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['admin' => IsAdmin::class, 
                            'artisan' => IsArtisan::class,
                            'pending' => IsPending::class,]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
