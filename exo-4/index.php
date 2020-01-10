<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exo-4 Partie-VI</title>
    </head>
    <body>
        <a href="index.php?language=PHP&server=LAMP">URL</a>
        <?php if (isset($_GET['language']) && isset($_GET['server'])) { ?>
            <p><?php echo $_GET['language'] . ' ' . $_GET['server']; ?></p>
        <?php } else { ?>
            <p><?php echo 'erreur'; ?></p>
        <?php } ?>
    </body>
</html>
