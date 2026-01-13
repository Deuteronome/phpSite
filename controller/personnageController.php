<?php
if($_GET["personnage"]=='Goku') {
$title = "Sangoku - the Saiyan";
$asideImg ="../asset/gokuSide.gif";

} else if($_GET["personnage"]=='Freezer') {
$title = "Freezer - the killer";
$asideImg ="../asset/freezer.gif";
} else {
    header("location:../controller/homeController.php");
}

require_once("../view/personnageView.php");
?>

