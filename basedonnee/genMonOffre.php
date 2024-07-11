<?php 
    session_start();
    $usrid = $_SESSION["id"];
    function selectEmploiByUserId($usrid) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "offemploi";
    
        // Create a connection to the database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check if the connection failed
        if ($conn->connect_error) {
            die("Connection to the database failed: " . $conn->connect_error);
        }
    
        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT * FROM emploi WHERE userid = ?");
        // Bind the parameter and execute the statement
        $stmt->bind_param("i", $usrid);
        $stmt->execute();
    
        // Get the result set
        $result = $stmt->get_result();
        $offres = array();
    
        // Check if there are any rows
        if ($result->num_rows > 0) {
            // Loop through the rows and add them to the array
            while ($row = $result->fetch_assoc()) {
                $offres[] = $row;
            }
        }
    
        // Close the statement and database connection
        $stmt->close();
        $conn->close();
    
        return $offres;
    }
    function generateCardHTML($title, $imgUrl, $description, $idem) {
        $html = '
        <div class="col">
          <div class="card shadow-sm">
            <img src="'.$imgUrl.'" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="card-body">
              <p class="card-text">' . $description . '</p>
              <div class="d-flex justify-content-between align-items-center">
              <style>
              .card-body a {
                  color: inherit;
                  text-decoration: none;
                }
                </style>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-warning"><i class="bi bi-pen m-1"></i>Modifier</button>
                  <button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash m-1"></i><a href="basedonnee/deleteOffre.php?ide='.$idem.'">Supprimer</a></button>
                </div>
                <small class="text-muted">' . $title . '</small>
              </div>
            </div>
          </div>
        </div>';
    
        return $html;
    }
    
    function generateCards(){
           
            $usrid = $_SESSION["id"];
            $offre = selectEmploiByUserId($usrid);
            foreach($offre as $offres){
            $title = $offres["titre"];
            $img_url = $offres["image"];
            $description = $offres["description"];
            $idem = $offres["ide"];
            $h = generateCardHTML($title, $img_url, $description,$idem);
            echo $h;
        }
    }
    
?>