<?php

class Fighter {

    /* propriétés */
    private int $id;
    private string $title;
    private string $name;
    private string $thumb;
    private string $gif;

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
