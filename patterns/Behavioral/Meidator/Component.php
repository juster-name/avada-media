<?php
require_once "IMediator.php";

abstract class Component
{
    private IMediator $mediator;

    public function __construct(IMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function draw() : bool
    {
        return $this->mediator->action($this, "draw");
    }

    public function click() : bool
    {
        return $this->mediator->action($this, "click");
    }

    abstract public function getName() : string;  
}

?>