<?php
    session_start();
    require_once("../model/Data.php");
    require_once("../model/Fighter.php");
    $bdd = new Data();

    $fighterData = $bdd->getFighterById($_GET["id"]);

    if (!$fighterData) {
        header('Location: ../controller/homeController.php');
    }

    $fighter = new Fighter($fighterData);
    $_SESSION['PlayerCharacter']= $fighterData;
   

    $title = $fighter->getTitle();
    $asideimg = $fighter->getGif();



    require_once("../view/characterview.php")

   
?>