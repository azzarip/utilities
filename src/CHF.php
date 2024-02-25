<?php

namespace Azzarip\Utilities;

class CHF {

    public $value;

    public static function chf($chf) {
        return new CHF(round(100*chf));
    }

    public static function int(int $rappe) {
        return new CHF($rappe);
    }

    public function __construct(public int $rappe) {
        $this->value = $rappe / 100;
    }

    public function sum(CHF $that): CHF
    {
        return new CHF($this->rappe + $that->rappe);
    }

    public function __toString(): string
    {
        return $this->getString();
    }

    
    public function format(): string
    {
        if ($this->rappe == 0) {
            return '0.-';
        }
        
        if ($this->rappe % 100 == 0) {
            return $this->value . '.-';
        }
        return $this->getString();
    }
    
    public function label(): string
    {
        if ($this->rappe == 0){
            return 'Gratis';
        }
        return 'CHF ' . $this->getString();
    }

    private function getString(): string
    {
        return number_format($this->value, 2, '.', '\'');
    }
}