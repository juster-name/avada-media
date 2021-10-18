<?php
require_once "IImplementation.php";

class ConcreteImplementation implements IImplementation
{
    public function methodA() : void
    {
        echo "\t'methodA' was executed from 'ConcreteImplementation'\n";
    }
    
    public function methodB() : void
    {
        echo "\t'methodB' was executed from 'ConcreteImplementation'\n";
    }

    public function methodC() : void
    {
        echo "\t'methodC' was executed from 'ConcreteImplementation'\n";
    }

    public function methodD() : void
    {
        echo "\t'methodD' was executed from 'ConcreteImplementation'\n";
    }

    public function methodE() : void
    {
        echo "\t'methodE' was executed from 'ConcreteImplementation'\n";
    }
}

?>