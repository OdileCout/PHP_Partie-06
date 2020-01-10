<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exo-2 Partie-VI</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&firstname=jean">Lien</a>
        <p><?php
            if (isset($_GET['age']) && isset($_GET['lastname']) && isset($_GET['firstname'])) {
                echo $_GET['age'] . ' ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
            } else {
                echo 'Il n\'existe pas de paramètre "age" sur cette page!';
            }
            ?></p>
    </body>
</html>
