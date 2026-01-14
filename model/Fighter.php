<?php

class Fighter {

    private int $id;
    private string $name;
    private string $thumb;
    private string $gif;   
    private string $title;
    private string $description;
    private int $power;
    private int $resistance;
    private int $hitpoints;
    private int $chaos;

    public function __construct(array $fighterData) 
    {
        $this->id = $fighterData["id"];
        $this->name = $fighterData["name"];
        $this->thumb = $fighterData["thumb"];
        $this->gif = $fighterData["gif"];
        $this->title = $fighterData["title"];
        $this->description = $fighterData["description"];
        $this->power = $fighterData["power"];
        $this->resistance = $fighterData["resistance"];
        $this->hitpoints = $fighterData["hitpoints"];
        $this->chaos = $fighterData["chaos"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getThumb(): string {
        return $this->thumb;    
    }

    public function getGif(): string {
        return $this->gif;
    }  

    public function getTitle(): string {
        return $this->title;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPower(): int {
        return $this->power;
    }

    public function getResistance(): int {
        return $this->resistance;
    }

    public function getHitpoints(): int {
        return $this->hitpoints;
    }

    public function getChaos(): int {
        return $this->chaos;
    }    
}
