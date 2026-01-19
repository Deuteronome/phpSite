<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/title.js" defer></script>
    <script src="../script/btn.js" defer></script>
</head>

<body>

    <?php require_once("../view/_aside.php"); ?>

    <div id="right">

        <?php require_once("../view/_header.php"); ?>

        <main>
          

            <div class="character-list">
                <?php foreach ($fighters as $fighter) { ?>
                    <a href="../controller/characterController.php?id=<?= $fighter["id"]?>" class="character-card" style="background-image: url(<?= $fighter["thumb"] ?>)">

                        <p class="character-name"><?= $fighter["name"] ?></p>

                    </a>
                <?php } ?>
            </div>

        </main>

    </div>

</body>
</html>
