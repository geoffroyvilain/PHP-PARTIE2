<?php
$isEasy = true;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE2 - EXO2</title>
  </head>
  <body>
    <h1></h1>
    <h2>1ère version</h2>
    <?php
    if ($isEasy = 1)
    {
      echo 'C\'est facile!';
    }else{
      echo 'C\'est difficile!';
    }
    ?>
    <h2>2ème version</h2>
    <?php
    if ($isEasy = true)
    {
      echo 'C\'est facile!';
    }else{
      echo 'C\'est difficile!';
    }
    ?>
  </body>
</html>
