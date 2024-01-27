<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Pictures</title>
    <style>

    </style>
</head>
<body>

<h1>Add a New Picture</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

    <label for="image">Image:</label>
    <input type="file" name="image" accept="image/*" required>
    <br>

    <input type="submit" value="Add picture" name="galleryBtn">
</form>

<?php include_once __DIR__ . '/../controller/galleryController.php';?> 

</body>
</html>