
<?php
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenum = $_POST['phonenum'];
    $password = $_POST['password'];
    $servername = "localhost";
    $username_db = "root"; 
    $password_db = ""; 
    $dbname = "offemploi";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["fullname"])) {
            
            

            $sql = "SELECT * FROM utilisateur";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Loop through each row and retrieve its column values
                while ($row = $result->fetch_assoc()) {
                    $check_email = $row["email"];
                    if($check_email === $email){
                        header("Location: ../login.php?error=exist");
                        exit();
                    }}
                    $sql = "INSERT INTO utilisateur (fullname, username, email, phonenum, password)
                    VALUES ('$fullname', '$username', '$email', $phonenum, '$password')";
                    if ($conn->query($sql) === TRUE) {
                        header("Location: ../home.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

            } else {
                $sql = "INSERT INTO utilisateur (fullname, username, email, phonenum, password)
                VALUES ('$fullname', '$username', '$email', $phonenum, '$password')";
                if ($conn->query($sql) === TRUE) {
                    header("Location: ../home.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
    }
    $conn->close();
    ?>