<?php
require_once "Products.php";

interface IVisitor
{
    public function visitBread(Bread $bread) : float;
    public function visitMilk(Milk $milk) : float;
    public function visitEggs(Eggs $eggs) : float;
}

?>