<?php

class PC
{
    public string $processor;
    public string $ram;
    public string $graphics;
    public string $motherboard;
    public string $psu;
    public string $storage;

    public function toString() : string
    {
        return "Processor: ".$this->processor."\n".
                "RAM: ".$this->ram."\n".
                "Graphics: ".$this->graphics."\n".
                "Motherboard: ".$this->motherboard."\n".
                "PSU: ".$this->psu."\n".
                "Storage: ".$this->storage."\n";
    }
}


?>