<?php

class Gallery {
    private $id;
    private $image;

    function __construct($id,$image) {
        $this->id = $id;
        $this->image = $image;
    }

    function getId() {
        return $this->id;
    }
    function getImage() {
        return $this->image;
    }

}
?>