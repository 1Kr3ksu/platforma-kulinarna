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
    <section class=search>
        <form action=" /szukaj" method="get">
            <input type="text" name="query" placeholder="Wyszukaj przepis...">
            <button type="submit">Szukaj</button>
    </section>
    </div>
    <a href="Kulinarny Kącik.php" class="back-button">Powrót </a>
    <section class="Main">

    </section>
    <section class="how-to">

    </section>

    <div class="recipe-container">
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
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="recipe-tile">
                <h3><?php echo $row["tytul"]; ?></h3>
                <p><?php echo $row["opis"]; ?></p>
            </div>
        <?php
        }
        $conn->close();
        ?>
    </div>

</body>

</html>