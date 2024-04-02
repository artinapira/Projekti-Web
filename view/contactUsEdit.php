<?php

$contactUsId = $_GET['id'];

include_once '../repository/contactUsRepository.php';

$contactUsRepository = new ContactUsRepository();

$contactUs = $contactUsRepository->getContactUsById($contactUsId);


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
    <h3>Edit Message</h3>
    <form action="" method="post">
        <label for="id">Id: </label>
        <input type="text" name="id"  value="<?=$contactUs['id']?>" readonly> <br> <br>
        <label for="username">Username: </label>
        <input type="text" name="username"  value="<?=$contactUs['username']?>"> <br> <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone"  value="<?=$contactUs['phone']?>"> <br> <br>
        <label for="message">Message: </label>
        <input type="text" name="message"  value="<?=$contactUs['message']?>"> <br> <br>
        <input type="submit" name="editMessage" value="save"> <br> <br>
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['editMessage'])){
    
    $id = $place['id'];
    $username = $_POST['username']; 
    $phone = $_POST['phone'];
    $message = $_POST['message']; 

    $contactUsRepository->updateContactUs($id,$username,$phone,$message);
    header("location:dashboard.php");
    
}
?>