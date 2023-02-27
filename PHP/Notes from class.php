<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //Zmienne i stałe
    define("imie", "nazwisko");
    const rok = 1991;
    $zawod = "informatyk";
    $wiek  = 31;
    print(imie."<br>");
    print($zawod."<br>\n");
    print("rocznik - ".rok."<br>");
    print($wiek."lat <br>");

    echo "<hr>";

    // Operatory
    $a = 4;
    $b = 2;
    $total = $a + $b;
    $wyr = (($a+$b) * $b) / (($a+$b) / ($a-$b));
    $pierwiastek = sqrt($a);
    $potega = $a**$b;
    echo "Suma liczb wynosi $total<br>";
    echo "Wartość wyrażenia wynosi $wyr<br>";
    echo "Pierwiastek wynosi $pierwiastek<br>";
    echo "Potega wynosi $potega<br>";
    ?>
</body>
</html>