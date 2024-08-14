<?php

namespace Azzarip\Utilities\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DomainKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $domain = request()->getHost();

        foreach (config('domains') as $key => $value) {
            if ($value['url'] == $domain) {
                $request->attributes->add(['domainKey' => $key]);
                config()->set('seo.site_name', $value['name']);
                config()->set('app.url', durl('/', $key, [], false));
                return $next($request);
            }
        }

        return $next($request);
    }
}
