<?php

class Fighter {
<<<<<<< HEAD

    /* propriétés */
=======
    /*propriété*/
>>>>>>> d52449e80d501f7a5b56440efcc365a951e6faef
    private int $id;
    private string $title;
    private string $name;
    private string $thumb;
    private string $gif;

<<<<<<< HEAD
    /* constructeur */
    public function __construct(array $fighterData)
    {
        $this->id = $fighterData['id'];
        $this->name = $fighterData['name'];
        $this->title = $fighterData['title'];
        $this->thumb = $fighterData['thumb'];
        $this->gif = $fighterData['gif'];
    }

    /* assesseurs (getters) */
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getThumb(): string {
        return $this->thumb;
    }

    public function getGif(): string {
        return $this->gif;
    }

    /* mutateur (setter) */
    public function setTitle(string $title): void {
        $this->title = $title;
    }
}
=======
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
>>>>>>> d52449e80d501f7a5b56440efcc365a951e6faef
