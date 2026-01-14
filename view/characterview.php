<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
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
        <main class="fighter-main">
            <p class="fighter-description"><?= $fighter->getDescription() ?></p>
            <p class="stat-power">Power: <?= $fighter->getPower() ?></p>
            <p class="stat-resistance">Resistance: <?= $fighter->getResistance() ?></p>
            <p class="stat-hitpoints">Hitpoints: <?= $fighter->getHitpoints() ?></p>
            <p class="stat-chaos">Chaos: <?= $fighter->getChaos() ?></p> 
        </main>
    </div>
</body>
</html>
