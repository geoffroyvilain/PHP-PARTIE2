<?php // on déclare un booléen et on l'initialise à true
$isEasy = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP - PARTIE2 - EXO 2</title>
</head>
<body>
  <h1>PHP - PARTIE 2 - EXO 2</h1>
  <p><strong>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.</strong></p>
  <p><strong>Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.</strong></p>
  <p><strong>Bonus : L'écrire de deux manières différentes.</strong></p>
  <h2>1ère version</h2>
  <?php
  if ($isEasy == 1) { ?>
    <p>C'est facile !</p>
  <?php }else{ ?>
    <p>C'est difficile !</p>
  <?php } ?>

  <h2>2ème version</h2>
  <?php
  if ($isEasy) { ?>
    <p>C'est facile !</p>
  <?php }else{ ?>
    <p>C'est difficile !</p>
  <?php } ?>
</body>
</html>
