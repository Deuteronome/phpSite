<?php

class Fighter {
    /* propriétés */
    private int $id;
    private string $name;
    private string $thumb;
    private string $gif;
    private string $title;
    private string $description;
    private int $power;
    private int $resistance;
    private int $hp;
    private int $chaos;

    /* constructeur */
    public function __construct($fighterData)
    {
        $this->id=$fighterData["id"];
        $this->name=$fighterData["name"];
        $this->thumb=$fighterData["thumb"];
        $this->gif=$fighterData["gif"];
        $this->title=$fighterData["title"];
        $this->description=$fighterData["description"];
        $this->power=$fighterData["power"];
        $this->resistance=$fighterData["resistance"];
        $this->hp=$fighterData["hp"];
        $this->chaos=$fighterData["chaos"];
    }
    /* assesseurs */

    public function getId():int {
        return $this->id;
    }

    public function getName():string {
        return $this->name;
    }

    public function getThumb():string {
        return $this->thumb;
    }

    public function getGif():string {
        return $this->gif;
    }

    public function getTitle():string {
        return $this->title;
    }

    public function getDescription():string {
        return $this->description;
    }

    public function getPower():int {
        return $this->power;
    }

    public function getResistance():int {
        return $this->resistance;
    }

    public function getHp():int {
        return $this->hp;
    }

    public function getChaos():int {
        return $this->chaos;
    }

    public function setTitle($title):void {
        $this->title = $title;
    }

    public function setPower($power):void {
        $this->power = $power;
    }

    public function setResistance($resistance):void {
        $this->resistance = $resistance;
    }

    public function setHp($hp):void {
        $this->hp = $hp;
    }

    public function setChaos($chaos):void {
        $this->chaos = $chaos;
    }








}

