<?php
require_once "Mediators.php";
require_once "Components.php";

$textHandler = new TextBasedHandler();
$imageHandler = new ImageBasedHandler();

$textComponents = [
    new Box($textHandler),
    new Triangle($textHandler),
    new Diamond($textHandler)];

$imageComponents = [
    new Box($imageHandler),
    new Triangle($imageHandler),
    new Diamond($imageHandler)];


echo "TEXT HANDLER TEST:\n\n";
foreach ($textComponents as $tc)
{
    $tc->draw();
    $tc->click();
}

echo "\n\nIMAGE HANDLER TEST:\n\n";
foreach ($imageComponents as $tc)
{
    $tc->draw();
    $tc->click();
}

?>