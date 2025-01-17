<?php

use App\Http\Middleware\SecureHeaders;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectUsersTo(fn(Request $request) => route('admin.panel'));
        $middleware->redirectGuestsTo(fn(Request $request) => route('admin.login'));
        $middleware->append(SecureHeaders::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
