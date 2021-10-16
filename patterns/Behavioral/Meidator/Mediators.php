<?php
require_once "Component.php";

class TextBasedHandler implements IMediator
{
    public function action(Component $component, string $actionType) : bool
    {
        switch ($actionType)
        {
            case "draw":
                return $this->draw($component->getName());

            case "click":
                return $this->click($component->getName());

            default:
                echo "Can't perform unknown action of '".$actionType."'";
        }
        return false;
    }

    private function draw($componentType) : bool
    {
        switch($componentType)
        {
            case "Box":
                echo "Box was drawn";
                return true;

            case "Triangle":
                echo "Triangle was drawn";
                return true;

            case "Circle":
                echo "Circle was drawn";
                return true;
            
            default:
                echo "Can't draw unknown type of '".$componentType."'";
        }
        return false;
    }

    private function click($componentType) : bool
    {
        switch($componentType)
        {
            case "Box":
                echo "Box was clicked";
                return true;

            case "Triangle":
                echo "Triangle was clicked";
                return true;

            case "Circle":
                echo "Circle was clicked";
                return true;
            
            default:
                echo "Can't click unknown type of '".$componentType."'";
        }
        return false;
    }
}

class ImageBasedHandler implements IMediator
{
    public function action(Component $component, string $actionType) : bool
    {
        switch ($actionType)
        {
            case "draw":
                return $this->draw($component->getName());
                
            case "click":
                return $this->click($component->getName());

            default:
                echo "*⚠️ Action '".$actionType."' E R R O R ⚠️*";     
        }
        return false;
    }

    private function draw($componentType) : bool
    {
        switch($componentType)
        {
            case "Box":
                echo '
                ********
                *      *
                *      *
                ********';
                return true;
            
            case "Triangle":
                echo '
                   *
                  * *
                 *   *
                * * * *';
                return true;
            
            case "Diamond":
                echo '
                    *
                  *   *
                *       *
                  *   *
                    *';
                return true;

            default:
                echo '
                *???????*
                |??⚠️??|
                *???????*'; 
            
        }
        return false;
    }

    private function click($componentType) : bool
    {
        switch($componentType)
        {
            case "Box":
                echo '
                *********
                * click *
                *       *
                *********';
                return true;
            
            case "Triangle":
                echo '
                     *
                   *   *
                 * click *
                *  * * *  *';
                return true;
            
            case "Diamond":
                echo '
                    *
                  *   *
                * click *
                  *   *
                    *';
                return true;

            default:
                echo '
                *??????????*
                |⚠️click⚠️|
                *??????????*'; 
            
        }
        return false;
    }
}
?>