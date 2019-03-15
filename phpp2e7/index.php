<?php
$isOk = 'true'; // booléans
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP - PARTIE2 - EXO7</title>
   </head>
   <body>
     <h1>Traduire ce code avec des if et des else :
<!--
< ? php
  echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
? > -->
    </h1>
    <?php
    if($isOk == 0) // comparaison au booléen, true =1 false =0
    {
      echo 'c\'est pas bon !!!';
    }else{
      echo 'c\'est ok !';
    }
     ?>
   </body>
 </html>
