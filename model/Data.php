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

    public function getAllFighters() {
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

        public function createFighter($name, $description, $title, $power, $resistance, $hitpoints, $chaos, $thumb="../asset/thumb/goku.png", $gif="../asset/anim/logo.gif") {
        $sqlQuery = "INSERT INTO figher (name, description, title, power, resistance, hitpoints, chaos, thumb, gif)
            values (:name, :description, :title, :power, :resistance, :hitpoints, :chaos, :thumb, :gif)";
        $statement = $this->bdd->prepare($sqlQuery);
        try{
        $statement->execute([
                'name'=>$name,
                'description' => $description,
                'title'=>$title,
                'power'=>$power,
                'resistance'=>$resistance,
                'hitpoints'=>$hitpoints,
                'chaos'=>$chaos,
                'thumb'=> $thumb,
                'gif'=>$gif
        ]);
        } catch(Exception $e) {
            return $e->getMessage();
        }
        return true;
    }
}

