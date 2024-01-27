<?php

include_once __DIR__ . '/../database/databaseConnection.php';

class GalleryRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertGallery($gallery) {
        $conn = $this->connection;

        $id = $gallery->getId();
        $image = $gallery->getImage();

        $sql = "INSERT INTO gallery (id,image) VALUES(?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$image]);

        echo "<script> alert('Picture has been inserted successfuly!'); </script>";
    }

    function getAllGallery(){
        $conn = $this->connection;

        $sql = "SELECT * FROM gallery";

        $statement = $conn->query($sql);
        $galleries = $statement->fetchAll();

        return $galleries;
    }

    function getGalleryById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM gallery WHERE id='$id'";

        $statement = $conn->query($sql);
        $gallery = $statement->fetch();


        return $gallery;
    }

    function updateGallery($id,$image) {
        $conn = $this->connection;

        $sql = "UPDATE gallery SET image=? WHERE id=? ";

        $statement = $conn->prepare($sql);

        $statement->execute([$image,$id]);

        echo "<script>alert('update was successful'); </script>";
    } 

    function deleteGallery($id){
        $conn = $this->connection;

        $sql = "DELETE FROM gallery WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    }
}
?>