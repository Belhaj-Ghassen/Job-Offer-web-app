<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="./assets/style/bootstrap.min.css.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./assets/script/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <link href="./assets/style/login.css" rel="stylesheet">
        <style>
            body {
                background-image: url('assets/images/backgrnd.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
            }
        </style>
</head>

<body class="text-center">

    <main class="form-signin">
        <?php 
            if(isset($_GET["error"])&&($_GET["error"]==="exist")){
        ?>      <div class="alert alert-danger" role="alert">
                    Email existe déja!
                </div>
            
            <?php }
            ?>
            
        <form action="basedonnee/veriflogin.php" method="post" > 
            
            <h1 class="h3 mb-3 fw-normal">Merci de vous connecter</h1>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="username" placeholder="name@example.com" name="user">
                <label for="username">Nom d'utilisateur</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
                <label for="password">Mot de passe</label>
            </div>

            Vous n'avez pas de compte ? <a href="register.php">S'inscrire</a>
        
            <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
            <p class="mt-5 mb-3 text-muted">© 2023</p>
        </form>
    </main>
</body>

</html>