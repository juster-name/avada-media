<?php
require_once "Target.php";
require_once "Adaptee.php";

class Adapter
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }
  
    public function contact20(Target $adapter) : string
    {
        $this->adaptee->connectPin10("20");
        $adapter->contact20("10");
        return "Adapter has connected 'Contact20' to 'Pin10''\n";
    }

    public function contact21(Target $adapter) : string
    {
        $this->adaptee->connectPin11("21");
        $adapter->contact21("11");
        return "Adapter has connected 'Contact21' to 'Pin11''\n";
    }

    public function contact22(Target $adapter) : string
    {
        $this->adaptee->connectGround("ground");
        $adapter->contact22("ground");
        return "Adapter has connected 'Contact22' to 'Ground'\n";
    }

    public function ground(Target $adapter) : string
    {
        $this->adaptee->connectGround("ground");
        $adapter->ground("ground");
        return "Adapter has connected 'Contact22' to 'Ground'\n";
    }
}

?>