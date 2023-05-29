<?php
require_once "calculator.php";
$numb = "EY 1234";
$voivo = vehicle_register(numer: $numb);

if ($voivo !== false)
{
    print "Rejestracja pojazdu $numb to wojewodztwo $voivo";
}
else
{
    print "Wpisz poprawnie numer rejestracyjnt pojazdu";
}