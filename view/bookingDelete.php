<?php

$bookingId = $_GET['id'];
include_once '../repository/bookingRepository.php';



$bookingRepository = new BookingRepository();

$bookingRepository->deleteBooking($bookingId);

header("location:dashboard.php");


?>