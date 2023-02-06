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
    // Polecenie: Która zmienna jest wieksza?
    /* Ex.1
    $a = 9;
    $b = 8;
    if ($a > $b) 
        echo "Zmienna a=$a jest wieksze od b=$b";
    else if ($a < $b) 
        echo "Zmienna a=$a jest mniejsze od b=$b";
    else    
        echo "Zmienna a=$a jest równa od b=$b<br>";

    // Czy trójkąt może zostać zbudowany
    $a = 5;
    $b = 4;
    $c = 4;
    if (!($a+$b>$c && $a+$c>$b && $b+$c>$a)) {
        echo "Trójkąt o bokach $a, $b, $c nie istnieje.\n";
        echo "</body></html>";
        exit;
    }   
    if ($a == $b || $a == $c || $b == $c)
    echo "Trójkąt o bokach $a, $b, $c jest równoramienny.\n<br>";
    else if ($a**2 + $b**2 == $c**2)
    echo "Trójkąt o bokach $a, $b, $c jest prostokątny.\n<br>";
    else
    echo "Trójkąt o bokach $a, $b, $c jest różnoboczny.\n";
    */
    
    // Ex. 2 getting value from the form
    $height = $_POST['height'];
    if ($height < 110 || $height > 215)
    {
        echo "Błedne dane o wzroscie</body></html>";
        exit;
    }
    echo "<p>Człowiek o wysokości $height to ";
    if ($height < 140)
        echo "karzel</p>";
    elseif ($height < 160)
        echo "niski</p>";
    elseif ($height < 175)
        echo "sredni</p>";
    elseif ($height < 190)
        echo "wysoki</p>";
    else 
        echo "olbrzym</p>";
    
    // Ex. 3 
    $currenc_converte = 4.72;
    $amount_of_currency = $_POST['currency'];
    $type_of_currency = $_POST['currency-type'];
    if ($type_of_currency == "eu")
        echo "<p>$amount_of_currency euro to ".round($amount_of_currency*$currenc_converte, 2)." pln</p>";
    elseif ($type_of_currency == "pl")
        echo "<p>$amount_of_currency pln to ".round($amount_of_currency/$currenc_converte, 2)." euro</p>";
    
    // Ex. 4
    $n = 50;
    $suma = 0;
    for ($i = 1; $i <= $n; $i++)
    {
        $suma += $i;
    }
    echo "<p>Suma licz od 1 do 50 wynosi $suma</p>";
    $suma = 0;
    $i = 1;
    do {
        $suma += $i;
        $i++;
    } while ($i <= 50);
    echo "<p>Suma licz od 1 do 50 wynosi $suma</p>";
    $suma = 0;
    $i = 1;
    while ($i <= 50) {
        $suma += $i;
        $i++;
    }
    echo "<p>Suma licz od 1 do 50 wynosi $suma</p>";

    // Ex.5
    $first = $_POST['first'];
    $second = $_POST['second'];
    if ($first > $second)
    {
        echo "<p>";
        for ($i = $first; $i >= $second;  $i--)
        {
            echo "$i ";
        }
        echo "</p>";
    } else
    {
        echo "<p>";
        for ($i = $first; $i <= $second;  $i++)
        {
            echo "$i ";
        }
        echo "</p>";
    }
    ?>
</body>
</html>