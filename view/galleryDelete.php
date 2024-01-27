<?php

$galleryId = $_GET['id'];
include_once '../repository/galleryRepository.php';

$galleryRepository = new GalleryRepository();

$galleryRepository->deleteGallery($galleryId);

header("location:dashboard.php");
?>