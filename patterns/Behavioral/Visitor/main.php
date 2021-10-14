<?php
require_once "TaxVisitors.php";

$taxer = new TaxVisitor();
$holyTaxer = new HolydayTaxVisitor();

$milk = new Milk(20.5);
$bread = new Bread(14.2);
$eggs = new Eggs(26.2);

echo "Taxing products:\n";
echo "Milk: ".$milk->accept($taxer)."\n";
echo "Bread: ".$bread->accept($taxer)."\n";
echo "Eggs: ".$eggs->accept($taxer)."\n\n";

echo "Holyday time:\n";
echo "Milk: ".$milk->accept($holyTaxer)."\n";
echo "Bread: ".$bread->accept($holyTaxer)."\n";
echo "Eggs: ".$eggs->accept($holyTaxer)."\n\n";
?>