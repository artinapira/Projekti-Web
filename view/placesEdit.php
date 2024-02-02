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
        <label for="id">Id: </label>
        <input type="text" name="id"  value="<?=$place['id']?>" readonly> <br> <br>
        <label for="emri">Emri: </label>
        <input type="text" name="emri"  value="<?=$place['emri']?>"> <br> <br>
        <label for="cmimi">Cmimi:</label>
        <input type="text" name="cmimi"  value="<?=$place['cmimi']?>"> <br> <br>
        <label for="image">Image: </label>
        <input type="file" name="image"  value="<?=$place['image']?>"> <br> <br>
        <label for="description">Description: </label>
        <input type="text" name="description"  value="<?=$place['description']?>"> <br> <br>
        <input type="submit" name="editPlace" value="save"> <br> <br>
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['editPlace'])){
    
    $id = $place['id'];
    $emri = $_POST['emri']; 
    $cmimi = $_POST['cmimi'];
    $image = $_POST['image']; 
    $description = $_POST['description']; 
   

    $placesRepository->updatePlace($id,$emri,$cmimi,$image,$description);
    header("location:dashboard.php");
    
}
?>