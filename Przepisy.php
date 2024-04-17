<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wasze-Przepisy!</title>
    <link rel="stylesheet" href="Najnowsze przepisy.css">
</head>

<body>
    <header>
        <h1>Tutaj Dodasz Własne przepisy!</h1>
        <a href="Kulinarny Kącik.php" class="back-button">Powrót </a>
    </header>
    <h2>Dodaj swój przepis</h2>
    <form id="kacper-form" action="submit.php" method="POST">
        <input type="text" name="title" placeholder="Tytuł">
        <br>
        <input type="text" name="description" placeholder="Opis">
        <br>
        <input type="text" name="description" placeholder="Składniki">
        <br>


        <select name="category" class="category">
            <option value="breakfast">Śniadanie</option>
            <option value="lunch">Obiad</option>
            <option value="dessert">Deser</option>
        </select>
        <button type="submit">Dodaj</button>
    </form>

</body>

</html>