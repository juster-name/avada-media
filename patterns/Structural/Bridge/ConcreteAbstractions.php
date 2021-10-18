<?php
require_once "Abstractions.php";

class ConcreteAbstractionA extends RefinedAbstraction
{
    public function newFeatureA() : void
    {
        echo "'newFeature' was executed from 'ConcreteAbstractionA'";
        $this->implementation->methodE();
    }
}

class ConcreteAbstractionB extends Abstraction
{
    public function absFeature() : void
    {
        echo "'absFeatureC' was executed from 'ConcreteAbstractionB'";
        $this->implementation->methodD();
    }
    public function newFeatureB() : void
    {
        echo "'absFeatureA' was executed from 'ConcreteAbstractionB'";
        $this->implementation->methodD();
    }
}

?>