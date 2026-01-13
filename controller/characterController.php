<?php
if ($_GET["character"] == 'goku') {
    $title = "Sangoku - the Saiyan";
    $asideImg = "../asset/anim/gokuSide.gif";
} elseif ($_GET["character"] == 'freezer') {
    $title = "Freezer - the icy alien";
    $asideImg = "../asset/anim/freezer.gif";
} else {
    header("location:../controller/homeController.php");

}
?>




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
    require_once("../view/_asisde.php");
?>

    <div id="right">
        <?php
            require_once("../view/_header.php");
        ?>      
</body>
</html>