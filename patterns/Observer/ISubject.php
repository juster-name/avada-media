<?php

require_once "IObserver.php";

interface ISubject
{
    public function add(IObserver $observer) : void;
    public function remove(IObserver $observer) : void;
    public function notify() : void;

}

?>