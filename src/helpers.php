<?php

use Azzarip\Utilities\CookieConsent\CookieConsent;
use Illuminate\Support\Arr;

if (! function_exists('durl')) {
    function durl($string, $domainKey = null, $data = [])
    {

        if (empty($domainKey)) {
            $domain = request()->getHost();
        } else {
            if (empty(config('domains.'.$domainKey))) {
                throw new \Exception('Wrong domain in durl.');
            }

            $domain = config('domains.'.$domainKey);

            $cookieConsent = CookieConsent::get();
            if ($cookieConsent) {
                $data['cc'] = $cookieConsent->toUrl();
            }
        }

        $url = $domain;

        $path = ltrim($string, '/');

        if (! empty($path)) {
            $url .= '/'.$path;
        }

        if (! empty($data)) {
            $url .= '?'.Arr::query($data);
        }

        if (request()->isSecure()) {
            return 'https://'.$url;
        }

        return 'http://'.$url;
    }
}

if (! function_exists('image')) {
    function image($string)
    {
        return durl('storage/images/'.ltrim($string, '/'));
    }
}

if (! function_exists('site')) {
    function site($string)
    {
        $key = request()->get('domainKey');

        if(empty($key)) return;

        if(empty($string)) {
            return config('sites. ' . $key);
        }

        return config('sites. ' . $key . '.' . $string);
    }
}
