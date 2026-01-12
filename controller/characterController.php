<?php
if($_GET["character"]=='goku') {
 $title = "Sangoku - The Sayen";    
    $asideimg = "../asset/gokuSide.gif";
}else if ($_GET["character"]=='freezer') {
     $title = "Freezer - The ice alien";    
    $asideimg = "../asset/freezer.gif";
}else{
   header("location:../controller/homeController.php"); 
}
    require_once("../view/characterview.php")

   
?>
