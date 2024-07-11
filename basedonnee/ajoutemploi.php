<?php
// Fonction pour insérer un emploi pour un utilisateur connecté

    // Remplacez les valeurs suivantes par les informations de connexion à votre base de données
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
    session_start();
    $conn = new mysqli($servername, $username, $password, $dbname);
    $titre = $_POST['titre'];
    $image = $_POST['image'];
    $numtel =  $_SESSION['phonenum'];
    $placesdispo = $_POST['placesdispo'];
    $adresse = $_POST['adresse'];
    $description = $_POST['description'];
    $email_utilisateur = $_SESSION['email']; // Remplacez par l'email de l'utilisateur connecté
    $responsable = $_SESSION['username'] ; // Remplacez par l'identifiant du responsable de l'emploi
    $usrid = $_SESSION['id'];
    // Préparer la requête d'insertion
    $sql = "INSERT INTO emploi (titre, image, numtel, email, placesdispo, adresse, description, responsable,userid)
            VALUES ('$titre', '$image', '$numtel', '$email_utilisateur', '$placesdispo', '$adresse', '$description', '$responsable','$usrid')";

    // Exécuter la requête d'insertion
    if ($conn->query($sql) === TRUE) {
        header("Location: ../home.php");
    } else {
        echo "Erreur lors de l'insertion de l'emploi: " . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
?>