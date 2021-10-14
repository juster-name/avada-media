<?php
require_once "ConcreteClasses.php";

$simpleCalc = new ConcreteClassA();
$scienceCalc = new ConcreteClassB();

echo "1 / 0 = ".$scienceCalc->div(1, 0)."\n";

try
{ 
    echo "1 / 0 = ";
    echo $simpleCalc->div(1, 0)."\n";
} 
catch (Exception $e)
{
    echo $e->getMessage();
}

?>