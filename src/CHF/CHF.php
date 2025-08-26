<?php

namespace Azzarip\Utilities\CHF;

class CHF
{
    public $value;

    public static function chf($chf)
    {
        return new CHF(round(100 * $chf));
    }

    public static function int(int $int)
    {
        return new CHF($int);
    }

    public function __construct(public int $int)
    {
        $this->value = $int / 100;
    }

    public function sum(CHF $that): CHF
    {
        return new CHF($this->int + $that->int);
    }

    public function mult(int $int): CHF
    {
        return new CHF($this->int * $int);
    }

    public function toInt(): int
    {
        return $this->int;
    }

    public function __toString(): string
    {
        return $this->toString();
    }

    public function toString(): string
    {
        if ($this->int == 0) {
            return '0.-';
        }

        if ($this->int % 100 == 0) {
            return number_format($this->value, 0, '.', '\'').'.-';
        }

        return $this->formatNumber();
    }

    public function toOffer(): string
    {
        if ($this->int == 0) {
            return 'Gratis';
        }

        return $this->toLabel();
    }

    public function multInt(int $i): self
    {
        $this->int *= $i;
        $this->value *= $i;

        return $this;
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
