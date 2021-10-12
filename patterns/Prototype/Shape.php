<?php

abstract class Shape
{
    public int $x, $y;
    public string $color;

    public abstract function clone() : Shape;
}

?>