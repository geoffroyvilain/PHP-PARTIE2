 <!-- on déclare la variable -->
<?php $age = 33; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP - PARTIE 2 - EXO 1</title>
</head>
<body>
  <h1>PHP - PARTIE 2 - EXO 1</h1>
  <p><strong>
    Créer une variable age et l'initialiser avec une valeur.
    Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
  </strong></p>
    <p>
    <?php
// on réalise une condition on appelle la variable age et on la compare à 18
    if ($age < 18) { // alors
      //réponse si le test est réussi
      echo 'Vous êtes mineur';
    }else{ // sinon
      //réponse si le test n'est pas réussi
      echo 'Vous êtes majeur';
    }
    ?>
    </p>
  </body>
  </html>
