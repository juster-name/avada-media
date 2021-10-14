<?php
require_once "IVisitor.php";

interface IVisitable
{
    public function accept(IVisitor $visitor);
}


?>