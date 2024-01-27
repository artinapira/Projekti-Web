<?php

$galleryId = $_GET['id'];
include_once '../repository/galleryRepository.php';

$galleryRepository = new GalleryRepository();

$gallery  = $galleryRepository->getGalleryById($galleryId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Photo</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="id"  value="<?=$gallery['id']?>" readonly> <br> <br>
        <input type="file" name="image"  value="<?=$gallery['image']?>"> <br> <br>

        <input type="submit" name="editPic" value="save"> <br> <br>
    </form>
</body>
</html>

<?php
if(isset($_POST['editPic'])){
    $id = $gallery['id'];
    $image = $_POST['image'];

    $galleryRepository->updateGallery($id,$image);
    header("location:dashboard.php");
}


?>