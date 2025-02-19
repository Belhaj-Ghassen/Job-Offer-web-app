<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link href="./assets/style/bootstrap.min.css.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./assets/script/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <header class="p-3 mb-3 border-bottom bg-light">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="home.php" class="nav-link px-2 link-secondary">Acceuil</a></li>
                    <li><a href="offres.php" class="nav-link px-2 link-dark">Offres disponible</a></li>
                    <li><a href="favoris.php" class="nav-link px-2 link-dark">Favoris</a></li>
                    <li><a href="my_offres.php" class="nav-link px-2 link-dark">Mes offres</a></li>
                </ul>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" >
                        <li><a class="dropdown-item" href="upsert_offre.html">Ajouter une offre</a></li>
                        <li><a class="dropdown-item" href="#">Paramètre</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="login.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-6 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">Bienvenue à offrini</h1>
                <p class="lead">Offrini est une toute nouvelle plateforme visant à fournir une connexion directe entre les entreprises et les chercheurs d'emploi. Avec de simples clics, vous pouvez décrocher votre premier entretien et entrer dans le monde professionnel.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Voir les offres</button>
                </div>
            </div>
              <div class="col-lg-4 offset-lg-1 p-0  shadow-lg">
                  <img class="rounded-lg-3" src="./assets/images/OFFRINI.png" alt="" sizes="100" >
                  <img src="" alt="" sizes="500" srcset="">
                </div>
            </div>
        </div>
        <div class="container marketing">
            
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./assets/images/pasion.jfif">
                
                <h2>Offre d'emploi passionnante</h2>
                <p>Nous recherchons un professionnel dynamique pour rejoindre nos équipe. Postulez dès maintenant !</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./assets/images/stimulante.jpg">
                
                <h2>Opportunité de carrière stimulante</h2>
                <p>Vous êtes à la recherche d'une opportunité de carrière enrichissante dans un environnement innovant ? Ne cherchez plus, nous avons le poste idéal pour vous.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./assets/images/best.png">
        
                <h2>Travaillez avec les meilleurs</h2>
                <p>Rejoignez une équipe exceptionnelle composée de professionnels talentueux et passionnés. Découvrez des opportunités de croissance et d'apprentissage continu.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        
        
          </div>
        </main>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                  Offrini
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Offrini, Inc</span>
              </div>
          
              <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              </ul>
            </footer>
          </div>
</body>

</html>