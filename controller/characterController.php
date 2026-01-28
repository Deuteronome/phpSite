<?php
     session_start();

   require_once('../model/Data.php');
   require_once('../model/Fighter.php');
   $bdd = new Data();

   $fighterData = $bdd->getFighterById($_GET['id']);

   if(!$fighterData) {
        header('location:../controller/homeController.php');
   }

   $fighter = new Fighter($fighterData);
   #var_dump($fighter);
   $_SESSION["playerCharacter"]=$fighterData;

    $title = $fighter->getTitle();
    $asideImg = $fighter->getGif();

    require_once("../view/characterView.php");
    
?>

