<?php
  $stepsNumber = 1;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
    <?php
    while ($stepsNumber <= 100) {
      echo ' | ' .$stepsNumber. ' On tient le bon bout.';
      $stepsNumber = $stepsNumber + 15;
    }
    ?>
  </p>
  </body>
</html>
