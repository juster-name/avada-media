<?php
require_once "Context.php";

$gates = new Context();

echo "The gates are in '".get_class($gates->getCurrentState())."' state\n";

$gates->closeGates();
$gates->openGates();
$gates->openGates();
$gates->closeGates();

?>