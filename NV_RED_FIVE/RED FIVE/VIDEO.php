<?php
// Inclure le fichier de connexion à la base de données
require_once '_bd/connexionDB.php';

// Vérifier si le formulaire a été soumis
if(isset($_POST['terrain'])) {
    // Récupérer les données du formulaire
    $date_reservation = $_POST['dates'];
    $terrain = $_POST['terrain'];  
    // Exécution de la requête
    if($_POST['terrain'] == 1) {
        // Rediriger vers la page d'accueil si l'insertion a réussi
        header('Location: Terrain1.php');
        exit();
    }
    elseif($_POST['terrain'] == 2) {
      // Rediriger vers la page d'accueil si l'insertion a réussi
      header('Location: Terrain2.php');
      exit();
  }
  elseif($_POST['terrain'] == 3) {
    // Rediriger vers la page d'accueil si l'insertion a réussi
    header('Location: Terrain3.php');
    exit();
}
elseif($_POST['terrain'] == 4) {
  // Rediriger vers la page d'accueil si l'insertion a réussi
  header('Location: Terrain4.php');
  exit();
}
elseif($_POST['terrain'] == 5) {
  // Rediriger vers la page d'accueil si l'insertion a réussi
  header('Location: Terrain5.php');
  exit();
}
elseif($_POST['terrain'] == 6) {
  // Rediriger vers la page d'accueil si l'insertion a réussi
  header('Location: Terrain6.php');
  exit();
}
elseif($_POST['terrain'] == 7) {
  // Rediriger vers la page d'accueil si l'insertion a réussi
  header('Location: Terrain7.php');
  exit();
}
}
else {
  // Afficher un message d'erreur si l'insertion a échoué
  echo "Ceci n'existe pas Veuiller retournez en arriere";
}
?>
<!doctype html>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>RED FIVE - Reservation</title>

  </head>
<!-- barre de navigation -->
  <?php
    include('navbar.php');
  ?>
<!-- barre de navigation -->
  <br><br><br>
  <body class="bg-image text-white" 
     style="background-image: url('image/fe.jpg');"> 
<!-- page -->
<br>
<!-- formulaire de reservation -->
    <h1 class="text-center"><a href="index.php" > <img src="image/logo5.jpg" > </a><br><br> Venez regardez vos meilleurs instants</h1>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <form method="POST" action="">
            <div class="mb-3">
            <label class="form-label">Menu des terrains :</label>
            <select class="form-select" name="terrain" aria-label="select terrain">
              <option selected>Menu des terrains</option>
              <option value="1" name="terrain"><a href="Terrain1.php"> Terrain 1(avec camera)</a></option>
              <option value="2" name="Terrain"><a href="Terrain2.php">Terrain 2</a></option>
              <option value="3" name="Terrain"><a href="Terrain3.php">Terrain 3(avec camera)</a></option>
              <option value="4" name="Terrain"><a href="Terrain4.php">Terrain 4</a></option>
              <option value="5" name="Terrain"><a href="Terrain5.php">Terrain 5(avec camera)</a></option>
              <option value="6" name="Terrain"><a href="Terrain6.php">Terrain 6</a></option>
              <option value="7" name="Terrain"><a href="Terrain7.php">Terrain 7 </a></option>
            </select><br>
           <input class="btn btn-outline-danger" type="submit" value="Envoyer">
            </div>
            </div>
  </form>     
</div>

      </div>
    <!-- formulaire de reservation -->

    
    
    <!-- page -->

  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></div>    
  <!-- BOOTSTRAP -->
 </body> 
</html>