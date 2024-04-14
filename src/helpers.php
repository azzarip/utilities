<?php

if (!function_exists('durl')) {
    function durl($string, $domain = null)
    {
        if(empty($domain)) {
            return url($string);
        }

        if(empty(config('domains.' . $domain)))
        {
            throw new \Exception("Wrong domain in durl.");
        }

        $url = config('domains.' . $domain) . '/' . ltrim($string, '/');
        if(request()->isSecure()) {
            return 'https://' . $url;
        }
            return 'http://' . $url;
    }
}
