<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher
{
    public function handle($request, Closure $next)
    {
        // Check if lang parameter is available and if it's a valid language
        if ($request->has('lang') && in_array($request->lang, ['en', 'id'])) {
            // Store the language in session
            Session::put('locale', $request->lang);
            App::setLocale($request->lang);
        } elseif (Session::has('locale')) {
            // If no lang parameter, use session value
            App::setLocale(Session::get('locale'));
        }

        return $next($request);
    }
}
