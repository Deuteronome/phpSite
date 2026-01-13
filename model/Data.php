<?php

class Data {
    private PDO $bdd;

    public function __construct() {
        try {
            $this->bdd = new PDO(
                'mysql:host=localhost;dbname=dbz_fighter;charset=utf8',
                'admin_dbz',
                'Aviva1605@'
            );
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }

    }
    public function getAllFighter() {
        $sqlQuery = "SELECT id, name, thumb FROM fighter";
        $statment = $this->bdd->prepare($sqlQuery);
        $statment->execute();
        $req = $statment->fetchAll();
        return $req;
    }
}