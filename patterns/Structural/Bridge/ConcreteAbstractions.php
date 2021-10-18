<?php
require_once "Abstractions.php";

class ConcreteAbstractionA extends RefinedAbstraction
{
    public function newFeatureA() : void
    {
        echo "'newFeatureA' was executed from 'ConcreteAbstractionA'\n";
        $this->implementation->methodE();
    }
}

class ConcreteAbstractionB extends Abstraction
{
    public function absFeature() : void
    {
        echo "'absFeature' was executed from 'ConcreteAbstractionB'\n";
        $this->implementation->methodD();
    }

    public function newFeatureB() : void
    {
        echo "'newFeatureB' was executed from 'ConcreteAbstractionB'\n";
        $this->implementation->methodD();
    }
}

?>