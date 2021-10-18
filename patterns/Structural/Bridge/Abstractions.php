<?php
require_once "IImplementation.php";

abstract class Abstraction
{
    protected IImplementation $implementation;

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
        echo "'absFeature' was executed from 'RefinedAbstraction'\n";
        $this->implementation->methodC();
    }

    abstract public function newFeatureB() : void;
}
?>