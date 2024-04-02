<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Message</title>
</head>
<body>

<h1>Add a New Message
</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" required>
    <br>

    <label for="message">Message:</label>
    <input type="text" name="message" required>
    <br>

    <input type="submit" value="Add Message" name="contactBtn">
</form>

<?php include_once __DIR__ . '/../controller/contactUsController.php';?> 

</body>
</html>