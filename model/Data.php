<?php

class Data {

    private PDO $bdd;


    public function __construct() {
        try {
            $this->bdd = new PDO(
                'mysql:host=localhost;dbname=dbz_fighter;charset=utf8',
                'dbz_admin',
                'Picolo59'
            );
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public function getAllFighter() {
        $sqlQuery = "SELECT id, name, thumb FROM figher";
        $statement = $this->bdd->prepare($sqlQuery);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFighterById($id) {
        $sqlQuery = "SELECT * FROM figher WHERE id = :id";
        $statement = $this->bdd->prepare($sqlQuery);
        
        $statement->execute(['id' => $id]);
        $req = $statement->fetch();
        return $req;
    }
}

