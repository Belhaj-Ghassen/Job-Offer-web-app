<?php
    function generateCardHTML($title, $content, $imgurl, $idf,$nbplace) {
        $html = '
      
        <div class="col">
            <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="'.$imgurl .' ">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </img>
                <style>
                .card-body a {
                    color: inherit;
                    text-decoration: none;
                  }
                  </style>
                <div class="card-body">
                    <p class="card-text">' . $content . '</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            
                            <button type="button" class="btn btn-sm btn-outline-secondary"> <a href="basedonnee/delfav.php?idf='.$idf.'">Retirer</a></button>
                        </div>
                        <small class="text-muted">' . $nbplace . '</small>
                    </div>
                </div>
            </div>
        </div>';
    
        return $html;
    }
    function selectEmploiByIdf($idf) {
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
        $stmt = $conn->prepare("SELECT * FROM emploi WHERE ide = ?");
    
        // Bind the parameter and execute the statement
        $stmt->bind_param("i", $idf);
        $stmt->execute();
    
        // Get the result set
        $result = $stmt->get_result();
        $off = array();
        // Check if there are any rows
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                $off[] = $row;
            }
        } else {
            echo "No rows found.";
        }
    
        // Close the statement and database connection
        $stmt->close();
        $conn->close();
        return $off;
    }
    function getOffreIdByUserId(){
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
        $stmt = $conn->prepare("SELECT * FROM favoris WHERE userid = ?");
        session_start();
        $userid = $_SESSION["id"];
        // Bind the parameter and execute the statement
        $stmt->bind_param("i", $userid);
        $stmt->execute();
    
        // Get the result set
        $result = $stmt->get_result();
        $offid = array();
        // Check if there are any rows
        if ($result->num_rows > 0) {
            // Loop through the rows and process the data
            while ($row = $result->fetch_assoc()) {
                
                $idf = $row['offreid'];
                $offid[] = $idf;
                
            }
        } 
    
        // Close the statement and database connection
        $stmt->close();
        $conn->close();
        return $offid;
    }
    function genCard(){
        $idoff = getOffreIdByUserId();

        foreach($idoff as $i){
            $offre = selectEmploiByIdf($i);
            $title = $offre[0]["titre"];
            $content = $offre[0]["description"];
            $imgurl = $offre[0]["image"];
            $nbplace = $offre[0]["placesdispo"];
            $h = generateCardHTML($title,$content,$imgurl,$i,$nbplace);
            echo $h;
        }
    }
?>




