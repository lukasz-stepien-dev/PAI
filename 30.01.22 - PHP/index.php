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
    echo "Hello World\n<br>"; // Wysyłanie pliku do przegladarki
    /*
    Tak wygląda komentarz wielkolinijkowys
    */

    // Welcome
    // Variablex and types
    $name = "Łukasz";
    $age = 20;
    $x = 9;
    $y = 19;
    $sum = $x + $y;
    echo "Hello $name! You're $age years old.\n<br>";
    echo "Let's sum $x and $y! It equal $sum<br>";

    // Simple arrays
    $numbers = [1, 2, 3, 4, 5, 11, 12, 90];
    $numbers[5] = 1100; // Will change the 6th item
    unset($numbers[0]); // Will remove the 1st item
    echo "\nAmount values of the array: ".count($numbers); // Will count amount of array
    echo "\n<br>First item of the array is ".reset($numbers); // Will show 1st item of the array;
    echo "\n<br>Last item of the array is ".end($numbers); // Will show last item of the array;
    echo "\n<br>Fouth item of the array is $numbers[3]"; // Will show fouth item of the array;
    echo "\n<br>Last index of the array is ".(count($numbers) - 1); // Wil show last index of the array
    array_push($numbers, 6); // Push a member to the end of the array;
    array_pop($numbers); // Pop a member of the end of the array
    ?>
</body>
</html>