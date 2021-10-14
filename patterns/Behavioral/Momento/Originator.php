<?php
require_once "Momento.php";

class Origitanor extends Momento
{
    public function setState(string $state) : void
    {
        $this->state = $state;
    }
}

?>