<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Kulinarny-kącik</title>
</head>

<body>
    </form>

    <header>
        <h1>Witaj w Kulinarnym Kąciku</h1>
    </header>
    <section class="main">
        <h2>Tutaj znajdziesz najlepsze przepisy, które przyjdą ci do głowy!</h2>
        <nav>
            <a href="Przepisy dnia.html">Przepisy dnia</a>
            <a href="Najnowsze Pzepisy.html">Najnowsze przepisy</a>

            <form action="/szukaj" method="get">
                <input type="text" name="query" placeholder="Wyszukaj przepis...">
                <button type="submit">Szukaj</button>
            </form>

        </nav>




        <section class="recipe-list">
            <h3>Dostępne przepisy</h3>
            <li><a href="Spaghetti.html">Spaghetti</a></li>
            <li><a href="lasagne.html">Lasagne</a></li>
            <li><a href="Tiramisu.html">Tiramisu</a></li>
            <li><a href="Przepisy dnia.html">Naleśniki</a>
        </section>

        <footer>
            <p>&copy; 2024 Kacper Bielawski | Wszelkie Prawa Zastrzeżone | Projekt blog kulinarny</p>
        </footer>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "platforma_kulinarna";
        
        $conn = new mysqli($servername, $username, $password , $dbname);
        if ($conn->connect_error) {
            die("Połączenie nieudane: " . $conn->connect_error);
        } else {
            echo "Połączenie_udane!";
        }
        $conn->close();
         ?>
</body>

</html>