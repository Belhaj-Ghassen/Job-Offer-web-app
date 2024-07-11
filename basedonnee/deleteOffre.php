<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "offemploi";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM emploi WHERE ide = ?");
    $ide = $_GET["ide"];
    // Bind the parameter and execute the statement
    $stmt->bind_param("i", $ide);
    $stmt->execute();

    // Check if any rows were affected
    if ($stmt->affected_rows > 0) {
        header('Location: ../my_offres.php');
    } else {
        echo "No rows deleted.";
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
?>