<?php

if (! function_exists('image')) {
    function image($string)
    {
        return url('/images/'.ltrim($string, '/'));
    }
}
