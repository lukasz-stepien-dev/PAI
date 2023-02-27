<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamówienia klientów</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Read all file
$orders = file("orders.txt");

// count orders
$amt_orders = count($orders);
if ($amt_orders == 0) {
    echo "<p>Brak zamówień.</p></body><html>";
    exit;
}

// Table Header
echo "<table>\n";
echo "<tr>
<th>Data zmowienia</th>
<th>Opony</th>
<th>Olej</th>
<th>Świece zapłonowe</th>
<th>Wartość</th>
<th>Imie</th>
<th>Nazwisko</th>
</tr>";

// Sums
$amt_tires = 0;
$amt_oil = 0;
$amt_sparks = 0;
$amt_value = 0;
$amt_customers = 0;

for ($i = 0; $i < $amt_orders; $i++) {
    $line = explode("\t", $orders[$i]);

    // Reading amount of products
    $line[1] = intval($line[1]);
    $line[2] = intval($line[2]);
    $line[3] = intval($line[3]);

    // Put details to table
    echo "<tr>
    <td>$line[0]</td>
    <td>$line[1]</td>
    <td>$line[2]</td>
    <td>$line[3]</td>
    <td>$line[4]</td>
    <td>$line[5]</td>
    <td>$line[6]</td>
    </tr>";

    // Summing
    $amt_tires += $line[1];
    $amt_oil += $line[2];
    $amt_sparks += $line[3];
    $amt_value += intval($line[4]);
    $amt_customers++;

}
echo "<tr>
<td>Suma</td>
<td>$amt_tires</td>
<td>$amt_oil</td>
<td>$amt_sparks</td>
<td>$amt_value PLN</td>
<td>$amt_customers</td>
</tr>";
echo "<table>";
?>
</body>
</html>
