<?php

    require_once('../model/Data.php');

    $bdd = new Data();

    $name = htmlspecialchars($_POST["name"]);
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    
    if(is_numeric($_POST["power"])&& is_numeric($_POST["resistance"])&& is_numeric($_POST["hitpoints"])&& is_numeric($_POST["chaos"])) {
        $power = (int)$_POST["power"];
        $resistance = (int)$_POST["resistance"];
        $hitpoints = (int)$_POST["hitpoints"];
        $chaos = (int)$_POST["chaos"];
    } else {

        header('location:../controller/newFighterController.php');
    }
    $power = is_numeric($_POST["power"]);
    var_dump($power);
    #$result = $bdd->createFighter($name, $_POST["description"],$_POST["title"],$_POST["power"], $_POST["resistance"], $_POST["hitpoints"], $_POST["chaos"]);
    #var_dump($result);