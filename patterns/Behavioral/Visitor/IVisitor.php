<?php
require_once "Products.php";

interface IVisitor
{
    public function visitBread(Bread $bread);
    public function visitMilk(Milk $milk);
    public function visitEggs(Eggs $eggs);
}

?>