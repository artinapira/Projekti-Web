<?php
$placeId = $_GET['id'];
include_once '../repository/PlacesRepository.php';


$placesRepository = new PlacesRepository();

$placesRepository->deletePlace($placeId);

header("location:dashboard.php");
?>