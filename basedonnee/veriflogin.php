<?php
function getUserData($username, $password, $conn) {

    // Échapper les variables pour éviter les injections SQL
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Requête SQL pour récupérer les données de l'utilisateur
    $sql = "SELECT * FROM utilisateur WHERE username = '$username' AND password = '$password'";

    // Exécution de la requête
    $result = $conn->query($sql);

    // Vérification des erreurs de requête
    if (!$result) {
        die("Erreur de requête : " . $conn->error);
    }

    // Vérification si l'utilisateur existe
    if ($result->num_rows == 1) {
        // Récupération des données de l'utilisateur
        $userData = $result->fetch_assoc();

        // Fermeture de la connexion à la base de données
        $conn->close();

        // Retour des données de l'utilisateur
        return $userData;
    } else {
        // Fermeture de la connexion à la base de données
        $conn->close();

        // Retourner null si l'utilisateur n'existe pas
        return null;
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "offemploi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

$username = $_POST["user"];
$password = $_POST["pass"];

// Requête SQL pour vérifier l'existence de l'utilisateur
$sql = "SELECT * FROM utilisateur WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $userData = getUserData($username, $password, $conn);
    session_start();
    $_SESSION['id'] = $userData['id'];
    $_SESSION['fullname'] = $userData['fullname'];
    $_SESSION['username'] = $userData['username'];
    $_SESSION['email'] = $userData['email'];
    $_SESSION['phonenum'] = $userData['phonenum'];
    header("Location: ../home.php");
    exit();
} else {
    header("Location: ../login.php?error=notexit");
}

$conn->close();
?>
