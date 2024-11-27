<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Mendaftarkan RoleMiddleware dengan alias 'role'
        $middleware->alias([
            'role' => \App\Http\Middleware\RoleMiddleware::class,
            // Anda dapat menambahkan middleware lainnya di sini jika diperlukan
            // Misalnya, middleware untuk 'auth':
            // 'auth' => \App\Http\Middleware\Authenticate::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
