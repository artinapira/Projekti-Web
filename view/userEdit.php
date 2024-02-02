
<?php
$userId = $_GET['id'];
include_once '../repository/userRepository.php';



$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);


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
    <h3>Edit User</h3>
    <form action="" method="post">
        <label for="id">Id:</label>
        <input type="text" name="id"  value="<?=$user['id']?>" readonly> <br> <br>
        <label for="username">Username:</label>
        <input type="text" name="username"  value="<?=$user['username']?>"> <br> <br>
        <label for="email">Email:</label>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br> <br>
        <label for="password">Password:</label>
        <input type="text" name="password"  value="<?=$user['password']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepository->updateUser($id,$username,$email,$password);
    header("location:dashboard.php");
}


?>