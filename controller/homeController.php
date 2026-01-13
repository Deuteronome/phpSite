<?php
$title = "Choose your fighter";
$asideImg ="../asset/logo.gif";

require_once("../model/Data.php");

$bdd = new Data();

$personnageListe = $bdd->getAllPersonnage();


require_once("../view/homeView.php");
?>

