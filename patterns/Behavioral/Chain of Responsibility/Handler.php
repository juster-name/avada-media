<?php

abstract class Handler
{
    private Handler $next;

    public function setNext(Handler $handler) : void
    {
        $this->next = $handler;
    }

    public function getNext() : Handler
    {
        return $this->next;
    }

    abstract public function handle(string $type) : string;
}

?>