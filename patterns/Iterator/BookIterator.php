<?php
require_once "Iterator.php";
require_once "BookCollection.php";

class BookIterator implements _Iterator
{
    private int $position;
    private BookCollection $collection;

    public function __construct(BookCollection $coll)
    {
        $this->position = -1;
        $this->collection = $coll;
    }

    public function next() : string
    {
        if ($this->hasNext())
        {
            $this->position += 1;
        }
        return $this->collection->getItem($this->position);
    }

    public function hasNext() : bool
    {
        return $this->position < $this->collection->size() - 1;
    }
}

?>