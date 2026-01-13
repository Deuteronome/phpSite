<?php

class Data {

    private PDO $bdd;
    
    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=dbz_fighter;charset=utf8','dbz_admin','Vegeta62');
        } catch(Exception $e) {
            die($e->getMessage());
        }

        /*var_dump($this); (equivalent console log) */

    }

    public function getAllFighters () {
        $sqlQuery = "SELECT id, name, thumb FROM `character`";
        $statement = $this->bdd->prepare($sqlQuery);
        $statement->execute();
        $req = $statement->fetchAll();

        return $req;
    }
}