<?php
class Places{
    private $id;
    private $emri;
    private $image;
    private $description;
    private $cmimi;
   function __construct($id,$emri,$image,$description, $cmimi){

    $this->id= $id;
    $this->emri = $emri;
    $this->image = $image;
    $this->description = $description;
    $this->cmimi = $cmimi;
    }
    function getId(){
      return $this->id;
    }
    function getEmri(){
      return $this->emri;
    }
    function getImage(){
      return $this->image;
    }
    function getDescription(){
      return $this->description;
    }
    function getCmimi(){
      return $this->cmimi;
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