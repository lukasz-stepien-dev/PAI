<?php
declare(strict_types = 1);
function calcStatsYears(int $start, int $end, ?bool $print = true) : int
{
    $days = ($end - $start) * 365;
    $hours = $days * 24;
    $mins = $hours * 60;
    $secs = $mins * 60;
    if ($print == true)
    {
        print "Od poczatku roku $start do konca roku $end jest:".PHP_EOL;
        print "$days dni, $hours godzin, $mins minut i $secs sekund!".PHP_EOL;
    }
    return (int) $secs;
}
$sec1 = calcStatsYears(start: 1901, end: 2001, print: true);
$sec2 = calcStatsYears(end: 2019, start: 2001);
print "Razem sekund: ".($sec1 + $sec2);