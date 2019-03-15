<?php
$isOk = 'true';
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP - PARTIE2 - EXO8</title>
   </head>
   <body>
     <h1>Traduire ce code avec des if et des else :
<!--
< ?php
  echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
?> -->
</h1>
<?php
  if ($isOk) // si pas de comparaison, c'est égal à true par défaut
  {
    echo 'c\'est ok !';
  }else{
    echo 'c\'est pas bon !';
  }
  ?>
   </body>
 </html>
