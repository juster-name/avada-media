<?php
require_once "IObserver.php";

class Observer implements IObserver
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update() : void
    {
        echo "'$this->name' was updated\n";
    }
}

?>