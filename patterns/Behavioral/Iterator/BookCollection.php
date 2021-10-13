<?php
require_once "Iterable.php";
require_once "BookIterator.php";

class BookCollection implements _Iterable
{
    private array $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function createIterator() : _Iterator
    {
        return new BookIterator($this);
    }

    public function addItem(string $str) : void
    {
        $this->items[] = $str;
    }

    public function getItem($index) : string
    {
        if (isset($this->items[$index])) 
        {
            return $this->items[$index];
        }
        return null;
    }

    public function size(): int
    {
        return count($this->items);
    }
}

?>