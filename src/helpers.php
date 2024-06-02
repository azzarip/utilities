<?php

use Azzarip\Utilities\CookieConsent\CookieConsent;
use Illuminate\Support\Arr;

if (! function_exists('durl')) {
    function durl($string, $domainKey = null, $data = [])
    {

        if (empty($domainKey)) {
            $domainKey = request()->get('domainKey');
        } else {

            if (empty(config('domains.'.$domainKey))) {
                throw new \Exception('Wrong domain in durl.');
            }

            $cookieConsent = CookieConsent::get();
            if ($cookieConsent) {
                $data['cc'] = $cookieConsent->toUrl();
            }
        }

        $url = config('domains.'.$domainKey.'.url');

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
        return url('storage/images/'.ltrim($string, '/'));
    }
}

if (! function_exists('site')) {
    function site($string = null)
    {
        $key = request()->get('domainKey');

        if (empty($key)) {
            return [];
        }

        $config = config('domains.'.$key);
        $config['key'] = $key;

        if (empty($string)) {
            return $config;
        }

        return array_key_exists($string, $config) ? $config[$string] : [];
    }
}
