<?php
require_once "ICommand.php";

class Invoker
{
    private ICommand $turnOn;
    private ICommand $turnOff;

    public function __construct(ICommand $turnOn, ICommand $turnOff)
    {
        $this->turnOn = $turnOn;
        $this->turnOff = $turnOff;
    }
    
    public function LightsOn() : void
    {
        echo "Invoker is turning the lights on\n";
        $this->turnOn->execute();
    }
    public function LightsOff() : void
    {
        echo "Invoker is turning the lights off\n";
        $this->turnOff->execute();
    }
}

?>