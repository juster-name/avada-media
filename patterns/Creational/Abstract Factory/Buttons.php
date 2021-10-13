<?php
require_once "IButton.php";

class WinButton implements IButton
{
    public function draw()
    {
        echo "WinButton was drawn";
    }

    public function click()
    {
        echo "WinButton was clicked";
    }
}

class LinuxButton implements IButton
{
    public function draw()
    {
        echo "LinuxButton was drawn";
    }

    public function click()
    {
        echo "LinuxButton was clicked";
    }
}

?>