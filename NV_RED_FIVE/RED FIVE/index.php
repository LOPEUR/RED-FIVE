<?php
session_start();
require_once '_bd/connexionDB.php';

if(isset($_SESSION['id'])){
  $var = "Bonjour ". $_SESSION['pseudo'];
}else{
  $var = "Bienvenue sur le site du RED Five !";
}

?>

<!doctype html>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>RED FIVE - Accueil</title>

  </head>
  
  <body class=" text-white bg-image" 
     style="background-image: url('image/fe.jpg');">
  
<!-- barre de navigation -->
  <?php
    include('navbar.php');
  ?>
<!-- page -->    
    <div class=" text-white">
    <br><br><br><br>
    <h1 class="text-center"><?php echo $var ?></h1>
    <br><br>
<!-- actu avec menu déroulant -->
    <div class="container w-50 bg-danger text-center">
    <h4> ⚽️ Actualité : </h4>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/img1.jpg" class="d-block w-100" alt="..."/>
    </div>
    <div class="carousel-item">
      <img src="image/img2.jpg" class="d-block w-100" alt="..."/>
    </div>
    <div class="carousel-item">
      <img src="image/img3.jpg" class="d-block w-100" alt="..."/>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<br>
<h6 class="text-center">Ouvert 7j/7 de 8h à 20h</h6>

<!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </div>
