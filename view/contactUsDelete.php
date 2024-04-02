<?php

$contactUsId = $_GET['id'];
include_once '../repository/contactUsRepository.php';



$contactUsRepository = new ContactUsRepository();

$contactUsRepository->deleteContactUs($contactUsId);

header("location:dashboard.php");


?>