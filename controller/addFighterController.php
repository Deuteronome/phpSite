<?php

require_once('../model/Data.php');

$bdd = new Data();

$name = htmlspecialchars($_POST["name"]);
$description = htmlspecialchars($_POST["description"]);
$title = htmlspecialchars($_POST["title"]);

if(is_numeric ($_POST["power"]) && is_numeric ($_POST["resistance"]) && is_numeric ($_POST["hp"]) && is_numeric ($_POST["chaos"])) {
    $power = (int)$_POST["power"];
    $resistance = (int)$_POST["resistance"];
    $hp = (int)$_POST["hp"];
    $chaos = (int)$_POST["chaos"];
} else {
    header('location:../controller/newFighterController.php');
}

$power = is_numeric ($_POST["power"]);



#$result = $bdd->createFighter($_POST["name"], $_POST["description"], $_POST["title"], $_POST["power"], $_POST["resistance"], $_POST["hp"], $_POST["chaos"]);

#var_dump($result);

