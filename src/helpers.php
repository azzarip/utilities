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
    function site($string = null)
    {
        $key = request()->get('domainKey');

        if (empty($key)) {
            return;
        }

        $config = array_merge(config('sites.'.$key), ['key' => $key]);

        if (empty($string)) {
            return $config;
        }

        return array_key_exists($string, $config) ? $config[$string] : null;
    }
}
