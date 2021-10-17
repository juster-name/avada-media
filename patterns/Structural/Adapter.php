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
  
    public function contact20() : string
    {
        $this->adaptee->connectPin10("20");
        return "Adapter has connected 'Contact20' to 'Pin10''\n";
    }

    public function contact21() : string
    {
        $this->adaptee->connectPin11("21");
        return "Adapter has connected 'Contact21' to 'Pin11''\n";
    }

    public function contact22() : string
    {
        $this->adaptee->connectGround("ground");
        return "Adapter has connected 'Contact22' to 'Ground'\n";
    }

    public function ground() : string
    {
        $this->adaptee->connectGround("ground");
        return "Adapter has connected 'Contact22' to 'Ground'\n";
    }
}

?>