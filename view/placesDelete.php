<?php
$placeId = $_GET['id'];
include_once '../repository/placesRepository.php';


$placesRepository = new PlacesRepository();

$placesRepository->deletePlace($placeId);

header("location:dashboard.php");
?>