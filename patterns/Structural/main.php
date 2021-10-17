<?php
require_once "Adapter.php";

$target = new Target();
$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);


echo $adapter->contact20($target);
echo $adapter->contact21($target);
echo $adapter->contact22($target);
echo $adapter->ground($target)."\n";

echo var_dump($target->getContacts())."\n";
echo var_dump($adaptee->getPins())."\n";

?>