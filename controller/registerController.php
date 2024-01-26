<?php
include __DIR__ . '/../repository/userRepository.php';
include __DIR__ . '/../models/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $username.rand(100,999);

        $userRepository = new UserRepository();

        if ($userRepository->userExists($username, $email)) {
            echo "Username or email already exists!";
        } else {
            // Create a new user instance
            $user = new User($id, $username, $email, $password);

            // Insert the new user
            $userRepository->insertUser($user);

            echo "User registered successfully!";
        }


    }
}

?>