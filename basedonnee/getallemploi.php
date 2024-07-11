<?php
// Fonction pour afficher tous les emplois de la table "emploi"
function afficherTousLesEmplois() {
    // Remplacez les valeurs suivantes par les informations de connexion à votre base de données
    $servername = "localhost";
    $username = "votre_nom_utilisateur";
    $password = "votre_mot_de_passe";
    $dbname = "nom_de_votre_base_de_donnees";

    // Créer une connexion à la base de données
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier si la connexion a échoué
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué: " . $conn->connect_error);
    }

    // Préparer la requête de sélection de tous les emplois
    $sql = "SELECT * FROM emploi";

    // Exécuter la requête de sélection
    $result = $conn->query($sql);

    // Vérifier s'il y a des résultats
    if ($result->num_rows > 0) {
        // Parcourir les résultats et afficher les informations de chaque emploi
        while ($row = $result->fetch_assoc()) {
            echo "Titre : " . $row["titre"] . "<br>";
            echo "Image : " . $row["image"] . "<br>";
            echo "Numéro de téléphone : " . $row["numtel"] . "<br>";
            echo "Places disponibles : " . $row["placesdispo"] . "<br>";
            echo "Adresse : " . $row["adresse"] . "<br>";
            echo "Description : " . $row["description"] . "<br>";
            echo "Responsable : " . $row["responsable"] . "<br>";
            echo "<hr>"; // Ligne de séparation entre chaque emploi
        }
    } else {
        echo "Aucun emploi trouvé dans la table 'emploi'.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
}

function generateEmploiCard($ide, $titre, $image, $numtel, $email, $placedispo, $adresse, $description, $responsable) {
    $html = '<div class="col">';
    $html .= '<div class="card shadow-sm">';
    $html .= '<img src="' . $image . '" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">';
    $html .= '<div class="card-body">';
    $html .= '<h5 class="card-title">' . $titre . '</h5>';
    $html .= '<p class="card-text">' . $description . '</p>';
    $html .= '<div class="d-flex justify-content-between align-items-center">';
    $html .= '<div class="btn-group">';
    $html .= '<style>.card-body a { color: inherit;  text-decoration: none; } </style>';
    $html .= '<button type="button" class="btn btn-sm btn-outline-secondary"><a href = "basedonnee/ajoutfavoris.php?id='.$ide.'">Ajouter en favoris</a></button>';
    $html .= '</div>';
    $html .= '<small class="text-muted">' . $responsable . '</small>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}


function getTableColumns($tableName) {
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

    // Query to retrieve table columns
    $sql = "SHOW COLUMNS FROM $tableName";

    // Execute the query
    $result = $conn->query($sql);

    // Store column names in an array
    $columns = array();

    // Check if the query was successful
    if ($result) {
        // Loop through the result set and fetch column names
        while ($row = $result->fetch_assoc()) {
            $columns[] = $row['Field'];
        }
    } else {
        echo "Error retrieving columns: " . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Return the column names
    return $columns;
}

function generateCardsFromTable($tableName) {
    
    $columns = getTableColumns($tableName);

    // Connect to the database
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

    // Query to retrieve all rows from the table
    $sql = "SELECT * FROM $tableName";

    // Execute the query
    $result = $conn->query($sql);

    // Check if there are any rows
    if ($result->num_rows > 0) {
        // Loop through the rows and generate the cards
        while ($row = $result->fetch_assoc()) {
            // Generate the card using generateEmploiCard() function
            $cardHtml = generateEmploiCard($row['ide'], $row['titre'], $row['image'], $row['numtel'], $row['email'], $row['placesdispo'], $row['adresse'], $row['description'], $row['responsable']);

            // Output the generated card HTML
            echo $cardHtml;
        }
    } else {
        echo "No rows found in the table.";
    }

    // Close the database connection
    $conn->close();
}
?>





