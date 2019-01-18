<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class LangDetect extends Middleware
{
    public function handle($request, \Closure $next)
    {
        $url = explode('.', parse_url($request->url(), PHP_URL_HOST));
        $subDomain = $url[0];

        $languages = ['en', 'tw'];

        if (in_array($subDomain, $languages)) {
            \App::setLocale($subDomain);
        }

        return $next($request);
    }
}
