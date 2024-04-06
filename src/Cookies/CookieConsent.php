<?php

namespace Azzarip\Utilities\Cookies;

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class CookieConsent extends Component
{
    public $cookieCategories = [
        'ad_storage', 'ad_user_data', 'ad_personalization', 'analytics_storage', 'optional'
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
            $this->skipRender();
            return;
        }
        $this->selected = $this->cookieCategories;

    }
    public function render()
    {
        return view('cookie-consent::cookie-consent');
    }

    private function setConsent()
    {
        $value = array_merge(['essentials' => 'granted'], $this->cookieValue);
        Cookie::queue('cookie_consent', json_encode($value), 365*24*60, null, null, false, false);
        $this->show = false;
        $this->dispatch('cookie_consented');
    }
}
