<?
include "db_connection.php";

$sql = "SELECT `tytul`, `opis`, `Składniki` FROM przepisy";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<div class='card text-center'>";
    echo "<h3>" . $row['tytul'] . "</h3>";
    echo "<p>" . $row['opis'] . " </p>";
    echo "<p>" . $row['Składniki'] . " </p>";
    echo "<div>";
}

$conn->close();
