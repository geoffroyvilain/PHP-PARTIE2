<?php
// On déclare les variables age et genre
  $age = 10;
  $gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE 2 - EXO 3</title>
  </head>
  <body>
    <h1>PHP - PARTIE 2 - EXO 3</h1>
    <p><strong>Créer deux variables age et gender. La variable gender peut prendre comme valeur : Homme ou femme</strong></p>
    <p><strong>En fonction de l'âge et du genre afficher la phrase correspondante :</strong></p>
    <p><strong>Vous êtes un homme et vous êtes majeur</strong></p>
    <p><strong>Vous êtes un homme et vous êtes mineur</strong></p>
    <p><strong>Vous êtes une femme et vous êtes majeur</strong></p>
    <p><strong>Vous êtes une femme et vous êtes mineur</strong></p>
    <p><strong>Gérer tous les cas.</strong></p>
    <?php
    //On réalise une condition : soit la personne est H ou F et soit majeur ou mineur
    // si le genre est homme et que l'âge est supérieur ou égal à 18
    if (($gender == 'homme') && ($age >= 18)) { ?><!-- alors
      afficher : ........ -->
      <p>Vous êtes un homme majeur.</p> <?php
    }elseif // sinon si
    //le genre est homme et que l'âge est inférieur à 18
      (($gender == 'homme') && ($age < 18)) { ?>
       <p>Vous êtes un homme mineur.</p> <?php
    }elseif
    (($gender != 'homme') && ($age >= 18))
    { ?>
      <p>Vous êtes une femme majeure.</p> <?php
    }else{ // sinon ?>
      <p>Vous êtes une femme mineure.</p><?php
    }
    ?>
  </body>
</html>
