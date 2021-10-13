<?php
require_once "IProduct.php";

class ProductA implements IProduct
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name." (ProductA)";
    }

    public function getName() : string
    {
        return $this->name;
    }
}

class ProductB implements IProduct
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name." (ProductB)";
    }

    public function getName() : string
    {
        return $this->name;
    }
}

?>