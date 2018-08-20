<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice4</title>
    </head>
    <body>
        <?php
        if (!empty($_GET['language'])){
            echo $_GET['language'] . ' ';
        } else {
            echo 'Il manque le paramètre language ';
        }
        if (!empty($_GET['server'])){
            echo $_GET['server'];
        } else {
            echo 'Il manque le paramètre server';
        }
        ?>
    </p>
</body>
</html>