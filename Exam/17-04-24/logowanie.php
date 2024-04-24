<?php
$conn = new mysqli('localhost', 'root', '', 'psy');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
<header>
    <h1>Forum wielbicieli psów</h1>
</header>
<aside>
    <img src="obraz.jpg" alt="foksterier">
</aside>
<main>
    <h2>Zapisz się</h2>
    <form action="#" method="post">
        login: <input type="text" name="login"><br>
        hasło: <input type="password" name="haslo"><br>
        powtórz hasło: <input type="password" name="haslo2"><br>
        <input type="submit" value="Zapisz">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sprawdzanie czy wszystkie pola zostały wypełnione
        if (empty($_POST['login']) || empty($_POST['haslo']) || empty($_POST['haslo2'])) {
            echo "<p>Wypełnij wszystkie pola</p>";
        } else {
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $haslo2 = $_POST['haslo2'];

            // Przygotowanie zapytania SQL z użyciem przygotowanych instrukcji
            $stmt = $conn->prepare("SELECT * FROM uzytkownicy WHERE login = ?");
            $stmt->bind_param("s", $login);
            $stmt->execute();
            $result = $stmt->get_result();

            // Sprawdzanie czy użytkownik o podanym loginie już istnieje
            if ($result->num_rows > 0) {
                echo "<p>Login już istnieje w bazie danych, konto nie zostało dodane</p>";
            } elseif ($haslo != $haslo2) {
                echo "<p>Hasła nie są takie same, konto nie zostało dodane</p>";
            } else {
                // Wstawianie nowego użytkownika do bazy danych
                $hashed_password = sha1($haslo);
                $stmt = $conn->prepare("INSERT INTO uzytkownicy (login, haslo) VALUES (?, ?)");
                $stmt->bind_param("ss", $login, $hashed_password);
                if ($stmt->execute()) {
                    echo "<p>Konto zostało dodane</p>";
                } else {
                    echo "<p>Wystąpił błąd podczas dodawania konta</p>";
                }
            }
            $stmt->close();
        }
    }

    ?>
</main>
<main>
    <h2>Zapraszamy wszystkich</h2>
    <ol>
        <li>właścicieli psów</li>
        <li>weterynarzy</li>
        <li>tych, co chcą kupić psa</li>
        <li>tych, co lubią psy</li>
    </ol>
    <a href="regulamin.html">Przeczytaj regulamin forum</a>
</main>
<footer>
Stronę wykonał: Łukasz Stępień
</footer>
</body>
</html>

<?php
$conn->close();