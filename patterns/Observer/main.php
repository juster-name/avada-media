<?php
require_once "Subject.php";
require_once "Observer.php";

$subject = new Subject();
$observer1 = new Observer("First Observer");
$observer2 = new Observer("Second Observer");

$subject->add($observer1);
$subject->add($observer2);
$subject->notify();

$subject->remove($observer1);
$subject->notify();

?>