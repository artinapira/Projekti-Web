<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Blog</title>
    <style>

    </style>
</head>
<body>

<h1>Add a New Blog</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <br>

    <label for="content">Content:</label>
    <textarea name="content" rows="5" required></textarea>
    <br>

    <label for="image">Image:</label>
    <input type="file" name="image" accept="image/*" required>
    <br>

    <input type="submit" value="Add Blog" name="blogBtn">
</form>

<?php include_once __DIR__ . '/../controller/blogsController.php';?> 

</body>
</html>