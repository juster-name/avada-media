<?php

class Reciever
{
    public function action(string $command) : void
    {
        echo "Reciever has executed '".$command."' command\n\n"; 
    }
}

?>