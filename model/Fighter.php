<?php

class Fighter {
    /* propriétés */
    private int $id;
    private string $name;
    private string $thumb;
    private string $gif;
    private string $title;

    /* constructeur */
    public function __construct($fighterData)
    {
        $this->id=$fighterData["id"];
        $this->name=$fighterData["name"];
        $this->thumb=$fighterData["thumb"];
        $this->gif=$fighterData["gif"];
        $this->title=$fighterData["title"];
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

    public function setTitle($title):void {
        $this->title = $title;
    }
}

