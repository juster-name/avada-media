<?php
require_once "Context.php";
require_once "ConcreteStrategy.php";

$strategyA = new ConcreteStrategyA();
$strategyB = new ConcreteStrategyB();

$context = new Context($strategyA);
$context->doLogic();

$context->setStrategy($strategyB);
$context->doLogic();

?>