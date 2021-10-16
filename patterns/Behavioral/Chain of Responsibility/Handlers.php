<?php
require_once "Handler.php";

class MouseHandler extends Handler
{
    public function handle(string $type) : string
    {
        if ($type == "mouse")
        {
            return "Element was clicked by mouse";
        }
        else
        {
            return $this->nextHandle($type);
        }
    }
}

class SensorHandler extends Handler
{
    public function handle(string $type) : string
    {
        if ($type == "sensor")
        {
            return "Element was touched by sensor panel";
        }
        else
        {
            return $this->nextHandle($type);
        }
    }
}

class KeyboardHandler extends Handler
{
    public function handle(string $type) : string
    {
        if ($type == "keyboard")
        {
            return "Element was pressed by keyboard";
        }
        else
        {
            return $this->nextHandle($type);
        }
    }
}

?>