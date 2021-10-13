<?php
require_once "BookCollection.php";

$books = new BookCollection;

$books->addItem("Book1");
$books->addItem("Book2");
$books->addItem("Book3");

$iterator = $books->createIterator();

while($iterator->hasNext())
{
    echo $iterator->next()."\n";
}

?>