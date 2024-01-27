<?php

class Blog {
    private $id;
    private $user_name;
    private $title;
    private $content;
    private $image;
    private $date;
    private $editDate;
    function __construct($id,$user_name,$title,$content,$image,$date,$editDate) {
        $this->id = $id;
        $this->user_name = $user_name;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->date = $date;
        $this->editDate = $EditDate;
    }

    function getId() {
        return $this->id;
    }
    function getUserName() {
        return $this->user_name;
    }
    function getTitle() {
        return $this->title;
    }
    function getContent() {
        return $this->content;
    }
    function getImage() {
        return $this->image;
    }
    function getDate() {
        return $this->date;
    }
    function getEditDate() {
        return $this->editDate;
    }
}


?>