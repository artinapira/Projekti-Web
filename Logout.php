<?php

include_once '../Config/dbconnect.php';

class LogoutController {
    public function __construct() {
        session_start();
        $this->logout();
    }

    private function logout() {
        session_unset();
        session_destroy();
        header('location: login.php');
        exit();
    }
}

// Create an instance of the LogoutController to initiate the logout process
new LogoutController();


?>