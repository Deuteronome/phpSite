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

    public function getFighterById ($id) {
        $sqlQuery = "SELECT * FROM `character` WHERE id= :id";
        $statement = $this->bdd->prepare($sqlQuery);
        $statement->execute([
            'id' => $id
        ]);
        $req = $statement->fetch();

        return $req;
    }
    
    public function createFighter($name, $description, $title, $power, $resistance, $hp, $chaos, $thumb="../asset/thumb/goku.png", $gif="../asset/anim/logo.gif") {
        $sqlQuery = "INSERT INTO `character` (name, gif, thumb, title, description, power, resistance, hp, chaos) values (:name, :gif, :thumb, :title, :description, :power, :resistance, :hp, :chaos)";
        $statement = $this->bdd->prepare($sqlQuery);
        try{
        $statement->execute([
            'name'=>$name,
            'description'=>$description,
            'title'=>$title,
            'power'=>$power,
            'resistance'=>$resistance,
            'hp'=>$hp,
            'chaos'=>$chaos,
            'thumb'=>$thumb,
            'gif'=>$gif
        ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return true;
    }
}
