<?php
require_once "IBuilder.php";
require_once "PC.php";

class Builder implements IBuilder
{
    private PC $pc;

    public function __construct()
    {
        $this->pc = new PC();
    }

    public function setProcessor(string $model) : void
    {
        $this->pc->processor = $model;
    }

    public function setRAM(string $model) : void
    {
        $this->pc->ram = $model;
    }

    public function setGraphics(string $model) : void
    {
        $this->pc->graphics = $model;
    }

    public function setMotherboard(string $model) : void
    {
        $this->pc->motherboard = $model;
    }

    public function setPSU(string $model) : void
    {
        $this->pc->psu = $model;
    }

    public function setStorage(string $storage) : void
    {
        $this->pc->storage = $storage;
    }

    public function getPC() : PC
    {
        return $this->pc;
    }

    public function reset() : void
    {
        $this->pc = new PC();
    }
}
?>