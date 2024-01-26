<?php

class Booking {
    private $id;
    private $user_id;
    private $fromWhere;
    private $whereTo;
    private $howMany;
    private $arrivals;
    private $leaving;
    
    function __construct($id,$user_id,$fromWhere,$whereTo,$howMany,$arrivals,$leaving) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->fromWhere = $fromWhere;
        $this->whereTo = $whereTo;
        $this->howMany = $howMany;
        $this->arrivals = $arrivals;
        $this->leaving = $leaving;
    }

    function getId() {
        return $this->id;
    }
    function getUserId() {
        return $this->user_id;
    }
    function getFromWhere() {
        return $this->fromWhere;
    }
    function getWhereTo() {
        return $this->whereTo;
    }
    function getHowMany() {
        return $this->howMany;
    }
    function getArrivals() {
        return $this->arrivals;
    }
    function getLeaving() {
        return $this->leaving;
    }
}


?>