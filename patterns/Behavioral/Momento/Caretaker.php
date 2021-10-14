<?php
require_once "Momento.php";

class Caretaker
{
    private $momentoHistory = [];

    public function add(Momento $momento) : void
    {
        $this->momentoHistory[] = $momento;
    }

    public function get(int $index) : Momento
    {
        return $this->momentoHistory[$index];
    }
}

?>