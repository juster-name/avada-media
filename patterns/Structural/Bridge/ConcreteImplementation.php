<?php
require_once "IImplementation.php";

class ConcreteImplementation
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
}

?>