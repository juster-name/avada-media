<?php
require_once "Caretaker.php";
require_once "Originator.php";

$textEditor = new Origitanor("");
$history = new Caretaker();

showAndSave("This is original line\n");
showAndSave("New fresh line is created\n");
showAndSave("This line is evolving\n");

echo "*CTRL+Z*\n";

$textEditor->restore($history->get(1));
echo $textEditor->getState();

echo "*CTRL+Z*\n";

$textEditor->restore($history->get(0));
echo $textEditor->getState();

echo "*Last line was:*\n";

$textEditor->restore($history->get(2));
echo $textEditor->getState();

function showAndSave(string $line)
{
    global $textEditor;
    global $history;

    $textEditor->setState($line);
    echo $textEditor->getState();
    $history->add($textEditor);
}
?>