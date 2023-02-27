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
<h2>Zamówienia klientów</h2>
<?php
@ $file = fopen("orders.txt", 'r');
if (!$file) {
    echo "<p>W tym momencie brak zamówień</p></body></html>";
    exit;
}
while (!feof($file)) {
    $order = fgets($file, 999);
    echo "<p>$order</p>";
}
fclose($file);
?>
</body>
</html>