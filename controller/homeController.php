<?php
    $title = "Choose your fighter";
    $asideImg = "../asset/anim/logo.gif";

    require_once("../model/Data.php");
<<<<<<< HEAD

    $bdd = new Data();


    $fighterList = $bdd->getAllFighters();
    /**var_dump($fighterList[0]);*/

    require_once("../view/homeView.php");
?>


=======

    $bdd = new Data();

    $fighterList = $bdd->getAllFighters();
    /*var_dump($figherList[0]["thumb"]);*/

    require_once("../view/homeView.php");
?>
>>>>>>> d52449e80d501f7a5b56440efcc365a951e6faef

