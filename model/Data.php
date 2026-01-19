<?php

class Data {

    private PDO $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=dbz_fighter;charset=utf8','dbz_admin','darkgoku');
        } catch(Exception $e) {
            die("Une erreur est survenue : ".$e->getMessage());
        }

        /*var_dump($this);*/
        
    }

    public function getAllFighters () {
        $sqlQuery = "SELECT id, name, thumb, gif, title FROM figher";
        $statement = $this->bdd->prepare($sqlQuery);
        $statement->execute();
        $req = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $req;
    }

    public function getFighterById ($id) {
        $sqlQuery = "SELECT * FROM figher WHERE id= :id";
        $statement = $this->bdd->prepare($sqlQuery);
        $statement->execute([
            'id' => $id
        ]);
        $req = $statement->fetch(PDO::FETCH_ASSOC);

        return $req;
    }
}