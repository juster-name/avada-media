<?php
require "ISubject.php";

class Subject implements ISubject
{
    private array $observers;

    public function __construct()
    {
        $this->observers = [];
    }
    
    public function add(IObserver $observer) : void
    {
        $this->observers[] = $observer;
    }
    public function remove(IObserver $observer) : void
    {
        $key = array_search($observer, $this->observers);
        unset($this->observers[$key]);
    }
    public function notify() : void
    {
        echo "Notifying...\n";
        foreach($this->observers as $o)
        {
            $o->update();
        }
    }
}

?>