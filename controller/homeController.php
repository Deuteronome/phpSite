<?php
    $title = "Choose your fighter";
    $asideImg = "../asset/anim/logo.gif";

    require_once("../model/Data.php");
    
    $bdd = new Data();

    $fighterList = $bdd->getAllFighters();
    /* var_dump($fighterList[0]["thumb"]); */

    require_once("../view/homeView.php");
?>
