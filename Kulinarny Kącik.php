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
            <a href="Najnowsze Pzepisy.php">Najnowsze przepisy</a>
            <a href="Przepisy.php">Przepisy</a>

            <form action="/szukaj" method="get">
                <input type="text" name="query" placeholder="Wyszukaj przepis...">
                <button type="submit">Szukaj</button>
            </form>

        </nav>




        <section class="recipe-list">
            <h3>Dostępne przepisy</h3>

            <!-- <li><a href="Spaghetti.html">Spaghetti</a></li>
            <li><a href="lasagne.html">Lasagne</a></li>
            <li><a href="Tiramisu.html">Tiramisu</a></li>
            <li><a href="Przepisy dnia.html">Naleśniki</a> -->

            <?php
            include "db_connection.php";

            $sql = "SELECT ID , tytul FROM przepisy";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // echo "<article>";
                    // echo "<h4>" . $row["tytul"] . "</h4>";
                    // echo "<p>" . $row["opis"] . "</p>";
                    // echo "<a href='recipe.php?id=" . $row["ID"] . ">Czytaj więcej</a>";
                    // echo "</article>";

                    echo "<li><a href='recipe.php?id=" . $row["ID"] . "'>" . $row["tytul"] . "</a></li>";
                }
            } else {
                die("Brak przepisów w bazie danych.");
            }
            ?>
        </section>

        <footer>
            <p>&copy; 2024 Kacper Bielawski | Wszelkie Prawa Zastrzeżone | Projekt blog kulinarny</p>
        </footer>
    </section>
</body>

</html>