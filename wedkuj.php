<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl1.css">
</head>

<body>
    <header>
        <h1>Portal dla Wędkarzy</h1>
    </header>
    <div id="left">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
            $kw = mysqli_query($conn, "SELECT `nazwa`, `wystepowanie` FROM `Ryby`");
            foreach ($kw as $result) {
                echo "<li>" . $result["nazwa"] . ",  Występowanie: " . $result["wystepowanie"] . "</li>";
            }
            ;
            mysqli_close($conn);
            ?>
        </ul>
    </div>
    <div id="right">
        <img src="ryba1.jpg" alt="Sum"> <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer>
        <p>Stronę wykonał: Stanisław Fiedoruk 4J</p>
    </footer>
</body>

</html>