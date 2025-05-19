<?php

namespace App\Http\Helpers;

class Ecuacion
{
    private float $a;
    private float $b;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function resultado(): float
    {
        
        $x = -($this->b / $this->a);
        return $x;
    }
}
