<?php
require_once "Component.php";

class IntLeaf implements Component
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue() : int
    {
        return $this->value;
    }
}

class MagicLeaf implements Component
{
    private int $value;
    private int $magicValue = 42;

    public function __construct(float $value)
    {
        $this->value = $value + $this->magicValue;
    }

    public function getValue() : int
    {
        return intval($this->value - $this->magicValue);
    }
}

?>