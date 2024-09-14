<?php

if (! function_exists('image')) {
    function image($string)
    {
        return url('storage/images/'.ltrim($string, '/'));
    }
}
