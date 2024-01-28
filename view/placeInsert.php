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
    <title>Add Place</title>
    <style>

    </style>
</head>
<body>

<h1>Add a New Place</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <label for="emri">Emri:</label>
    <input type="text" name="emri" required>
    <br>

    <label for="image">Image:</label>
    <input type="file" name="image" accept="image/*" required>
    <br>

    <label for="description">Description:</label>
    <textarea name="content" rows="19" required></textarea>
    <br>

    <label for="cmimi">Cmimi:</label>
    <input type="text" name="cmimi" required>
    <br>
    <input type="submit" value="Add Place" name="placeBtn">
</form>

<?php include_once __DIR__ . '/../controller/placesController.php';?> 

</body>
</html>