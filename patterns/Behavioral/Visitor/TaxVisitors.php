<?php
require_once "IVisitor.php";

class TaxVisitor implements IVisitor
{
    public function visitBread(Bread $bread) : float
    {
        return $bread->price + $bread->price * 0.1;
    }

    public function visitMilk(Milk $milk) : float
    {
        return $milk->price + $milk->price * 0.25;
    }

    public function visitEggs(Eggs $eggs) : float
    {
        return $eggs->price + $eggs->price * 0.15;
    }
}

class HolydayTaxVisitor implements IVisitor
{
    public function visitBread(Bread $bread) : float
    {
        return $bread->price + $bread->price * 0.05;
    }

    public function visitMilk(Milk $milk) : float
    {
        return $milk->price + $milk->price * 0.18;
    }

    public function visitEggs(Eggs $eggs) : float
    {
        return $eggs->price + $eggs->price * 0.1;
    }
}
?>