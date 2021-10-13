<?php
require_once "IButton.php";

class WinButton implements IButton
{
    public function draw()
    {
        echo "WinButton was drawn\n";
    }

    public function click()
    {
        echo "WinButton was clicked\n";
    }
}

class LinuxButton implements IButton
{
    public function draw()
    {
        echo "LinuxButton was drawn\n";
    }

    public function click()
    {
        echo "LinuxButton was clicked\n";
    }
}

?>