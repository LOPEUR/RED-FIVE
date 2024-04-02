<?php
 if(!empty($_POST)){
  extract($_POST); 

  $valid = (boolean) true;

  if(isset($_POST ['connexion'])){
      $pseudo = trim($pseudo);
      $mdp = trim($mdp);
//verif pseudo vide   
        if(empty($pseudo)){
            $valid = false;
            $err_pseudo = "⚠️ Ce champ ne peut pas être vide.";
        if(empty($mdp)){
            $valid = false;
            $err_mdp = "⚠️ Ce champ ne peut pas être vide.";
          }}}
}
?>
<!doctype html>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>RED FIVE - Connexion</title>

  </head>

  <body class=" text-white bg-image" 
     style="background-image: url('image/fe.jpg');">

<!-- barre de navigation -->
  <?php
    include('navbar.php');
  ?>
<!-- page -->
<br><br><br>
    <h1 class="text-center"><a href="index.php" ><img src="image/logo3.jpg" class="w-25" alt="..."></a><br>Connectez-vous :</h1>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
        <form method="POST" action="verifco.php">
            <div class="mb-3">
                <label class="form-label">Pseudo :</label><br>
                <?php if(isset($err_pseudo)){echo $err_pseudo;} ?>
                <input class="form-control" type="text" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>" placeholder="pseudo"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe :</label><br>
                <?php if(isset($err_mdp)){echo $err_mdp;} ?>
                <input class="form-control" type="password" name="mdp" value="<?php if(isset($mdp)){echo $mdp;} ?>" placeholder="mot de passe"/>
            </div>
            <div class="mb-3">
                <button type="submit" name="connexion" class="btn btn-danger">Se connecter</button>
            </div>

            </div>
        </form>
        </div>
    </div>
    </div>
 <!-- BOOTSTRAP -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </div>

          