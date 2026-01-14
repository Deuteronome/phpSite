<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personnage</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/title.js" defer></script>
</head>
<body>
    <?php
        require_once("../view/_aside.php");
    ?>
    <div id="right">
        <?php
            require_once("../view/_header.php");
        ?>

        <main>

            <div class="character-sheet">
                <div class="desc"><p><?= $fighter->getDescription() ?></p></div>
                <div class="stat"><p>Puissance : <?= $fighter->getPower() ?></p></div>
                <div class="stat"><p>Résistance : <?= $fighter->getResistance() ?></p></div>
                <div class="stat"><p>Chaos : <?= $fighter->getChaos() ?></p></div>
                <div class="stat"><p>Points de vie : <?= $fighter->getHitpoints() ?></p></div>
            </div>
           
            
        </main>

    </div>
</body>
</html>