

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platforma_kulinarna";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
} else {
}



$title = $_POST['title'];
$description = $_POST['description'];
$photo = $_POST["photo"];

$sql = "INSERT INTO przepisy(tytul, opis) VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Gratulacje! Dodałeś przepis!";
} else {
    echo "Coś poszło nie tak!";
}

$conn->close();
?>