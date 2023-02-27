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
$date = date("H:i, jS F");
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$age = $_GET['age'];
$phone = $_GET['phone_number'];
$email = $_GET['email'];
$gender = $_GET['gender'];
$city = $_GET['city'];

$q1 = $_GET['q1'];
$q2 = $_GET['q2'];
$q3 = $_GET['q3'];
$q4 = $_GET['q4'];
$q5 = $_GET['q5'];

echo "<p>Data przesłania odpowiedzi: $date</p>";
echo "<p>Imie: $first_name</p>";
echo "<p>Nazwisko: $last_name</p>";
echo "<p>Wiek: $age</p>";
echo "<p>Telefon: $phone</p>";
echo "<p>Email: $email</p>";
echo "<p>Miasto zamieszkania: $city</p>";
echo "<p>Pytanie 1: $q1</p>";
echo "<p>Pytanie 2: $q2</p>";
echo "<p>Pytanie 3: $q3</p>";
echo "<p>Pytanie 4: $q4</p>";
echo "<p>Pytanie 5: $q5</p>";

@ $file = fopen("answers.txt", 'a');
if (!$file) {
    echo "<p> W tym momencie nie można zapisac odpowiedzi. Spróbuj później.</p></html></body>";
    exit;
}
$output = "$date\t$first_name\t$last_name\t$age\t$phone\t$email\t$gender\t$city\t$q1\t$q2\t$q3\t$q4\t$q5";

fwrite($file, $output);
fclose($file);
?>
</form>
</body>
</html>