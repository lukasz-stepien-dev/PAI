<?php
declare(strict_types = 1);
function vehicle_register(?String $numer = '') : string|bool
{
    $reg = [
        "B" => "podlaskie",
        "D" => "dolnoslaskie",
        "E" => "lodzkie",
        "F" => "lubuskie",
        "G" => "pomorskie",
        "K" => "malopolskie",
        "L" => "lubelskie",
        "N" => "warminsko-mazurskie",
        "O" => "opolskie",
        "P" => "wielkopolskie",
        "R" => "podkarpackie",
        "S" => "slaskie",
        "T" => "swietokrzyskie",
        "W" => "mazowieckie",
        "Z" => "zachodnipomorskie"
    ];
    $prefix = mb_strtoupper(mb_substr($numer, 0 ,1));
    return isset($reg[$prefix]) ? (string)$reg[$prefix] : (bool)false;
}

