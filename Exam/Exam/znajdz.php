<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
</head>
<body>
<header>
    <h1>Grupa Polskich Kwiaciarni</h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li><a href="index.html">Strona Główna</a></li>
        <li><a href="http://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a></li>
        <li>
            <a href="znajdz.php">Znajdź kwiaciarnię</a>
            <ol>
                <li>w Warszawie</li>
                <li>w Malborku</li>
                <li>w Poznaniu</li>
            </ol>
        </li>
    </ul>
</aside>
<main>
    <h2>Znajdź kwiaciarnię</h2>
    <form method="POST">
        <label for="city">Podaj nazwę miasta:</label>
        <input type="text" id="city" name="city">
        <input type="submit" value="SPRAWDŹ">
    </form>
</main>
<footer>
    <p>Stronę opracował: Łukasz Stępień</p>
</footer>
</body>
</html>