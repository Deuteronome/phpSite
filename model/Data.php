<?php

class Data {
    private $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=dbz;charset=utf8','dbz_admin','PNE2Cgrandlille');
        }catch(Exception $e) {
            die("Une erreur est survenue".$e->getMessage());
        }
        
    }

    public function getAllPersonnage () {
        
        
        $sqlQuery = "SELECT id, name, thumb FROM `personnage`";
        $statement = $this->bdd->prepare($sqlQuery);
        
        $statement-> execute();
        
        $req = $statement->fetchAll();

        return $req;
    }

}