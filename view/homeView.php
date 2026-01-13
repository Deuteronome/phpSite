<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnage</title>
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

            <h2>Select a character</h2>

            <div class="character-list">

            <?php
            foreach($personnageListe as $personnage) {
                ?>
                <a href="../controller/personnageController.php?id=<?= $personnage ["id"] ?>"
                    class="character-card" style="background-image:url('<?= $personnage["thumb"] ?>')">
                   
                            <p class="character-name"><?= $personnage["name"] ?></p>
                    
                </a>
                <?php
            }

            ?>




                

            </div>


        </main>

        <footer>
                
        </footer>
    </div>
    
</body>
</html>