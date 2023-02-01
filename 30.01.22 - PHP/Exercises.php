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
    
    
    ?>
</body>
</html>