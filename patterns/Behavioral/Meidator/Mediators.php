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
                echo "Can't perform unknown action of '".$actionType."'\n";
        }
        return false;
    }

    private function draw($componentType) : bool
    {
        switch($componentType)
        {
            case "Box":
                echo "Box was drawn\n";
                return true;

            case "Triangle":
                echo "Triangle was drawn\n";
                return true;

            case "Diamond":
                echo "Diamond was drawn\n";
                return true;
            
            default:
                echo "Can't draw unknown type of '".$componentType."'\n";
        }
        return false;
    }

    private function click($componentType) : bool
    {
        switch($componentType)
        {
            case "Box":
                echo "Box was clicked\n";
                return true;

            case "Triangle":
                echo "Triangle was clicked\n";
                return true;

            case "Diamond":
                echo "Diamond was clicked\n";
                return true;
            
            default:
                echo "Can't click unknown type of '".$componentType."'\n";
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
                echo "*⚠️ Action '".$actionType."' E R R O R ⚠️*\n";     
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
                ********
                ';
                return true;
            
            case "Triangle":
                echo '
                   *
                  * *
                 *   *
                * * * *
                ';
                return true;
            
            case "Diamond":
                echo '
                    *
                  *   *
                *       *
                  *   *
                    *
                    ';
                return true;

            default:
                echo '
                *???????*
                |??⚠️??|
                *???????*
                '; 
            
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
                *********
                ';
                return true;
            
            case "Triangle":
                echo '
                     *
                   *   *
                 * click *
                *  * * *  *
                ';
                return true;
            
            case "Diamond":
                echo '
                    *
                  *   *
                * click *
                  *   *
                    *
                    ';
                return true;

            default:
                echo '
                *??????????*
                |⚠️click⚠️|
                *??????????*
                '; 
            
        }
        return false;
    }
}
?>