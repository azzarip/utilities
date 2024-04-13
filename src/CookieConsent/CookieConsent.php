<?php

namespace Azzarip\Utilities\CookieConsent;

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class CookieConsent extends Component
{
    const VERSION = '1.0';
    public $cookieCategories = [
        'optional', 'analytics', 'marketing'
    ];
    private $cookieValue = [];
    public $show = true;
    public $selected = [];
    public function acceptAll(){
        $this->cookieValue = array_fill_keys($this->cookieCategories, 'granted');
        $this->setConsent();
    }
    public function acceptCustomized(){
        $this->cookieValue =  array_fill_keys($this->selected, 'granted');
        $this->setConsent();
    }
    public function acceptEssentials(){
        $this->setConsent();
    }

    public function boot()
    {
        if(Cookie::has('cookie_consent')) {
            $cookie = Cookie::get('cookie_consent');
            $cookie = json_decode($cookie, true);

            if(($cookie['version'] ?? null) == self::VERSION){
                $this->setCookie($cookie);
                $this->skipRender();
            }
            return;
        }
        $this->selected = $this->cookieCategories;
    }

    public function render()
    {
        return view('Azzarip::cookie-consent');
    }

    private function setConsent()
    {
        $cookie = [
            'timestamp' => now(),
            'consent' => $this->cookieValue,
            'version' => self::VERSION,
        ];
        $this->setCookie($cookie);
        $this->show = false;
        $this->dispatch('cookie_consented');
    }

    private function setCookie($content)
    {
        Cookie::queue('cookie_consent', json_encode($content), 365*24*60, null, null, false, false);
    }
}
