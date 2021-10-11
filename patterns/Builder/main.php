<?php
require_once "IBuilder.php";
require_once "Builder.php";
require_once "Director.php";
require_once "PC.php";

$pcBuilder = new Builder();
$buildDirector = new Director($pcBuilder);

$gamingPC = $buildDirector->createGamingPC();
$officePC = $buildDirector->createOfficePC();

echo "Gaming PC setup:\n".$gamingPC->toString()."\n";
echo "Office PC setup:\n".$officePC->toString();

?>