<?php
require_once "Handlers.php";

$chainHandler = new KeyboardHandler(new MouseHandler(new SensorHandler(null)));

echo $chainHandler->handle("sensor")."\n";
echo $chainHandler->handle("keyboard")."\n";
echo $chainHandler->handle("mouse")."\n";
echo $chainHandler->handle("gamepad")."\n";

?>