<?php
require_once "Invoker.php";
require_once "Reciever.php";
require_once "Commands.php";

$lamp = new Reciever;
$lightSwitch = new Invoker(new TurnOnCommand($lamp), new TurnOffCommand($lamp));

$lightSwitch->LightsOn();
$lightSwitch->LightsOff();

?>