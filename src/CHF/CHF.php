<?php

namespace Azzarip\Utilities\CHF;

class CHF
{
    public $value;

    public static function chf($chf)
    {
        return new CHF(round(100 * $chf));
    }

    public static function int(int $rappe)
    {
        return new CHF($rappe);
    }

    public function __construct(public int $rappe)
    {
        $this->value = $rappe / 100;
    }

    public function sum(CHF $that): CHF
    {
        return new CHF($this->rappe + $that->rappe);
    }

    public function mult(int $int): CHF
    {
        return new CHF($this->rappe * $int);
    }

    public function toInt(): int
    {
        return $this->rappe;
    }

    public function __toString(): string
    {
        return $this->toLabel();
    }

    public function toString(): string
    {
        if ($this->rappe == 0) {
            return '0.-';
        }

        if ($this->rappe % 100 == 0) {
            return number_format($this->value, 0, '.', '\'').'.-';
        }

        return $this->formatNumber();
    }

    public function toOffer(): string
    {
        if ($this->rappe == 0) {
            return 'Gratis';
        }

        return $this->toLabel();
    }

    public function toLabel(): string
    {
        return 'CHF '.$this->toString();
    }

    private function formatNumber(): string
    {
        return number_format($this->value, 2, '.', '\'');
    }
}
