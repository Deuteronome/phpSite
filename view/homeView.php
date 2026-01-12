
<!DOCTYPE html>

<html lang="en">

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

        <main>

            <h2>Select a character</h2>

            <div class="character-list">

                <a href="../controller/characterController.php?character=goku" class="character-card" id="goku" data-name="Goku">
                   
                    <p class="character-name">Goku</p>
                </a>

                <a href="../controller/characterController.php?character=freezer" class="character-card" id="freezer" data-name="Freezer" >
                    
                    <p class="character-name">Freezer</p>
                </a>

                <div class="character-card" id="cell" data-name="Cell">
                    
                    <p class="character-name">Cell</p>
                </div>

                <div class="character-card" id="pikachu" data-name="Pikachu">
                    
                    <p class="character-name">Pikachu</p>
                </div>

                <div class="character-card" id="mohamed" data-name="Mohamed">
                    
                    <p class="character-name">Mohamed</p>
                </div>

            </div>

            
        </main>

    </div>
    
</body>


</html>