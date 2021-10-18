<?php
require_once "Abstractions.php";

class ConcreteAbstractionA extends Abstraction
{
    public function absFeatureC() : void
    {
        echo "'absFeatureC' was executed from 'ConcreteAbstractionA'";
        $this->implementation->methodD();
    }
}

class ConcreteAbstractionB extends RefinedAbstraction
{
    public function newFeature() : void
    {
        echo "'newFeature' was executed from 'RefinedAbstraction'";
        $this->implementation->methodE();
    }
}

?>