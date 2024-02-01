<?php
include  __DIR__ . '/../repository/placesRepository.php';
include   __DIR__ . '/../models/places.php';

if(isset($_POST['placeBtn'])){
    if(empty($_POST['emri']) ||  empty($_POST['description'])||  empty($_POST['cmimi'])){
        echo "Fill all fields!";
    }else {
       
        if (isset($_SESSION['user_id'])) {
            $emri = $_POST['emri'];
            $description = $_POST['description'];
            $cmimi = $_POST['cmimi'];
            $id = rand(100, 999);
           
            $baseUrl = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
            $baseUrl .= "://" . $_SERVER['HTTP_HOST'];
            $targetDir = $baseUrl . "/Projekti-Web/img/";
        
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        
            $check = getimagesize($_FILES["image"]["tmp_name"]);
        
            if ($check !== false){
        
                echo "Target Dir: " . $targetDir . "<br>";
                echo "Target File: " . $targetFile . "<br>";
        
                // Move the uploaded file to the target directory
                move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
            

                $place = new Places($id, $emri,$targetFile,$description, $cmimi);

                $placesRepository = new PlacesRepository();
                $placesRepository->insertPlace($place);
                $_SESSION['id'] = $place ->getId();
                header("location: ../Places.php");
            } 
            else {
             echo "<script>alert('Invalid image file.'); </script>";
            } 
        }
        
    }
}


   

?>