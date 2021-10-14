<?php
require_once "AbstractClass.php";

class ConcreteClassA extends AbstractClass
{
    public function div(float $var1, float $var2) : float
    {
        if ($var2 == 0)
        {
            throw new Exception("Error. Division by zero.\n\n");
        }
        return $var1 / $var2;
    }
}

class ConcreteClassB extends AbstractClass
{
    public function div(float $var1, float $var2) : float
    {
        if ($var2 == 0)
        {
            return INF;
        }
        return $var1 * $var2;
    }
}

?>