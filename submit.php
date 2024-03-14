

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
         
// pobranie danych z formularza
$title = $_POST['title'];
$description = $_POST['description'];
// przygotowanie kwerendy

// wykonanie kwerendy

// zamknięcie połączenia z db
?>