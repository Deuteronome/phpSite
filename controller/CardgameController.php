<?php
    session_start();
    require_once('../model/Fighter.php');
    require_once('../model/Data.php');
    $player = new Fighter($_SESSION['PlayerCharacter']);
    $bdd = new Data();
    $enemyList = $bdd->getAllOtherFighter($player->getId());


    $enemy = new Fighter($enemyList[array_rand($enemyList,1)]);
    #var_dump($enemy);
    require_once('../view/CardgameView.php');