<?php
require_once "ISlider.php";


class WinSlider implements ISlider
{
    public function draw()
    {
        echo "WinSlider was drawn\n";
    }

    public function move()
    {
        echo "WinSlider was moved\n";
    }
}

class LinuxSlider implements ISlider
{
    public function draw()
    {
        echo "LinuxSlider was drawn\n";
    }

    public function move()
    {
        echo "LinuxSlider was moved\n";
    }
}

?>