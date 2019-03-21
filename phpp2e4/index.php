<?php $magnitude = rand(1,9); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE 2 - EXO 4</title>
  </head>
  <body>
    <h1>PHP - PARTIE 2 - EXO 4</h1>
     <p><strong>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.</strong></p>
     <p><strong>Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</strong></p>
    <?php
/* break pour arreter le switch si la condition est remplie
defaut, équivalent du else, pour une réponse hors sujet */
switch ($magnitude) {
  case 1:
    echo 'Micro-séisme impossible à ressentir.';
  break;
  case 2:
    echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
  break;
  case 3:
    echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
  break;
  case 4:
    echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
  break;
  case 5:
    echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
  break;
  case 6:
    echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
  break;
  case 7:
    echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
  break;
  case 8:
    echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
  break;
  case 9:
    echo 'Séisme capable de tout détruire sur une très vaste zone.';
  break;
  default :
  echo 'Merci de rentrer un niveau entre 1 et 9';
}
     ?>
  </body>
</html>
