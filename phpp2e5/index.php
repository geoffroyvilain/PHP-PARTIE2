<?php
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP - PARTIE2 - EXO5</title>
</head>
<body>
  <h1>Traduire ce code avec des if et des else :
    <!--
    < ? php
    echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    ?> -->
  </h1>
  <?php
  if ($gender != 'homme')
  {
    echo 'C\'est une développeuse.';
  }else{
    echo 'C\'est un développeur.';
  }
  ?>
</body>
</html>
