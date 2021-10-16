<?php
require_once "IHandler.php";

class MouseHandler extends Handler
{
    public function handle(string $type) : string
    {
        if ($type == "mouse")
        {
            return "Element was clicked by mouse\n";
        }
        else
        {
            return parent::getNext()->handle($type);
        }
    }
}

class SensorHandler extends Handler
{
    public function handle(string $type) : string
    {
        if ($type == "sensor")
        {
            return "Element was touched by sensor panel\n";
        }
        else
        {
            return parent::getNext()->handle($type);
        }
    }
}

class KeyboardHandler extends Handler
{
    public function handle(string $type) : string
    {
        if ($type == "finger")
        {
            return "Element was pressed by keyboard\n";
        }
        else
        {
            return parent::getNext()->handle($type);
        }
    }
}

?>