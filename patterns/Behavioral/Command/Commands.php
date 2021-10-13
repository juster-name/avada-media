<?php
require_once "ICommand.php";
require_once "Reciever.php";

class TurnOnCommand implements ICommand
{
    private Reciever $reciever;
    
    public function __construct(Reciever $reciever)
    {
        $this->reciever = $reciever;
    }

    public function execute() : void
    {
        echo "TurnOnCommand executing\n";
        $this->reciever->action("turn_on");
    }
}

class TurnOffCommand implements ICommand
{
    private Reciever $reciever;
    
    public function __construct(Reciever $reciever)
    {
        $this->reciever = $reciever;
    }

    public function execute() : void
    {
        echo "TurnOffCommand executing\n";
        $this->reciever->action("turn_off");
    }
}

?>