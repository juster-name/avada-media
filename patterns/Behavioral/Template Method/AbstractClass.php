<?php

abstract class AbstractClass
{
    public function add(float $var1, float $var2) : float
    {
        return $var1 + $var2;
    }

    public function sub(float $var1, float $var2) : float
    {
        return $var1 - $var2;
    }

    public function mult(float $var1, float $var2) : float
    {
        return $var1 * $var2;
    }

    public abstract function div(float $var1, float $var2) : float;
}

?>