<?php
require_once "Abstractions.php";

class ConcreteAbstractionA extends Abstraction
{
    public function absFeature() : void
    {
        echo "'absFeature' was executed from 'ConcreteAbstractionA'\n";
        $this->implementation->methodD();
    }

    public function newFeatureA() : void
    {
        echo "'newFeatureB' was executed from 'ConcreteAbstractionA'\n";
        $this->implementation->methodC();
        $this->implementation->methodD();
    }
}

class ConcreteAbstractionB extends RefinedAbstraction
{
    public function newFeatureB() : void
    {
        echo "'newFeatureA' was executed from 'ConcreteAbstractionB'\n";
        $this->implementation->methodE();
    }
}

?>