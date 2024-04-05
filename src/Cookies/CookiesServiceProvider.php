<?php

namespace Azzarip\Utilities\Cookies;

use Whitecube\LaravelCookieConsent\Cookie;
use Whitecube\LaravelCookieConsent\Consent;
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
            $category->cookie(function(Cookie $cookie) use ($category) {
                $cookie->name($category->key())->duration(2 * 365 * 24 * 60);

                $cookie->accepted(function (Consent $consent) use($category) {
                    $consent->script('<script>
                    window.dataLayer.cookie_consent = Object.assign({}, window.dataLayer.cookie_consent, { \''. $category->key() . '\': \'granted\' });
                    </script>');
                });

            });
        }
    }
}