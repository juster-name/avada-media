<?php
require_once "AbstractClass.php";

class ConcreteClassA extends AbstractClass
{
    public function div($var1, $var2) : float
    {
        if ($var2 == 0)
        {
            throw new Exception("Error. Division by zero.");
        }
        return $var1 / $var2;
    }
}

class ConcreteClassB extends AbstractClass
{
    public function div($var1, $var2) : float
    {
        if ($var2 == 0)
        {
            return INF;
        }
        return $var1 * $var2;
    }
}

?>