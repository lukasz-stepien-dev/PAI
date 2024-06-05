<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokoje</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header><h2>WYNAJEM POKOI</h2></header>
    <nav>
        <section class="menu1"><a href="index.html">POKOJE</a></section>
        <section class="menu2"><a href="cennik.php">CENNIK</a></section>
        <section class="menu3"><a href="kalkulator.html">KALKULATOR</a></section>
        <section></section>
    </nav>
    <main>
        <section class="left"></section>
        <section class="middle">
            <h1>Cennik</h1>
            <?php
            $conn = mysqli_connect("localhost","root","","wynajem");
            $results = mysqli_query($conn, "SELECT * FROM pokoje;");
            while ($row = mysqli_fetch_array($results)) {
                echo "<table>";
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nazwa']."</td>";
                echo "<td>".$row['cena']."</td>";
                echo "</tr>";
                echo "</table>";
            }

            mysqli_close( $conn );
            ?>
        </section>
        <section class="right"></section>
    </main>
    <footer>Stronę opracował: Łukasz Stępień</footer>
</body>
</html>