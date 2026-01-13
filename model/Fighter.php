<?php

class Fighter {
    /*propriété*/
    private int $id;
    private string $title;
    private string $name;
    private string $thumb;
    private string $gif;

    /* constructeur*/
    public function __construct($fighterData)
    {
        $this->id=$fighterData["id"];
        $this->title=$fighterData["title"];
        $this->name=$fighterData["name"];
        $this->thumb=$fighterData["thumb"];
        $this->gif=$fighterData["gif"];
    }

    /*assessurs*/

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

    public function setTitle($title):void {
        $this->title = $title;
    }
}