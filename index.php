<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice4</title>
</head>
<body>
  <p>
    <?php
    //Teste que les paramètres de l'url existent et affichage des valeurs
    if(isset($_GET['language']) && isset($_GET['server'])){
      echo $_GET['language'] . ' ' . $_GET['server'];
    }
    ?>
  </p>
</body>
</html>
