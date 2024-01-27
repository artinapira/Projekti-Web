<?php

$blogId = $_GET['id'];
include_once '../repository/blogsRepository.php';



$blogRepository = new BlogRepository();

$blogRepository->deleteBlog($blogId);

header("location:dashboard.php");


?>