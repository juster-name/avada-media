<?php
require_once "Momento.php";

class Origitanor
{
    private string $state = "";

    public function setState(string $state) : void
    {
        $this->state = $state;
    }

    public function getState() : string
    {
        return $this->state;
    }

    public function createMomento() : Momento
    {
        return new Momento($this->state);
    }

    public function restore(Momento $momento)
    {
        $this->state = $momento->getState();
    }
}

?>