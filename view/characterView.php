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
        <div class="sheet-wrapper">
            <div class="character-sheet">
                <p class="desc"><?= $fighter->getDescription() ?></p>
                <p class="stat">Puissance : <?= $fighter->getPower() ?></p>
                <p class="stat">Défense : <?= $fighter->getResistance() ?></p>
                <p class="stat">Chaos : <?= $fighter->getChaos() ?></p>
                <p class="stat">Points de vie : <?= $fighter->getHitpoints() ?></p>
            </div>
            <div class="choice-zone">
                <a href="../controller/cardGameController.php" class="btn">Valider</a>
                <a href="../controller/homeController.php" class="btn">Retour</a>
            </div>
        </div>
    </main>

    </div>
</body>
</html>