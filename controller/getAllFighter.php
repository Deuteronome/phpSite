<?php

require_once("../model/Data.php");
header('Content-Type: application/json; charset=utf-8');
$bdd = new Data();
$fighterList = $bdd->getAllFighters();
echo json_encode($fighterList);
