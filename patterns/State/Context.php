<?php
require_once "States.php";

class Context
{
    private IState $currentState;

    public function __construct()
    {
        $this->currentState = new ClosedState($this);
    }
    
    public function setState(IState $state) : void
    {
        $this->currentState = $state;
    }

    public function openGates() : void
    {
        $this->currentState->open();
    }

    public function closeGates() : void
    {
         $this->currentState->close();
    }

    public function getCurrentState() : IState
    {
        return $this->currentState;
    }
}

?>