<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/title.js" defer></script>

    <!-- Style fiche personnage -->
    
</head>
<body>

    <?php require_once("../view/_aside.php"); ?>

    <div id="right">

        <?php require_once("../view/_header.php"); ?>

        <main >
        <div class="fighter-main">
            <p><?= $fighter->getDescription() ?></p>
            <p class="stat-power">Power: <?= $fighter->getPower() ?></p>
            <p class="stat-resistance">Resistance: <?= $fighter->getResistance() ?></p>
            <p class="stat-hitpoints">Hitpoints: <?= $fighter->getHitpoints() ?></p>
            <p class="stat-chaos">Chaos: <?= $fighter->getChaos() ?></p>
        
           
            <div class="choice-zone">
                <a href="../controller/homeController.php" class="btn-retour">Retour</a>
    <a href="../controller/CardgameController.php" class="btn">Valider</a>
        </main>
        </div>
     
    </div>