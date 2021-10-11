<?php
require_once "IStrategy.php";

class ConcreteStrategyA implements IStrategy
{
    public function doWork() : void
    {
        echo "Class 'ConcreteStrategyA' has done some work\n";
    }
}

class ConcreteStrategyB implements IStrategy
{
    public function doWork() : void
    {
        echo "Class 'ConcreteStrategyB' has done some work\n";
    }
}

?>