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
            <p class="description"><?= $fighter->getDescription() ?></p>
            <p class="stat">Puissance : <?= $fighter->getPower() ?></p>
            <p class="stat">Résistance : <?= $fighter->getResistance() ?></p>
            <p class="stat">PV : <?= $fighter->getHp() ?></p>
            <p class="stat">Chaos : <?= $fighter->getChaos() ?></p>
           
            
        </main>

    </div>
</body>
</html>