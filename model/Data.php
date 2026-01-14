<?php

class Data {

    private PDO $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=dbz_fighter;charset=utf8','dbz_admin','Picolo59');
        } catch(Exception $e) {
            die("Une erreur est survenue : ".$e->getMessage());
        }

        /*var_dump($this);*/
        
    }

    public function getAllFighters () {
        $sqlQuery = "SELECT id, name, thumb FROM figher";
        $statement = $this->bdd->prepare($sqlQuery);
        $statement->execute();
        $req = $statement->fetchAll();

        return $req;
    }

    public function getFighterById ($id) {
        $sqlQuery = "SELECT * FROM figher WHERE id= :id";
        $statement = $this->bdd->prepare($sqlQuery);
        $statement->execute([
            'id' => $id,
        ]);
        $req = $statement->fetch();

        return $req;
    }
}