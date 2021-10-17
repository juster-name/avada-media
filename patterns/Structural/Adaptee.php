<?php

class Adaptee
{
    private $connectedPins = [
        '10' => [], 
        '11' => [], 
        'ground' => []];

    public function getPinsKeys() : array
    {
        return array_keys($this->connectedPins);
    }

    public function connectPin10(string $to) : string
    {
        $this->connectedPins['10'][] = $to;
        return "Pin10 was connected to '".$to."'\n";
    }

    public function connectPin11(string $to) : string
    {
        $this->connectedPins['11'][] = $to;
        return "Pin10 was connected to '".$to."'\n";
    }

    public function connectGround(string $to) : string
    {
        $this->connectedPins['ground'][] = $to;
        return "Pin10 was connected to '".$to."'\n";
    }
}


?>