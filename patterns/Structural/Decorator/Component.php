<?php
namespace Decorator;
require_once "IComponent.php";

class Component implements IComponent
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function execute() : string
    {
        return $this->name;
    }
}

?>