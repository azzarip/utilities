<?php

use Azzarip\Utilities\DUrl;
use Illuminate\Support\Arr;

if (! function_exists('durl')) {
    function durl($string, $domainKey, $data = [])
    {
        return new DUrl($string, $domainKey, $data);
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
