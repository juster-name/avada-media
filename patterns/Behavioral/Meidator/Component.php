<?php
require_once "IMediator.php";

abstract class Component
{
    private IMediator $mediator;

    public function __construct(IMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function draw()
    {
        return $this->mediator->action($this, "draw");
    }

    public function click()
    {
        return $this->mediator->action($this, "click");
    }

    abstract public function getName() : string;  
}

?>