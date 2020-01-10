<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exo-3 Partie-VI</title>
    </head>
    <body>
        <a title="" href="index.php?startDate=2/05/2016&endDate=27/11/2016">URL</a>
        <?php if (isset($_GET['startDate']) && isset($_GET['endDate'])) { ?>
            <p><?php echo 'La date de début: ' . $_GET['startDate']; ?></p>
            <p><?php echo 'La date de fin: ' . $_GET['endDate']; ?></p>
        <?php } else { ?>
            <p><?php echo 'index.php?lastname=Nemare&firstname=jean'; ?></p>
        <?php } ?>
    </body>
</html>
