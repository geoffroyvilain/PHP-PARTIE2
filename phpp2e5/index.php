<?php
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP - PARTIE 2 - EXO 5</title>
</head>
<body>
  <h1>PHP - PARTIE 2 - EXO 5</h1>
    <p><strong>Traduire ce code avec des if et des else : </strong></p>
    <!--
    < ? php
    echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    ?> -->

  <?php
  if ($gender != 'homme')
  { ?>
    <p>C'est une développeuse.</p>
  <?php }else{ ?>
    <p>C'est un développeur.</p>
  <?php }
  ?>
</body>
</html>
