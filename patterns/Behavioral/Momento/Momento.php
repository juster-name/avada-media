<?php

class Momento
{
    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function getState() : string
    {
        return $this->state;
    }

    public function restore(Momento $momento)
    {
        $this->state = $momento->getState();
    }
}

?>