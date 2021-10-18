<?php
namespace Decorator;
require_once "Decorator.php";

class TabDecorator extends Decorator
{
    public function execute() : string
    {
        return "\t".$this->wrapper->execute();
    }
}

class StarDecorator extends Decorator
{
    public function execute() : string
    {
        return "*".$this->wrapper->execute()."*";
    }
}

class WaveDecorator extends Decorator
{
    public function execute() : string
    {
        return "~".$this->wrapper->execute()."~";
    }
}

?>