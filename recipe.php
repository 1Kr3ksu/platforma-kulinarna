<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przepisy</title>
    <link rel="stylesheet" href="recipe.css">
</head>

<body>
    <header>
        <h1>Przepisy !</h1>
    </header>
    <a href="Kulinarny Kącik.php" class="back-button">Powrót </a>
    <section class="main">

        <img src="" alt="" width="700" height="400">
        <?php
        include "db_connection.php";

        $recipe_id = $_GET['id'];
        $sql = "SELECT * FROM przepisy WHERE id = $recipe_id";

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        ?>
        <div class="recipe-tile">
            <h3><?php echo $row["tytul"]; ?></h3>
            <p><?php echo $row["opis"]; ?></p>
        </div>

    </section>
</body>



</html>