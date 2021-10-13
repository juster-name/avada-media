<?php
require_once "ISlider.php";
require_once "IButton.php";

interface IGUIFactory
{
    public function createSlider() : ISlider;
    public function createButton() : IButton;
}


?>