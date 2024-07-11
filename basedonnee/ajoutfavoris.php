<?php
// Fonction pour ajouter un emploi aux favoris

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "offemploi";

    // Créer une connexion à la base de données
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Vérifier si la connexion a échoué
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué: " . $conn->connect_error);
    }
// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO favoris (userid, offreid) VALUES (?, ?)");
session_start();
$userid = $_SESSION['id'];
$offreid = $_GET['id'];
// Bind the parameters and execute the statement
$stmt->bind_param("ii", $userid, $offreid);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    header("Location: ../favoris.php");
} else {
    echo "Error inserting values: " . $conn->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();

?>