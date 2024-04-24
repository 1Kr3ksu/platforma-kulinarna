<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Kulinarny-kącik</title>
</head>

<body>


    <header>
        <h1>Witaj w Kulinarnym Kąciku</h1>
    </header>
    <section class="main">
        <h2>Tutaj znajdziesz najlepsze przepisy, które przyjdą ci do głowy!</h2>
        <nav>
            <a href="Przepisy dnia.html">Przepisy dnia</a>
            <a href="Najnowsze Pzepisy.php">Najnowsze przepisy</a>
            <a href="Przepisy.php">Dodaj Przepis</a>


            <form action="/szukaj" method="get">
                <input type="text" name="query" placeholder="Wyszukaj przepis...">
                <button type="submit">Szukaj</button>
            </form>


        </nav>



    </section>

    <main class="flex-container-wrap">

        <?php
        include "display_products.php";
        ?>

    </main>

    <footer>
        <p>&copy; 2024 Kacper Bielawski | Wszelkie Prawa Zastrzeżone | Projekt blog kulinarny</p>
    </footer>


</body>

</html>