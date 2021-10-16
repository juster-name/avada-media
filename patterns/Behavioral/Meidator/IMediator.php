<?php
require_once "Component.php";

interface IMediator
{
    public function action(Component $component, string $actionType) : bool;
}


?>