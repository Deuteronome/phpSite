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
            <button id="back-btn">Retour</button>
            <a href="../controller/homeController.php">coucou</a>
        </div>


        <script>
        // Affiche la fiche du personnage quand on sélectionne un radio
        const radios = document.querySelectorAll('.character-list input[type="radio"]');
        const fighterCard = document.getElementById('fighter-card');

        radios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.checked) {
                    fighterCard.style.display = 'flex';
                }
            });
        });

        document.getElementById('back-btn').addEventListener('click', () => {
            const checkedRadio = document.querySelector('.character-list input[type="radio"]:checked');
            if (checkedRadio) checkedRadio.checked = false;
            fighterCard.style.display = 'none';
        });
    </script>
        </main>

    </div>