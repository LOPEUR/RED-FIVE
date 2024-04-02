<?php
$file = 'image/ronaldo-goat.gif';

if (isset($_GET['image'])) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-image text-white" 
     style="background-image: url('image/fe.jpg');">
    <!-- barre de navigation -->
  <?php
    include('navbar.php');
  ?>
  <br><br><br>
<!-- barre de navigation -->
    <h1>Bienvenue sur la review du terrain 2</h1><br><br>
    <h2>Liste des jours :</h2><br><br>
    <table class="table table-bordered border-danger text-white" style="background-image: url('image/fond_tableau.jpg')">
      <tr>
        <th></th>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        <th>Vendredi</th>
        <th>Samedi</th>
      </tr>
      <tr>
        
        <td style="width: 50px; height: 50px;">08H - 10H</td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      </tr>
      <tr>
        <td style="width: 50px; height: 50px;">10H - 12H</td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
        <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      </tr>
      <tr>
      <td style="width: 50px; height: 50px;">12H - 14H</td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      </tr>
      <tr>
      <td style="width: 50px; height: 50px;">14H - 16H</td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      </tr>
      <tr>
      <td style="width: 50px; height: 50px;">16H - 18H</td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      </tr>
      <tr>
      <td style="width: 50px; height: 50px;">18H - 20H</td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      <td style="width: 50px; height: 50px;"><?php echo '<a href="image/download.php?file=' . urlencode($file) . '"><img  name="image" src="' . $file . '"  alt="' .  pathinfo($file, PATHINFO_FILENAME) .'"></a>'; ?> </td>
      </tr>
      
    </table> 
            <br>
    <form action="index.php" method="GET">
        <button type="submit" class="btn btn-danger text-white" >Revenir à l'accueil</button>
    </form>
    <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></div>    
  <!-- BOOTSTRAP -->
</body>
</html>
