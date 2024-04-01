<?php

namespace Azzarip\Utilities\Cookies;

use Whitecube\LaravelCookieConsent\Cookie;
use Whitecube\LaravelCookieConsent\Facades\Cookies;

class CookiesServiceProvider
{    
    public static function register(): void
    {
        Cookies::essentials();

        Cookies::analytics();

        Cookies::category(key: 'ad_storage');
        Cookies::category(key: 'ad_user_data');
        Cookies::category(key: 'ad_personalization');

        Cookies::optional();

        foreach (Cookies::getCategories() as $key => $category){
            $category->cookie(function(Cookie $cookie) use($category) {
                $cookie->name($category->key())->duration(2 * 365 * 24 * 60);
            });
        }
    }
}