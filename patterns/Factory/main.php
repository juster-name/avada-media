<?php
require_once "ProductFactory.php";
require_once "Products.php";

$productFactory = new ProductFactory();

$productA = $productFactory->createProduct("A");
$productB = $productFactory->createProduct("B");
$productA2 = $productFactory->createProduct("A");

echo $productA->getName();
echo $productB->getName();
echo $productA2->getName();

?>