<?php
require_once "IState.php";

class OpenedState implements IState
{
    private Context $context;
    
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function open() : void
    {
        echo "The gates are already opened\n";
    }
    public function close() : void
    {
        echo "Closing the gates\n";
        $this->context->setState(new ClosedState($this->context));
    }
}

class ClosedState implements IState
{
    private Context $context;
    
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function open() : void
    {
        echo "Opening the gates\n";
        $this->context->setState(new OpenedState($this->context));
    }

    public function close() : void
    {
        echo "The gates are already closed\n";
    }
}

?>