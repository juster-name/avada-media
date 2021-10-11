<?php
require "Singleton.php";

$single = Singleton::getInstance();

echo $single->data;
?>