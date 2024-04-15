<?php

use Illuminate\Support\Arr;
use Azzarip\Utilities\CookieConsent\CookieConsent;

if (!function_exists('durl')) {
    function durl($string, $domainKey = null, $data = [])
    {

        if(empty($domainKey)) {
            $domain = request()->getHost();
        } else {
            if(empty(config('domains.' . $domainKey)))
            {
                throw new \Exception("Wrong domain in durl.");
            }

            $domain = config('domains.' . $domainKey);

            $cookieConsent = CookieConsent::get();
            if($cookieConsent) {
                $data['cc'] = $cookieConsent;
            }
        }

        $url = $domain . '/' . ltrim($string, '/');

        if(!empty($data)){
            $url .= '?' . Arr::query($data);
        }

        if(request()->isSecure()) {
            return 'https://' . $url;
        }
            return 'http://' . $url;
    }
}


if (!function_exists('image')) {
    function image($string)
    {
        return durl('storage/images/' . ltrim($string, '/'));
    }
}

