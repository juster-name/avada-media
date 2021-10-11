<?php

class Singleton
{
    private static Singleton $instance;
    public string $data;

    private function __construct()
    {
        $this->data = 'Something important';
    }
    public static function getInstance() : Singleton
    {
        if (isset(self::$instance))
        {
            return self::$instance;
        }
        return new Singleton();
    }
}

?>