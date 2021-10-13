<?php
require_once "IPrototype.php";

class PrototypeA implements IPrototype
{
    public string $stringData;

    public function __construct(string $stringData)
    {
        $this->stringData = $stringData;
    }

    public function clone() : IPrototype
    {
        return new PrototypeA($this->stringData);
    }
}

class SubPrototypeA extends PrototypeA
{
    public int $intData;

    public function SubPrototypeA(string $stringData, int $intData)
    {
        parent::__construct($stringData);
        $this->intData = $intData;
    }
    public function clone() : IPrototype
    {
        return new SubPrototypeA($this->stringData, $this->intData);
    }
}

?>