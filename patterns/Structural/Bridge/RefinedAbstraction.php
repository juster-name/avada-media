<?php
require_once "Abstraction.php";

abstract class RefinedAbstraction extends Abstraction
{
    public function absFeatureC() : void
    {
        echo "'absFeatureC' was executed from 'RefinedAbstraction'";
        $this->implementation->methodC();
    }

    public function newFeature() : void
    {
        echo "'newFeature' was executed from 'RefinedAbstraction'";
        $this->implementation->methodA();
        $this->implementation->methodB();
        $this->implementation->methodC();
    }

}

?>