<?php
namespace Decorator;
require_once "IComponent.php";

class Component implements IComponent
{
    public function execute() : string
    {
        return "This is Component";
    }
}

?>