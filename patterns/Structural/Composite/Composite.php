<?php
require_once "Component.php";

class Composite implements Component
{
    private $components = [];

    public function getValue() : int
    {
        $value = 0;

        foreach ($this->components as $c)
        {
            $value += $c->getValue();
        }

        return $value;
    }

    public function add(Component $component) : void
    {
        $this->components[] = $component;
    }

    public function remove(int $componentIndex) : void
    {
        unset($this->components[$componentIndex]);
    }

    public function getComponents() : array
    {
        return $this->components;
    }
}

?>