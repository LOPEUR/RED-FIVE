<?php
// Définir les informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "missionsite";

// Créer une connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier si la connexion a échoué
if (!$conn) {
  die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Récupérer les informations de l'utilisateur à partir des données envoyées par le formulaire
$username = $_POST['pseudo'];
$password = $_POST['mdp'];

// Préparer la requête SQL pour vérifier si l'utilisateur existe dans la base de données
$sql = "SELECT * FROM utilisateurs WHERE pseudo='$username' AND mdp='$password'";

// Exécuter la requête SQL
$result = mysqli_query($conn, $sql);

// Vérifier si la requête a renvoyé des résultats
if (mysqli_num_rows($result) > 0) {
  // L'utilisateur existe dans la base de données
  include ("index.php");
  echo "Bonjour $username!";
} else {
  // L'utilisateur n'existe pas dans la base de données
  include ("connexion.php");
  echo "Pseudo ou Mot de passe incorrect";

}

// Fermer la connexion à la base de données
mysqli_close($conn);