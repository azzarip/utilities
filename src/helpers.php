<?php

if (!function_exists('durl')) {
    function durl($string, $domainKey = null)
    {

        if(empty($domainKey)) {
            $domain = request()->getHost();
        } else {
            if(empty(config('domains.' . $domainKey)))
            {
                throw new \Exception("Wrong domain in durl.");
            }
            $domain = config('domains.' . $domainKey);
        }

        $url = $domain . '/' . ltrim($string, '/');
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

