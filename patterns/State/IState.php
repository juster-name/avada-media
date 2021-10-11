<?php

interface IState
{
    public function open() : void;
    public function close() : void;
}

?>