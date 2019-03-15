<?php
// on déclare la variable
$age = 33;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP - PARTIE2 - EXO1</title>
</head>
<body>
  <h1>Créer une variable age et l'initialiser avec une valeur.
    Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</h1>
    <?php
// on réalise une condition on appelle la variable age et on la compare à 18
    if ($age < 18)
    { // alors
      //reponse si le test est réussi
      echo 'Vous êtes mineur';
    }else{ // sinon
      //reponse si le test n'est pas réussi
      echo 'Vous êtes majeur';
    }
    ?>
  </body>
  </html>
