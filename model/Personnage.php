<?php
    class Personnage {
        private int $id;
        private string $title;
        private string $name;
        private string $thumb;
        private string $gif;

        public function __construct($personnageData)
        {
            $this->id=$personnageData["id"];
            $this->name=$personnageData["id"];
            $this->thumb=$personnageData["id"];
            $this->gif=$personnageData["id"];
            $this->title=$personnageData["id"];
        }

public function getId() {
    return $this->id;
}

public function getName() {
    return $this->name;
}

public function getThumb() {
    return $this->thumb;
}

public function getGif() {
    return $this->gif;
}

public function getTitle() {
    return $this->title;
}

public function setTitle($title):void {
    $this->title = $title;
}

}