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
echo "<p>";
for ($i = 0; $i < 100; $i++) {
    $my_array[$i] = rand(1, 100);
    echo "$my_array[$i] ";
}

echo "</p>";
sort($my_array);
echo "<p>Posortowana tablica</p>";
for ($i = 0; $i < 100; $i++) {
    echo "$my_array[$i] ";
}

rsort($my_array);
echo "<p>Posortowana tablica malejąco</p>";
for ($i = 0; $i < 100; $i++) {
    echo "$my_array[$i] ";
}

$total = 0;
for ($i = 0; $i < 100; $i++)
    $total += $my_array[$i];
echo "<p>Suma wynosi $total</p>";
$avg = $total/100;
echo "<p>Średnia wynosi $avg</p>";

$total_even = 0;
for ($i = 0; $i < 100; $i++)
{
    for ($i = 0; $i < 100; $i++)
    {
        if ($my_array[$i] % 2 == 0)
            $total_even++;
    }

}
echo "<p>Licza liczb parzystych $total_even</p>";
?>
</body>
</html>