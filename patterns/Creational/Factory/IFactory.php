<?php
require_once "IProduct.php";

interface IFactory
{
    public function createProduct(string $type) : IProduct;
}

?>