<?php
require_once "IStrategy.php";

class Context
{
    private IStrategy $strategy;

    public function __construct(IStrategy $strategy)
    {
        $this->setStrategy($strategy);
    }

    public function setStrategy(IStrategy $strategy) : void
    {
        $this->strategy = $strategy;
    }

    public function doLogic() : void
    {
        echo "Context is doing some work...\n";
        $this->strategy->doWork();
    }

}


?>