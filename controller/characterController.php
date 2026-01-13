<?php
<<<<<<< HEAD
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
=======
    
   
    if($_GET["character"]=='goku') {
        $title = "Sangoku - the Sayen";
        $asideImg = "../asset/anim/gokuSide.gif";
    } else if ($_GET["character"]=='freezer') {
        $title = "Freezer - the icy alien";
        $asideImg = "../asset/anim/freezer.gif";
    } else {
        header("location:../controller/homeController.php");
    }

    require_once("../view/characterView.php");
    
?>

>>>>>>> d52449e80d501f7a5b56440efcc365a951e6faef
