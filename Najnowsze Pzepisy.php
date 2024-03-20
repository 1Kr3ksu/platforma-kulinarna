<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kulinarny-Kącik</title>
    <link rel="stylesheet" href="Najnowsze Przepisy.css">
</head>

<body>
    <header>
        <h1>Tutaj znajdują się najnowsze przepisy! </h1>
    </header>
    <form action="/szukaj" method="get">
        <input type="text" name="query" placeholder="Wyszukaj przepis...">
        <button type="submit">Szukaj</button>
    </form>
    <a href="Kulinarny Kącik.html" class="back-button">Powrót </a>
    <section class="Main">

    </section>
    <section class="how-to">

    </section>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "platforma_kulinarna";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Połączenie nieudane: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM przepisy";

    $result = $conn->query($sql);
    echo "<ol>";
    while ($row = $result->fetch_assoc()) {

        echo "<li>" . $row["tytul"] . "</li>";
    }
    echo "</ol>";
    $conn->close();
    ?>
</body>

</html>