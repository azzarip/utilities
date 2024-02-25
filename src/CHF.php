<?php

namespace Azzarip\Utilities;

class CHF {

    public $value;
    public string $label;

    public static function chf($chf) {
        return new CHF(round(100*chf));
    }

    public static function int(int $rappe) {
        return new CHF($rappe);
    }

    public function __construct(public int $rappe) {
        $this->value = $rappe / 100;
        $this->label = $this->getLabel();
    }

    public function sum(CHF $that): CHF
    {
        return new CHF($this->rappe + $that->rappe);
    }

    public function __toString(): string
    {
        return $this->getString();
    }

    private function getString(): string
    {
        if ($this->rappe == 0) {
            return '0.-';
        }

        if ($this->rappe % 100 == 0) {
            return $this->value . '.-';
        }
      return number_format($this->value, 2);
    }
    
    private function getLabel(): string
    {
        if ($this->rappe == 0){
            return 'Gratis';
        }
        return 'CHF '. $this->string;
    }
}