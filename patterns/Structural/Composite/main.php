<?php
require_once "Composite.php";
require_once "Leafs.php";

$compositeInit = new Composite();
$compositeA = new Composite();
$compositeB = new Composite();

addRandomLeafs($compositeInit);

$compositeA->add($compositeInit);
addRandomLeafs($compositeA);

$compositeB->add($compositeA);
addRandomLeafs($compositeB);


echo "Value of 'compositeInit': ". $compositeInit->getValue(). "\n\n";
echo "Value of 'compositeA': ". $compositeA->getValue(). "\n";
echo "New leafs value = ". ($compositeA->getValue() - $compositeInit->getValue()). "\n\n";
echo "Value of 'compositeB': ". $compositeB->getValue(). "\n";
echo "New leafs value = ". ($compositeB->getValue() - $compositeA->getValue()). "\n";

function addRandomLeafs(Composite $to)
{
    for ($i=0; $i < 5; $i++) 
    {
        $to->add(new IntLeaf(rand(1, 500)));
    
        for ($j=0; $j < 2; $j++) 
        { 
            $to->add(new MagicLeaf(rand(1, 100)));
        }
    }
}

?>