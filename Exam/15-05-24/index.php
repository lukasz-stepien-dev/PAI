<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section><img src="klaps.png" alt="Nasze filmy"></section>
    <section><h1>BAZA FILMÓW</h1></section>
    <section>
        <form action="#" method="post">
            <select name="films" id="films">
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="animacja">animacja</option>
                <option value="dramat">dramat</option>
                <option value="horror">horror</option>
                <option value="komedia">komedia</option>
            </select>
            <input type="submit" value="Filmy">
        </form>
    </section>
    <section><img src="gwiezdneWojny.jpg" alt="szturmowcy"></section>
    <aside>
        <h2>Wybrano filmy:</h2>
        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'dane');
        if (isset($_POST['films']))
        {
            $results = mysqli_query($connect, "SELECT filmy.tytul, filmy.rok, filmy.ocena FROM filmy, gatunki WHERE gatunki.nazwa = '".$_POST['films']."' AND filmy.gatunki_id = gatunki.id;");
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<p>Tytuł: ".$row['tytul'].", Rok produkcji: ".$row['rok'].", Ocena: ".$row['ocena']."</p>";
            }
        }
        ?>
    </aside>
    <main>
        <h2>Wszystkie filmy</h2>
        <?php
        $all = mysqli_query($connect, "SELECT * FROM filmy");
        while ($row = mysqli_fetch_assoc($all)) {
            echo "<p>".$row['id'].". ".$row['tytul'].", reżyseria: ".$row['imie']." ".$row['nazwisko']."</p>";
        }
        mysqli_close($connect)
        ?>
    </main>
    <footer>
        <p>Autor: Łukasz Stępień</p>
        <a href="kwerendy.txt">Zapytania do bazy</a>
        <a target="_blank" href="filmy.pl" target="_blank">Przejdź do filmy.pl</a>
    </footer>
</body>
</html>