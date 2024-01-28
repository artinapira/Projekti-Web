<?php

$placeId = $_GET['id'];

include_once '../repository/placesRepository.php';

$placesRepository = new PlacesRepository();

$place = $placesRepository->getPlaceById($placeId);


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
    <h3>Edit Places</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$place['id']?>" readonly> <br> <br>
        <input type="text" name="emri"  value="<?=$place['emri']?>"> <br> <br>
        <input type="file" name="image"  value="<?=$place['image']?>"> <br> <br>
        <input type="text" name="description"  value="<?=$place['description']?>"> <br> <br>
        <input type="text" name="cmimi"  value="<?=$place['cmimi']?>"> <br> <br>
        <input type="submit" name="editPlace" value="save"> <br> <br>
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['editPlace'])){
    
    $id = $place['id'];
    $emri = $_POST['emri']; 
    $image = $_POST['image']; 
    $description = $_POST['description']; 
    $cmimi = $_POST['cmimi'];
   

    $placesRepository->updatePlace($id,$emri,$image,$description,$cmimi);
    header("location:dashboard.php");
    
}
?>


