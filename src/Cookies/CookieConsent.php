<?php

namespace Azzarip\Utilities\Cookies;

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
            if($cookie['version'] == self::VERSION){
                $this->setCookie(json_decode($cookie['consent']));
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
        $this->setCookie(($this->cookieValue));
        $this->show = false;
        $this->dispatch('cookie_consented');
    }

    private function setCookie($content)
    {
        Cookie::queue('cookie_consent', json_encode([
            'timestamp' => now(),
            'consent' => $content,
            'version' => '1.0',
        ]), 365*24*60, null, null, false, false);
    }
}
