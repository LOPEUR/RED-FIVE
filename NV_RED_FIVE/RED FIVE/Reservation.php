<?php
// Inclure le fichier de connexion à la base de données
require_once '_bd/connexionDB.php';

// Vérifier si le formulaire a été soumis
if(isset($_POST['pseudo']) AND isset($_POST['contact']) AND isset($_POST['date_reservation']) AND isset($_POST['terrain']) AND isset($_POST['heure'])) {
    // Récupérer les données du formulaire
    $pseudo = $_POST['pseudo'];
    $contact = $_POST['contact'];
    $date_reservation = $_POST['date_reservation'];
    $terrain = $_POST['terrain'];
    $heure = $_POST['heure']; 
    // Préparer la requête SQL pour insérer une nouvel
    $sql = "INSERT INTO reservation (pseudo, contact, date_reservation,terrain,heure) VALUES (:pseudo, :contact, :date_reservation, :terrain, :heure)";
    // Préparer la requête en utilisant PDO
    $stmt = $DB->prepare($sql);

    // Liaison des valeurs avec les paramètres de la requête
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':contact', $contact);
    $stmt->bindParam(':date_reservation', $date_reservation);
    $stmt->bindParam(':terrain', $terrain); 
    $stmt->bindParam(':heure', $heure); 

    // Exécution de la requête
    if($stmt->execute()) {
        // Rediriger vers la page d'accueil si l'insertion a réussi
        header('Location: index.php');
        exit();
    } else {
        // Afficher un message d'erreur si l'insertion a échoué
        header('Location: erreur_insert.php');
        exit();
    }
}
else {
  // Afficher un message d'erreur si l'insertion a échoué
  echo "Erreur lors de l'insertion des données.";
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
    <h1 class="text-center"><a href="index.php" > <img src="image/logo5.jpg" > </a><br>Reserver dès maintenant :</h1>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Pseudo :</label><br>
                <input class="form-control" type="text" name="pseudo" value="" placeholder="pseudo"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Numero de Contact :</label>
                <input class="form-control" type="number" name="contact" value="" placeholder="Numero de contact ex : 06 07 10 57 99"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Date de Reservation :</label>
                <input class="form-control" type="date" name="date_reservation" value="" placeholder="Date de Reservation"/>
            </div>
            <div class="mb-3">
            <label class="form-label">Menu des terrains :</label>
            <select class="form-select" name="terrain" aria-label="select terrain">
              <option selected>Menu des terrains</option>
              <option value="1">Terrain 1(avec camera)</option>
              <option value="2">Terrain 2</option>
              <option value="3">Terrain 3(avec camera)</option>
              <option value="4">Terrain 4</option>
              <option value="5">Terrain 5(avec camera)</option>
              <option value="6">Terrain 6</option>
            </select>
            </div>
            </div>
        <!-- tableau des horaires -->
    <table class="table table-bordered border-danger text-white" style="background-image: url('image/fond_tableau.jpg')">
      <tr>
        <td>Terrain 1</td>
        <td>Terrain 2</td>
        <td>Terrain 3</td>
        <td>Terrain 4</td>
        <td>Terrain 5</td>
        <td>Terrain 6</td>
      </tr>
      <tr>
        <td><input class="btn btn-outline-danger" type="submit" value="08H - 10H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="08H - 10H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="08H - 10H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="08H - 10H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="08H - 10H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="08H - 10H" name="heure"></td>
      </tr>
      <tr>
      <td><input class="btn btn-outline-danger" type="submit" value="10H - 12H" name="heure"></td>
      <td><input class="btn btn-outline-danger" type="submit" value="10H - 12H" name="heure"></td>
      <td><input class="btn btn-outline-danger" type="submit" value="10H - 12H" name="heure"></td>
      <td><input class="btn btn-outline-danger" type="submit" value="10H - 12H" name="heure"></td>
      <td><input class="btn btn-outline-danger" type="submit" value="10H - 12H" name="heure"></td>
      <td><input class="btn btn-outline-danger" type="submit" value="10H - 12H" name="heure"></td>
      </tr>
      <tr>
        <td><input class="btn btn-outline-danger" type="submit" value="12H - 14H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="12H - 14H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="12H - 14H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="12H - 14H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="12H - 14H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="12H - 14H" name="heure"></td>
      </tr>
      <tr>
        <td><input class="btn btn-outline-danger" type="submit" value="14H - 16H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="14H - 16H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="14H - 16H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="14H - 16H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="14H - 16H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="14H - 16H" name="heure"></td>
      </tr>
      <tr>
        <td><input class="btn btn-outline-danger" type="submit" value="16H - 18H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="16H - 18H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="16H - 18H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="16H - 18H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="16H - 18H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="16H - 18H" name="heure"></td>
      </tr>
      <tr>
        <td><input class="btn btn-outline-danger" type="submit" value="18H - 20H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="18H - 20H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="18H - 20H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="18H - 20H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="18H - 20H" name="heure"></td>
        <td><input class="btn btn-outline-danger" type="submit" value="18H - 20H" name="heure"></td>
      </tr>
      
    </table> 
  </form>     
</div>
  <!-- tableau des horaires -->
      </div>
    <!-- formulaire de reservation -->

    
    
    <!-- page -->

  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></div>    
  <!-- BOOTSTRAP -->
 </body> 
</html>