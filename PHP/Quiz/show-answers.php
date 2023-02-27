<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz o JS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>JavaScript Quiz - Odpowiedzi zostałe przesłane</h1>
<?php
@ $file = file('answers.txt');
$amt_orders = count($file);
if ($amt_orders == 0) {
    echo "<p>W tym momencie brak zamówień</p></body></html>";
    exit;
}

echo "<table>\n";
echo "<tr>
<th>Data zmowienia</th>
<th>Imie</th>
<th>Nazwisko</th>
<th>Wiek</th>
<th>Numer telefonu</th>
<th>Email</th>
<th>Płeć</th>
<th>Miasto zamieszkania</th>
<th>Za pomocą czego deklarujemy zmienna?</th>
<th>Zaznacz zdania prawdziwe o JavaScript.</th>
<th>Napisany kod</th>
<th>Jaki kolor kojarzy ci sie z JavaScriptem?</th>
<th>Wymień wszystkie frameworki i biblioteki JS, które znasz</th>
</tr>";

for ($i = 0; $i < $amt_orders; $i++) {
    $line = explode("\t", $file[$i]);
    echo "<tr>
<td>$line[0]</td>
<td>$line[1]</td>
<td>$line[2]</td>
<td>$line[3]</td>
<td>$line[4]</td>
<td>$line[5]</td>
<td>$line[6]</td>
<td>$line[7]</td>
<td>$line[8]</td>
<td>$line[9]</td>
<td>$line[10]</td>
<td>$line[11]</td>
<td>$line[12]</td>
</tr>";
}
?>
</form>
</body>
</html>