<?php
$blogId = $_GET['id'];

include_once __DIR__ . '../controller/blogsController.php';
include_once __DIR__ . '../repository/blogsRepository.php';

$blogRepository = new BlogRepository();
$blogs = $blogRepository->getBlogById($blogId);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="full-content">
        <?php echo $blogs['content']; ?>
    </div>
</body>
</html> 
