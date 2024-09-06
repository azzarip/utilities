<?php

namespace Azzarip\Utilities;

use Illuminate\Support\Arr;
use Azzarip\Utilities\CookieConsent\CookieConsent;

class DUrl {

    public function __construct(public string $uri, public string $domainKey = null, public array $data = [])
    {
        if (empty($domainKey)) {
            $this->domainKey = request()->get('domainKey');
        }

        if (empty(config('domains.'.$this->domainKey))) {
            throw new \Exception('Wrong domain in durl.');
        }

    }

    public function url() {

        $url = config("domains.{$this->domainKey}.url");

        $path = ltrim($this->uri, '/');

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

    public function withCookieConsent() {
        $cookieConsent = CookieConsent::get();
        if ($cookieConsent) {
            $this->data['cc'] = $cookieConsent->toUrl();
        }
        return $this;
    }

    public function __toString(): string
    {
        return $this->url();
    }
}
