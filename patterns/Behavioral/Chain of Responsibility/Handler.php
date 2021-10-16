<?php

abstract class Handler
{
    private ?Handler $next;

    public function __construct(?Handler $next)
    {
        $this->setNext($next);
    }

    public function setNext(?Handler $next) : void
    {
        $this->next = $next;
    }

    protected function nextHandle(string $type) : string
    {
        if (is_null($this->next))
        {
            return "No handlers found";
        }
        return $this->next->handle($type);
    }

    abstract public function handle(string $type) : string;
}

?>