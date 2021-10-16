<?php

require_once "Component.php";

class Box extends Component
{    
    public function getName() : string
    {
        return "Box";
    }

}

class Triangle extends Component
{    
    public function getName() : string
    {
        return "Triangle";
    }

}

class Diamond extends Component
{    
    public function getName() : string
    {
        return "Diamond";
    }

}

?>