<?php
require_once "Prototypes.php";

$proto1 = new PrototypeA("I'm the first prototype!");
$proto1Clone = $proto1->clone();

$proto1->stringData = "I've been cloned. Atleast don't steal my data!";

echo "proto1 : ".$proto1->stringData."\n";
echo "proto1Clone : ".$proto1Clone->stringData."\n\n";

$proto2 = new SubPrototypeA("I love my int data #", 1024);
$proto2Clone = $proto2->clone();

$proto2->stringData = "Someone changed my data to #";
$proto2->intData = 128;

echo "proto2 data: ".$proto2->stringData.$proto2->intData."\n";
echo "proto2Clone data: ".$proto2Clone->stringData.$proto2Clone->intData;

?>