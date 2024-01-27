<?php
include __DIR__ . '/../repository/galleryRepository.php';
include __DIR__ . '/../models/gallery.php';

if(isset($_POST['galleryBtn'])) {
    

    $id = rand(100, 999);
    $baseUrl = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $baseUrl .= "://" . $_SERVER['HTTP_HOST'];
    $targetDir = $baseUrl . "/Projekti-Web/uploads/";

    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    $check = getimagesize($_FILES["image"]["tmp_name"]);

    if ($check !== false) {

        echo "Target Dir: " . $targetDir . "<br>";
        echo "Target File: " . $targetFile . "<br>";

        // Move the uploaded file to the target directory
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
                
        // Create Blog object
        $gallery = new Gallery($id, $targetFile);
        
        // Insert Blog
        $galleryRepository = new GalleryRepository();
        $galleryRepository->insertGallery($gallery);
        $_SESSION['id'] = $gallery->getId();
        header("location: ../Gallery.php");
    } 
    else {
        echo "<script>alert('Invalid image file.'); </script>";
    }

        
}
?>