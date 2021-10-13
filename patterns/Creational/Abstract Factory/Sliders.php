<?php
require_once "ISlider.php";


class WinSlider implements ISlider
{
    public function draw()
    {
        echo "WinSlider was drawn";
    }

    public function move()
    {
        echo "WinSlider was moved";
    }
}

class LinuxSlider implements ISlider
{
    public function draw()
    {
        echo "LinuxSlider was drawn";
    }

    public function move()
    {
        echo "LinuxSlider was moved";
    }
}

?>