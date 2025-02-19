<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin- Utilisateurs</title>
  <link href="./assets/style/bootstrap.min.css.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="./assets/script/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>

<body>
  <?php 
    if(!($_POST["user"]==="admin"&&$_POST["password"]=="admin")){
        $_SESSION["connected"] = TRUE;
        header("Location: loginadmin.html");
        exit();
    }
  ?>
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
          <li><a href="adminoffre.html" class="nav-link px-2 link-dark">Offres</a></li>
          <li><a href="adminuser.php" class="nav-link px-2 link-dark">Utilisateurs</a></li>
        </ul>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="upsert_offre.html">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
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
    <h1>Gérer les utilisateurs</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom complet</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col" class="text-right col-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Jean Dupont</td>
          <td>jean@dupont.com</td>
          <td>Utilisateur</td>
          <td class="text-right">
            <a href="#" class="btn btn-warning">Bloquer</a>
            <a href="#" class="btn btn-danger">Supprimer</a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>John Doe</td>
          <td>jogn@doe.com</td>
          <td>Entreprise</td>
          <td class="text-right">
            <a href="#" class="btn btn-warning">Bloquer</a>
            <a href="#" class="btn btn-danger">Supprimer</a>
          </td>
        </tr>

      </tbody>

    </table>
    <!-- navigation -->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>

        <li class="page-item">
          <a class="page-link" href="#">Suivant</a>
        </li>
      </ul>
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