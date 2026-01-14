<?php

class Fighter {
    /*propriété*/
    private int $id;
    private string $title;
    private string $name;
    private string $thumb;
    private string $gif;
    private string $description;
    private int $power;
    private int $resistance;
    private int $hitpoints;
    private int $chaos;

    /* constructeur*/
    public function __construct($fighterData)
    {
        $this->id=$fighterData["id"];
        $this->title=$fighterData["title"];
        $this->name=$fighterData["name"];
        $this->thumb=$fighterData["thumb"];
        $this->gif=$fighterData["gif"];
        $this->description=$fighterData["description"];
        $this->power=$fighterData["power"];
        $this->resistance=$fighterData["resistance"];
        $this->hitpoints=$fighterData["hitpoints"];
        $this->chaos=$fighterData["chaos"];
    }

    /*assesseurs*/

    public function getId():int {
        return $this->id;
    }

    public function getName():string {
        return $this->name;
    }

    public function getTitle():string {
        return $this->title;
    }

    public function getThumb():string {
        return $this->thumb;
    }

    public function getGif():string {
        return $this->gif;
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

    public function getHitpoints():int {
        return $this->hitpoints;
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

    public function setHitpoints($hitpoints):void {
        $this->$hitpoints = $hitpoints;
    }

    public function setChaos($chaos):void {
        $this->chaos = $chaos;
    }
}