<?php
require_once "Iterator.php";

interface _Iterable
{
    public function createIterator() : _Iterator;
}

?>