<?php
class PlacesConnection{
      
    private $server ="localhost";
    private $username ="root";
    private $password ="";
    private $db ="traveling_db";

    function startConnection(){

        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->db",$this->username,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "Database Conenction Failed".$e->getMessage();
            return null;
        }


    }
}
    /*function startConnection() {
        $conn = new mysqli($this->server, $this->username, $this->password, $this->db);

        if ($conn->connect_error) {
            die("Lidhja dështoi: " . $conn->connect_error);
        }
        
        echo "Është lidhur me sukses";

        return $conn;
    }
}*/
?>
