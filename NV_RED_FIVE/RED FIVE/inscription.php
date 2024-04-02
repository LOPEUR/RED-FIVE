<<?php

//CONNEXION BASE DE DONNEES
require_once '_bd/connexionDB.php';
//FIN CONNEXION BASE DE DONNEES
//VALEURS INSCRIPTION
    if(!empty($_POST)){
        extract($_POST); 

        $valid = (boolean) true;

        if(isset($_POST ['inscription'])){
            $pseudo = trim($pseudo);
            $mail = trim($mail);
            $confmail = trim($confmail);
            $mdp = trim($mdp);
            $confmdp = trim($confmdp);
//verif pseudo vide   
              if(empty($pseudo)){
                  $valid = false;
                  $err_pseudo = "⚠️ Ce champ ne peut pas être vide.";
              }else{
                  $req = $DB->prepare("SELECT * FROM utilisateurs WHERE pseudo = ?");

                  $req->execute(array($pseudo));

                  $req = $req->fetch();

                  if(isset($req['id'])){
                      $valid = false;
                      $err_pseudo = "⚠️ Ce pseudo est déjà pris.";
                  }
              }
//verif mail vide-diff
              if(empty($mail)){
                  $valid = false;
                  $err_mail = "⚠️ Ce champ ne peut pas être vide.";
              }elseif($mail<>$confmail){
                $valid = false;
                $err_mail = "⚠️ Le mail est différent de la confirmation.";

              }else{
                  $req = $DB->prepare("SELECT id FROM utilisateurs WHERE mail = ?");

                  $req->execute(array($mail));

                  $req = $req->fetch();

                if(isset($req['id'])){
                    $valid = false;
                    $err_mail = "⚠️ Ce mail est déjà pris.";
                }
            }
//verif mdp vide-diff  
            if(empty($mdp)){
              $valid = false;
              $err_mdp = "⚠️ Ce champ ne peut pas être vide.";
            }elseif($mdp<>$confmdp){
              $valid = false;
              $err_mdp = "⚠️ Le mot de passe est différent de la confirmation.";}

            if($valid){

                //$crypt_mdp = crypt ($mdp, '$6$rounds=5000$`_=<3a(V#n>i3jUkQ4-|F*.LL-|Zz+[9T$');
                $date_crea = date('Y-m-d H:i:s');
                $req = $DB->prepare("INSERT INTO utilisateurs(pseudo, mail, mdp, date_crea) VALUES (?,?,?,?)");
                $req->execute(array($pseudo, $mail, $mdp, $date_crea));
                header('Location: connexion.php');
                exit;
                
            }else{
                echo 'non ok';
            }


          }
   }

?>

<!doctype html>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>RED FIVE - Inscription</title>

  </head>

  <body class=" text-white bg-image" 
     style="background-image: url('image/fe.jpg');">
<!-- barre de navigation -->
  <?php
    include('navbar.php');
  ?>
<!-- page -->
<br><br><br>

    <h1 class="text-center"><a href="index.php" > <img src="image/logo5.jpg" > </a><br>Inscrivez-vous :</h1>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Pseudo :</label><br>
                <?php if(isset($err_pseudo)){echo $err_pseudo;} ?>
                <input class="form-control" type="text" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>" placeholder="pseudo"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Adresse mail :</label><br>
                <?php if(isset($err_mail)){echo $err_mail;} ?>
                <input class="form-control" type="email" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>" placeholder="adresse mail"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Confirmation Adresse mail :</label>
                <input class="form-control" type="email" name="confmail" value="<?php if(isset($confmail)){echo $confmail;} ?>" placeholder="confirmer adresse mail"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe :</label><br>
                <?php if(isset($err_mdp)){echo $err_mdp;} ?>
                <input class="form-control" type="password" name="mdp" value="<?php if(isset($mdp)){echo $mdp;} ?>" placeholder="mot de passe"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Confirmation Mot de passe :</label>
                <input class="form-control" type="password" name="confmdp" value="" placeholder="confirmer mot de passe"/>
            </div>
            <div class="mb-3">
                <button type="submit" name="inscription" class="btn btn-danger">S'inscrire</button>
            </div>

            </div>
        </form>
        </div>
    </div>
    
  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </div>
