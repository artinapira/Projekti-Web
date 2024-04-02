<?php

include_once '../repository/userRepository.php';



$userRepository = new UserRepository();

$userRepository->deleteUser($_GET['id']);

header("location:dashboard.php");


?>