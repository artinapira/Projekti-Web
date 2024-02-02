<?php
    include_once __DIR__ . '/../database/databaseConnection.php';

    class PlacesRepository{
        private $connection;

        function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }
        function insertPlace($place){
            $conn = $this->connection;

            $id =$place -> getId();
            $emri = $place->getEmri();
            $image = $place->getImage();
            $description = $place->getDescription();
            $cmimi = $place->getCmimi();

            $sql = "INSERT INTO places (id,emri,cmimi,image,description) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);

            $statement->execute([$id,$emri,$cmimi,$image,$description]);

            echo "<script> alert('Place has been inserted successfuly!'); </script>";
        }

        function getAllPlaces(){
            $conn = $this->connection;

            $sql = "SELECT * FROM places";

            $statement = $conn->query($sql);
            $places = $statement->fetchAll();
            return $places;
        }
           /* if ($statement->num_rows > 0) {
                $placess = $statement->fetch_all(MYSQLI_ASSOC);
                return $placess;
            } else {
                return [];
            }
        }
*/
        function getPlaceById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM places WHERE id='$id'";

            $statement = $conn->query($sql);
            $place = $statement->fetch();


           return $place;
        }
    
        function updatePlace($id, $emri,$cmimi,$image,$description){
            $conn = $this->connection;

            $sql = "UPDATE places SET emri=?, cmimi=?, image=?, description=?  WHERE id=?";

            $statement = $conn->prepare($sql);
            
            $statement->execute([$emri,$cmimi,$image,$description,$id]);


            echo "<script>alert('update was successful'); </script>";

        }

        //delete

        function deletePlace($id){
            $conn = $this->connection;

            $sql = "DELETE FROM places WHERE Id=?";

            $statement = $conn->prepare($sql);

            $statement->execute([$id]);

            echo "<script>alert('delete was successful'); </script>";
        } 

    }
?>