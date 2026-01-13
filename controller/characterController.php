<?php
    
   
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

