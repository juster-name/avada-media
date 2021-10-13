<?php
require_once "IGUIFactory.php";
require_once "Buttons.php";
require_once "Sliders.php";

class WinFactory implements IGUIFactory
{
    public function createButton() : IButton
    {
        return new WinButton();
    }

    public function createSlider() : ISlider
    {
        return new WinSlider();
    }
}

class LinuxFactory implements IGUIFactory
{
    public function createButton() : IButton
    {
        return new LinuxButton();
    }

    public function createSlider() : ISlider
    {
        return new LinuxSlider();
    }
}
?>