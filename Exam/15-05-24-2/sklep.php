<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <section id="left"><h1>Internetowy sklep z eko-warzywami</h1></section>
    <section id="right">
        <ul>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a target="_blank" href="https://terapiasokami.pl/">soki</a></li>
        </ul>
    </section>
    <main>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "dane2");
        $result = mysqli_query($conn, "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE produkty.Rodzaje_id = 1 OR produkty.Rodzaje_id = 2;");
        
        while ($row = mysqli_fetch_array($result))
        {
            echo '<section class="product">';
            echo '<img alt="warzywniak" src="'.$row['zdjecie'].'"> </img>';
            echo '<h5>'.$row['nazwa'].'</h5>';
            echo '<p>opis: '.$row['opis'].'</p>';
            echo '<p>na stanie: '.$row['ilosc'].'</p>';
            echo '<h2>'.$row['cena'].'</h2>';
            echo '</section>';
        }
        mysqli_close($conn);
        ?>
    </main>
    <footer>
        <form action="#" method="post">
            Nazwa:
            <input name="name" type="text">
            Cena:
            <input name="price" type="number">
            <input type="submit" value="Dodaj produkt">
        </form>
        Stronę wykonał: Łukasz Stępień
    </footer>
    <?php
    if (isset($_POST))
    {
        $connQuery = mysqli_connect("localhost", "root", "", "dane2");
        mysqli_query($connQuery, "INSERT INTO produkty (Rodzaje_id, Producenci_id, nazwa, ilosc, opis, cena, zdjecie) VALUES
        (1, 4, '".$_POST['name']."', 10, '', ".$_POST['price'].", 'owoce.jpg');");
        mysqli_close($connQuery);
    }
    ?>
</body>
</html>