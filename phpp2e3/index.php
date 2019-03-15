<?php
// On déclare les variables age et genre
  $age = 10;
  $gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE2 - EXO3</title>
  </head>
  <body>
    <h1>Créer deux variables age et gender. La variable gender peut prendre comme valeur :
    Homme
    Femme
    En fonction de l'âge et du genre afficher la phrase correspondante :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
    Gérer tous les cas.</h1>
    <?php
    //On réalise une condition : soit la personne est H ou F et soit majeur ou mineur
    // si le genre est homme et que l'âge est supérieur ou égal à 18
    if (($gender == 'homme') && ($age >= 18))
    { // alors
      //afficher : ........
      echo 'Vous êtes un homme majeur.';
    }elseif // sinon si
    //le genre est homme et que l'âge est inférieur à 18
      (($gender == 'homme') && ($age < 18))
      { // alors
       echo 'Vous êtes un homme mineur.';
    }elseif
    (($gender != 'homme') && ($age >= 18))
    {
      echo 'Vous êtes une femme majeure.';
    }else{ // sinon
      echo 'Vous êtes une femme mineure';
    }
    ?>
  </body>
</html>
