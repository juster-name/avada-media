<?php
require_once "IVisitable.php";

class Bread implements IVisitable
{
    public float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function accept(IVisitor $visitor)
    {
        return $visitor->visit($this);
    }
}

class Milk implements IVisitable
{
    public float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function accept(IVisitor $visitor)
    {
        return $visitor->visit($this);
    }
}

class Eggs implements IVisitable
{
    public float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function accept(IVisitor $visitor)
    {
        return $visitor->visit($this);
    }
}

?>