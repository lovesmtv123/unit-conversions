<?php

namespace Quangvision\UnitConversions;

class Temperature
{
    private float $celsius;

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public static function forCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
