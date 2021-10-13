<?php
require_once "Products.php";
require_once "IFactory.php";

class ProductFactory implements IFactory
{
    private int $productCounter;

    public function __construct()
    {
        $this->productCounter = 1;
    }

    public function createProduct(string $type) : IProduct
    {
        if ($type === "A")
        {
            return new ProductA("Product #".$this->productCounter++);
        }
        if ($type === "B")
        {
            return new ProductB("Product #".$this->productCounter++);
        }
    }
}

?>