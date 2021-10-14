<?php

abstract class AbstractClass
{
    public function add($var1, $var2) : float
    {
        return $var1 + $var2;
    }

    public function sub($var1, $var2) : float
    {
        return $var1 - $var2;
    }

    public function mult($var1, $var2) : float
    {
        return $var1 * $var2;
    }
    
    public abstract function div($var1, $var2) : float;
}

?>