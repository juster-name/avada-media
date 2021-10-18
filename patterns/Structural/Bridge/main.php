<?php
require_once "ConcreteAbstractions.php";
require_once "ConcreteImplementation.php";

$implementation = new ConcreteImplementation();

$abstractionA = new ConcreteAbstractionA($implementation);
$abstractionB = new ConcreteAbstractionB($implementation);

echo "ConcreteAbstractionA Test:\n";

$abstractionA->featureA();
$abstractionA->featureB();
$abstractionA->absFeature();
$abstractionA->newFeatureA();

echo "\nConcreteAbstractionB Test:\n";

$abstractionB->featureA();
$abstractionB->featureB();
$abstractionB->absFeature();
$abstractionB->newFeatureB();


?>