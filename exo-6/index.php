<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exo-6 Partie-VI</title>
    </head>
    <body>
        <a href="index.php?building=12&room=101">URL</a>
        <?php if (isset($_GET['building']) AND isset($_GET['room'])) { ?>
            <p>La valeur du premier paramètre: <?php echo $_GET['building'] ?></p>
            <p>La valeur du deuxième paramètre: <?php echo $_GET['room']; ?></p>
        <?php } else { ?>
            <p><?php echo 'Cliquez sur le lien "URL" '; ?></p>
        <?php } ?>
    </body>
</html>
