<?php
require_once "IImplementation.php";

abstract class Abstraction
{
    private IImplementation $implementation;

    public function __construct(IImplementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function featureA() : void
    {
        echo "'FeatureA' was executed from 'Abstraction'\n";
        $this->implementation->methodA();
    }

    public function featureB() : void
    {
        echo "'FeatureB' was executed from 'Abstraction'\n";
        $this->implementation->methodB();
    }

    abstract public function absFeature() : void;

}

abstract class RefinedAbstraction extends Abstraction
{
    public function absFeature() : void
    {
        echo "'absFeatureC' was executed from 'RefinedAbstraction'";
        $this->implementation->methodC();
    }

    abstract public function newFeatureA() : void;
}
?>