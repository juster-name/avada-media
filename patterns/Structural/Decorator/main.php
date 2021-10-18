<?php
namespace Decorator;
require_once "Component.php";
require_once "Decorators.php";

$string = new Component("This is Component");
$decoratedString = new TabDecorator(new WaveDecorator(new StarDecorator($string)));


echo "Boring string: ".     $string->execute()."\n";
echo "Decorated string: ".  $decoratedString->execute();

?>