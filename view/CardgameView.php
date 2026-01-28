<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBZ jeu de carte</title>
    <link rel="stylesheet" href="../style/style.css">
    <script type="module" src="../script/app.js"></script>
</head>

<body id="Gamezone">

    <div class="zone-top">
        <div id="player-home" class="play-zone">
            
            <div class="card" id="player">
                <div class="incard" style="background-image: url('<?= $player->getThumb() ?>');">
                    <div class="stat power">
                        <?= (($player->getPower() - $player->getChaos()) < 1)
                            ? 1
                            : ($player->getPower() - $player->getChaos())
                        ?>-<?= ($player->getPower() + $player->getChaos()) ?>
                    </div>
                    <div class="stat resistance"><?= $player->getResistance() ?></div>
                    <div class="stat hitpoints"><?= $player->getHitpoints() ?></div>
                </div>
            </div>
        </div>
        <div id="player-cards" class="play-zone"></div>

        <div class="game-control"></div>

    </div>

    <div class="zone-bottom">
        <div id="enemy-home" class="play-zone">
         
            <div class="card" id="enemy">
                <div class="incard" style="background-image: url('<?= $enemy->getThumb() ?>');">
                    <div class="stat power">
                        <?= (($enemy->getPower() - $enemy->getChaos()) < 1)
                            ? 1
                            : ($enemy->getPower() - $enemy->getChaos())
                        ?>
                        -
                        <?= ($enemy->getPower() + $enemy->getChaos()) ?>
                    </div>
                    <div class="stat resistance"><?= $enemy->getResistance() ?></div>
                    <div class="stat hitpoints"><?= $enemy->getHitpoints() ?></div>
                </div>
            </div>
        </div>

        <div id="enemy-cards" class="play-zone"></div>

        <div class="player-deck"></div>

    </div>

















    
    <div id="name-wrapper">
        <h1 id="areaname">DBZ Mega Fight</h1>
    </div>

</body>
</html>
