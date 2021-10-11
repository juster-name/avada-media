<?php
require_once "ProductFactory.php";
require_once "Products.php";

$productFactory = new ProductFactory();

$productA = $productFactory->createProduct("A");
$productB = $productFactory->createProduct("B");
$productA2 = $productFactory->createProduct("A");

echo $productA->getName()."\n".$productB->getName()."\n".$productA2->getName();

?>