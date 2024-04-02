<?php
include __DIR__ . '/../repository/contactUsRepository.php';
include __DIR__ . '/../models/contactUs.php';

if(isset($_POST['contactBtn'])){
    if(empty($_POST['username']) || empty($_POST['phone']) || empty($_POST['message'])){
        echo "Fill all fields!";
    }else{
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $id = rand(100,999);

        $contactUsRepository = new ContactUsRepository();

        
        $contactUs = new ContactUs($id, $username, $phone, $message);

        
        $contactUsRepository->insertContactUs($contactUs);
        $_SESSION['id'] = $contactUs->getId();
        echo "Message registered successfully!";
        header("location: ../home.php");
        


    }
}

?>