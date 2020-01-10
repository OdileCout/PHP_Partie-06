<?php
  if (!empty($_GET['building']) && !empty($_GET['room'])) {
    $message = $_GET['building'] . ' ' . $_GET['room'];
  }
  else {
    $message = 'Il manque un (ou des) paramètre(s)';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exo6part6php</title>
  </head>
  <body>
    <p><?= $message ?></p>
    <p><a title="aller à la partie 7" href="http://phppartie7/">Exo suivant</a></p>
  </body>
</html>
