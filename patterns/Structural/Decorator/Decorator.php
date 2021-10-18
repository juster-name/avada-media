<?php
namespace Decorator;

abstract class Decorator implements IComponent
{
    protected IComponent $wrapper;

    public function __construct(IComponent $wrapper)
    {
        $this->wrapper = $wrapper;
    }

    abstract public function execute() : string;
}

?>