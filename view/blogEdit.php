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
        <input type="text" name="id"  value="<?=$blog['id']?>" readonly> <br> <br>
        <input type="text" name="user_name"  value="<?=$blog['user_name']?>" readonly> <br> <br>
        <input type="text" name="title"  value="<?=$blog['title']?>"> <br> <br>
        <input type="text" name="content"  value="<?=$blog['content']?>"> <br> <br>
        <input type="file" name="image"  value="<?=$blog['image']?>"> <br> <br>
        <input type="text" name="date"  value="<?=$blog['date']?>" readonly> <br> <br>
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
    $image = $_POST['image'];
    $date = $_POST['date'];
    $editDate = date('Y-m-d H:i:s');

    $blogRepository->updateBlog($id,$user_name,$title,$content,$image,$date,$editDate);
    header("location:dashboard.php");
}


?>