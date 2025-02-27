<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
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
        <form method="post" action="basedonnee/insertuser.php">
            <h1 class="h3 mb-3 fw-normal">Créer votre compte</h1>

            <div class="form-floating mb-2">
                <input required type="text" class="form-control" id="fullname" name="fullname">
                <label for="fullname">Nom et prénom</label>
            </div>
            <div class="form-floating mb-2">
                <input required type="text" class="form-control" id="username" name="username">
                <label for="username">Nom d'utilisateur</label>
            </div>
            <div class="form-floating mb-2">
                <input required type="email" class="form-control" id="email" name="email">
                <label for="email">E-mail</label>
            </div>
            </div>
            <div class="form-floating mb-2">
                <input required type="tel" class="form-control" id="phone" name="phonenum">
                <label for="phone">Numéro de téléphone</label>
            </div>
            <div class="form-floating">
                <input required type="password" class="form-control" id="password" name="password" >
                <label for="password">Mot de passe</label>
            </div>
            
            <div class="form-check form-switch mb-2">
                <input  class="form-check-input" type="checkbox" role="switch" id="isEnterprise">
                <label class="form-check-label" for="isEnterprise">Vous représenter une société</label>
            </div>


            Vous avez déja un compte ? <a href="/login.html">Se connecter</a>
        
            <button class="w-100 btn btn-lg btn-primary" >S'inscrire</button>
            <p class="mt-5 mb-3 text-muted">© 2023</p>
        </form>
    </main>
</body>

</html>