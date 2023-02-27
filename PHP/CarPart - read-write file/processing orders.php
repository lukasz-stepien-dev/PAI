<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyniki zamówień</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$tires = intval($_GET['amount_of_tires']);
$oil = intval($_GET['amount_of_oil']);
$sparks = intval($_GET['amount_of_sparks']);
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
if (($tires + $oil + $sparks) > 0) {
    echo "<p>Zamówienie wygląda następująco</p>";
    if ($tires > 0)
        echo "<p>Ilość opon: $tires</p>";
    if ($oil > 0)
        echo "<p>Ilość oleju: $oil</p>";
    if ($sparks > 0)
        echo "<p>Ilość swiec: $sparks</p>";
}
echo "<p>Nazwisko: $last_name</p>";
echo "<p>Imie: $first_name</p>";

define('TIRESPRICE', 300);
define('OILPRICE', 100);
define('SPARKSPRICE', 80);

$value = ($tires * TIRESPRICE) + ($oil * OILPRICE) + ($sparks * SPARKSPRICE);
echo "<p>Wartość zamowienia netto $value</p>";
$vat = 0.23;
$value *= (1 + $vat);
echo "<p>Cena brutto: " . number_format($value, 2) . "PLN</p>";

@ $file = fopen("orders.txt", 'a');
if (!$file) {
    echo "<p> W tym momencie nie można zapisac zamowienia. Spróbuj później.</p></html></body>";
    exit;
}
$date = date("H:i, jS F");
echo "<p>Zamówienie przyjętę o<br />$date</p>";
$output = "$date\t$tires opon\t$oil butelek oleju\t$sparks swiec\t$value PLN\t$first_name\t$last_name\n";

fwrite($file, $output);
fclose($file);
?>
</body>
</html>