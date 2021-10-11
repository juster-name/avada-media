<?php
require_once "PC.php";

interface IBuilder
{
    public function setProcessor(string $model) : void;
    public function setRAM(string $model) : void;
    public function setGraphics(string $model) : void;
    public function setMotherboard(string $model) : void;
    public function setPSU(string $model) : void;
    public function setStorage(string $model) : void;

    public function reset() : void;
    public function getPC() : PC;
}

?>