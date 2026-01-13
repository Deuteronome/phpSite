<?php

class Fighter {

    private int $id;
    private string $name;
    private string $thumb;
    private string $gif;   
    private string $title;

    public function __construct(array $fighterData) {
        $this->id = $fighterData["id"];
        $this->name = $fighterData["name"];
        $this->thumb = $fighterData["thumb"];
        $this->gif = $fighterData["gif"];
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

    public function setTitle(string $title): void {
        $this->title = $title;
    } 

    public function getTitle(): string {
        return $this->title;
    }
}
