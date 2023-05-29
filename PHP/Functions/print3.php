<?php
function myPrint(string $text)
    {
        print($text);
        print PHP_EOL;
    }
myPrint('Funkcja drukuje po raz piewrszy');

function myFunction($callback)
{
    $callback('Funkcja drukuj po raz drugi.');
}
myFunction(myPrint());

$variable = 'Funkcja drukuj po raz trzeci';
$printAge = function ($callback) use ($variable)
{
    $callback($variable);
};
