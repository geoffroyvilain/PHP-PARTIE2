<?php
$age = 33;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP - PARTIE2 - EXO6</title>
   </head>
   <body>
     <h1>Traduire ce code avec des if et des else :
<!--
< ? php
  echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
? > -->
</h1>
<?php
  if ($age >= 18)
  {
    echo 'Tu es majeur.';
  }else{
    echo 'Tu es mineur.';
  }
  ?>
   </body>
 </html>
