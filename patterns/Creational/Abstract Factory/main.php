<?php
require_once "Factories.php";

$buttons = [];
$sliders = [];
$winFactory = new WinFactory();
$linuxFactory = new LinuxFactory();

for ($i = 0; $i <= 3; ++$i)
{
    $buttons[] = $winFactory->createButton();
    $buttons[] = $linuxFactory->createButton();

    $sliders[] = $winFactory->createSlider();
    $sliders[] = $linuxFactory->createSlider();
}

foreach($buttons as &$button)
{
    $button->draw();
    $button->click();
}
foreach($sliders as &$slider)
{
    $slider->draw();
    $slider->move();
}


?>