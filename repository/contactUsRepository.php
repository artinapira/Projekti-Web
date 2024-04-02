<?php 
include_once __DIR__ . '/../database/databaseConnection.php';

class ContactUsRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertContactUs($contactUs){

        $conn = $this->connection;

        $id = $contactUs->getId();
        $username = $contactUs->getUsername();
        $phone = $contactUs->getPhone();
        $message = $contactUs->getMessage();

        $sql = "INSERT INTO contactUs (id,username,phone,message) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$username,$phone,$message]);

        echo "<script> alert('Message has been inserted successfuly!'); </script>";


    }

    function getAllContactUs(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contactUs";

        $statement = $conn->query($sql);
        $contactUs = $statement->fetchAll();

        return $contactUs;
    }

    function getContactUsById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM contactUs WHERE id='$id'";

        $statement = $conn->query($sql);
        $contactUs = $statement->fetch();

        return $contactUs;
    }

    function updateContactUs($id,$username,$phone,$message){
        $conn = $this->connection;

        $sql = "UPDATE contactUs SET username=?, phone=?, message=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$username,$phone,$message,$id]);

        echo "<script>alert('update was successful'); </script>";
    } 

    function deleteContactUs($id){
        $conn = $this->connection;

        $sql = "DELETE FROM contactUs WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}
?>