
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Place</title>
</head>
<body>

<h1>Add a New Place</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <label for="emri">Emri:</label>
    <input type="text" name="emri" required>
    <br>

    <label for="cmimi">Cmimi:</label>
    <input type="text" name="cmimi" required>
    <br>

    <label for="image">Image:</label>
    <input type="file" name="image" accept="image/*" required>
    <br>

    <label for="description">Description:</label>
    <textarea name="description" rows="19" required></textarea>
    <br>

    <input type="submit" value="Add Place" name="placeBtn">
</form>

<?php include_once __DIR__ . '/../controller/placesController.php';?> 

</body>
</html>