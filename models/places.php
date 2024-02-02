<?php

class Places {
    private $id;
    private $emri;
    private $cmimi;
    private $image;
    private $description;
    
    function __construct($id,$emri,$cmimi,$image,$description){

        $this->id= $id;
        $this->emri = $emri;
        $this->cmimi = $cmimi;
        $this->image = $image;
        $this->description = $description;
    }

    function getId(){
        return $this->id;
    }
    function getEmri(){
        return $this->emri;
    }
    function getCmimi(){
        return $this->cmimi;
    }
    function getImage(){
        return $this->image;
    }
    function getDescription(){
        return $this->description;
    }
    function setEmri($emri){
        $this->emri =$emri;
    }
    function setImage($image){
        $this->image =$image;
    }
    function setDescription($description){
        $this->description =$description;
    }
    function  setCmimi($cmimi){
        $this->cmimi=$cmimi;
    }
}


?>