<?php
    session_start();
    require_once("../model/Fighter.php");
    require_once("../model/Data.php");

    $player = new Fighter($_SESSION["playerCharacter"]);
    $bdd = new Data();
    $enemyList = $bdd->getOtherFighters($player->getId());

    $enemy = new Fighter($enemyList[array_rand($enemyList, 1)]);
    


require_once("../view/cardGameView.php");
?>