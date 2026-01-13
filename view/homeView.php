<<<<<<< HEAD
=======

>>>>>>> d52449e80d501f7a5b56440efcc365a951e6faef
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
<<<<<<< HEAD
<?php
    require_once("../view/_asisde.php");
?>

=======
    <?php
        require_once("../view/_aside.php");
    ?>
>>>>>>> d52449e80d501f7a5b56440efcc365a951e6faef
    <div id="right">
        <?php
            require_once("../view/_header.php");
        ?>
<<<<<<< HEAD
                
=======

>>>>>>> d52449e80d501f7a5b56440efcc365a951e6faef
        <main>

            <h2>Select a character</h2>

            <div class="character-list">
<<<<<<< HEAD
               <?php
                    foreach($fighterList as $fighter) {
                        ?>
                            <a href="../controller/characterController.php?id=<?= $fighter["id"] ?>" 
                            class="character-card" style="background-image:url(<?= $fighter["thumb"] ?>)">

                                <p class="character-name"><?= $fighter["name"] ?></p>
                             </a>
                        <?php
                    }

                ?>

        

            </div>


=======

                <?php
                    foreach($fighterList as $fighter) {
                    ?>
                         <a href="../controller/characterController.php?id=<?= $fighter["id"] ?>" class="character-card" style="background-image:url('<?= $fighter["thumb"] ?>')">
                   
                            <p class="character-name"><?= $fighter["name"] ?></p>
                        </a>
                    <?php
                    }
                ?>

               

               

            </div>

            
>>>>>>> d52449e80d501f7a5b56440efcc365a951e6faef
        </main>

    </div>
    
</body>


<<<<<<< HEAD
<html>
=======
</html>
>>>>>>> d52449e80d501f7a5b56440efcc365a951e6faef
