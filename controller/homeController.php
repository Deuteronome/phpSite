<?php
    $title = "Choose your fighter";
    $asideimg = "../asset/anim/logo.gif";

    require_once("../model/Data.php");

    $bdd = new Data();

    $fighters = $bdd->getAllFighter();
   

    require_once("../view/homeView.php")
?>