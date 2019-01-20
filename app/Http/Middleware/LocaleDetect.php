<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class LocaleDetect extends Middleware
{
    public function handle($request, \Closure $next)
    {
        $url = explode('.', parse_url($request->url(), PHP_URL_HOST));
        $subDomain = $url[0];

        $locales = ['en', 'tw', 'cn'];

        if (in_array($subDomain, $locales)) {
            \App::setLocale($subDomain);
        }

        return $next($request);
    }
}
