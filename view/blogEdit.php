<?php

$blogId = $_GET['id'];
include_once '../repository/blogsRepository.php';

$blogRepository = new BlogRepository();

$blog  = $blogRepository->getBlogById($blogId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Blog</h3>
    <form action="" method="post">
        <label for="id">Id:</label>
        <input type="text" name="id"  value="<?=$blog['id']?>" readonly> <br> <br>
        <label for="user_name">Username:</label>
        <input type="text" name="user_name"  value="<?=$blog['user_name']?>" readonly> <br> <br>
        <label for="title">Title: </label>
        <input type="text" name="title"  value="<?=$blog['title']?>"> <br> <br>
        <label for="content">Content: </label>
        <input type="text" name="content"  value="<?=$blog['content']?>"> <br> <br>
        <label for="image">Image: </label>
        <input type="file" name="image"  value="<?=$blog['image']?>"> <br> <br>
        <label for="date">Date: </label>
        <input type="text" name="date"  value="<?=$blog['date']?>" readonly> <br> <br>
        <label for="editDate">Edit date: </label>
        <input type="text" name="editDate"  value="<?=$blog['editDate']?>" readonly> <br> <br>

        <input type="submit" name="editBlog" value="save"> <br> <br>
    </form>
</body>
</html>

<?php
if(isset($_POST['editBlog'])){
    $id = $blog['id'];
    $user_name = $blog['user_name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $editDate = date('Y-m-d H:i:s');
    if (isset($_FILES["image"]) && !empty($_FILES["image"]["name"])) {
        // Process the file upload
        $targetDir = "Projekti-Web/uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    
        // Check if the file is valid and move it to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // File upload successful, continue with other operations
        } else {
            // Error handling for failed file upload
        }
    } else {
        // Handle case where no file was uploaded
    }
    

    $blogRepository->updateBlog($id,$user_name,$title,$content,$targetFile,$date,$editDate);
    header("location:dashboard.php");
}


?>