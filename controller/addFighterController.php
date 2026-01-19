<?php
require_once('../model/Data.php');
$bdd = new Data();
$name = htmlspecialchars($_POST['name']);
$description = htmlspecialchars($_POST['description']);
$title = htmlspecialchars($_POST['title']);

if(is_numeric) $_POST['name']
$power = is_numeric($_POST['power']);
$resistance = is_numeric($_POST['resistance']);
$hitpoints = is_numeric($_POST['hitpoints']);
$chaos = is_numeric($_POST['chaos']);


$result = $bdd->createFighter(
    $_POST['name'],
    $_POST['description'],
    $_POST['title'],
    $_POST['power'],
    $_POST['resistance'],
    $_POST['hitpoints'],
    $_POST['chaos']
);
var_dump($power); 
