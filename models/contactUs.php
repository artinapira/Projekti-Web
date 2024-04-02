<?php

class ContactUs{
    private $id;
    private $username;
    private $phone;
    private $message;


    function __construct($id,$username,$phone,$message){
        $this->id = $id;
        $this->username = $username;
        $this->phone = $phone;
        $this->message = $message;
    }

    function getId(){
        return $this->id;
    }

    function getUsername(){
        return $this->username;
    }
    function getPhone(){
        return $this->phone;
    }
    function getMessage(){
        return $this->message;
    }
}

?>