<?php
require_once "Shape.php";

class Circle extends Shape
{
    public float $radius;

    public function Circle(float $radius)
    {
        $this->radius = $radius;
    }
    public function clone() : Shape
    {
        return new Circle($this->radius);
    }
}

class Rectangle extends Shape
{
    public float $height, $width;

    public function Rectangle(int $height, int $width)
    {
        $this->height = $height; 
        $this->width = $width;
    }
    public function clone() : Shape
    {
        return new Rectangle($this->height, $this->width);
    }
}

?>