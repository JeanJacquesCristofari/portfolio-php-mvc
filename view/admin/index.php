<!DOCTYPE html>
<html>
<head>
  <title>Exemple de tableau avec modification de texte</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    

<div class="container">
  <h2>Connexion</h2> 
  <form method="POST" action="">
    <div class="form-group">
      <label for="username">Nom d'utilisateur:</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Mot de passe:</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-default">Se connecter</button>
  </form>
</div>



<?php
if(isset($_POST["username"]) && isset($_POST["password"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if($username == "Jean-Jacques" && $password == "%MMI2023$") {
    $_SESSION["connected"] = true;
  } else {
    echo "<div class='alert alert-danger'>Nom d'utilisateur ou mot de passe incorrect</div>";
  }
}

if(!isset($_SESSION["connected"]) || $_SESSION["connected"] !== true) {
  echo "</body></html>";
  exit;
}
?>



<div class="container">
  <h2>Textes</h2> 
  <table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Texte</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        require_once "../../model/connect.php";
        require_once "../../model/get.php";

        $statement_result = get($pdo);

        foreach ($statement_result as $element) {
          echo "<tr>";
          echo "<td>".$element['name']."</td>";
          echo "<td>".$element['text']."</td>";
          echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#".$element['id']."'>Modifier</button></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<?php 
  foreach ($statement_result as $element) {
    echo "<div class='modal fade' id='".$element['id']."' role='dialog'>";
    echo "<div class='modal-dialog'>";
    echo "<div class='modal-content'>";
    echo "<div class='modal-header'>";
    echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
    echo "<h4 class='modal-title'>Modifier le texte '".$element['name']."'</h4>";
    echo "</div>";
    echo "<div class='modal-body'>";
    echo "<form method='POST' action='../../model/update.php'>";
    echo "<div class='form-group'>";
    echo "<label for='texte_".$element['id']."'>Texte:</label>";
    echo "<textarea class='form-control' id='texte_".$element['id']."' name='texte'>".$element['text']."</textarea>";
    echo "</div>";
    echo "<input type='hidden' name='id' value='".$element['id']."'>";
    echo "<button type='submit' class='btn btn-default'>Enregistrer</button>";
    echo "</form>";
    echo "</div>";
    echo "<div class='modal-footer'>";
    echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Fermer</button>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }
?>

</body>
</html>
