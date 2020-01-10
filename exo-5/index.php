<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exo-5 Partie-VI</title>
    </head>
    <body>
        <a href="index.php?week=12">URL</a>
        <?php if (isset($_GET['week'])) { ?>
            <p><?php echo $_GET['week']; ?></p>
        <?php } else { ?>
            <p><?php echo 'Il manque le week dans le paramètre'; ?></p>
        <?php } ?>
    </body>
</html>
