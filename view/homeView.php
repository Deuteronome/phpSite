
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/selectFighter.js" defer></script>
</head>

<body>
    <?php 
        require_once("../view/_titleScreen.php");
    ?>
    <aside></aside>
    <div id="right">
        <main>

            <h2>Select a character</h2>

            <div class="character-list">

                <?php
                    foreach($fighterList as $fighter) {
                    ?>
                         <div data=<?= $fighter["id"] ?> class="character-card" style="background-image:url('<?= $fighter["thumb"] ?>')">
                   
                            <p class="character-name"><?= $fighter["name"] ?></p>
                    </div>
                    <?php
                    }
                ?>

               

               

            </div>

            
        </main>

    </div>
    
</body>


</html>