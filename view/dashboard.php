<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header('Location: ../Login.php');
    exit();
}
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
    <h1>USERS</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>Edit</th>
            <th>Delete</th>
                 
        </tr>

        <?php 
            include_once '../repository/userRepository.php';

            $userRepository = new UserRepository();

            $users = $userRepository->getAllUsers();

            foreach($users as $user){
                echo 
                "
                <tr>
                    <td>$user[id]</td>
                    <td>$user[username]</td>
                    <td>$user[email]</td>
                    <td>$user[password]</td>
                    <td><a href='userEdit.php?id=$user[id]'>Edit</a> </td>
                    <td><a href='userDelete.php?id=$user[id]'>Delete</a></td>
                     
                </tr>
                ";
            }

             
             
        ?>
    </table>
    <br>
    <br>

    <h1>BOOKINGS</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>USER ID</th>
            <th>FROM</th>
            <th>WHERE TO</th>
            <th>HOW MANY</th>
            <th>ARRIVALS</th>
            <th>LEAVING</th>
            <th>Edit</th>
            <th>Delete</th>
                 
        </tr>

        <?php 
            include_once '../repository/bookingRepository.php';

            $bookingRepository = new BookingRepository();

            $bookings = $bookingRepository->getAllBooking();

            foreach($bookings as $booking){
                echo 
                "
                <tr>
                    <td>$booking[id]</td>
                    <td>$booking[user_id]</td>
                    <td>$booking[fromWhere]</td>
                    <td>$booking[whereTo]</td>
                    <td>$booking[howMany]</td>
                    <td>$booking[arrivals]</td>
                    <td>$booking[leaving]</td>
                    <td><a href='bookingEdit.php?id=$booking[id]'>Edit</a> </td>
                    <td><a href='bookingDelete.php?id=$booking[id]'>Delete</a></td>
                     
                </tr>
                ";
            }

             
             
        ?>
    </table>
    <br>
    <br>
    <h1>Blogs</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>TITLE</th>
            <th>CONTENT</th>
            <th>IMAGE</th>
            <th>DATE</th>
            <th>EDIT DATE</th>
            <th>Edit</th>
            <th>Delete</th>
                 
        </tr>

        <?php 
            include_once '../repository/blogsRepository.php';

            $blogRepository = new BlogRepository();

            $blogs = $blogRepository->getAllBlogs();

            foreach($blogs as $blog){
                echo 
                "
                <tr>
                    <td>$blog[id]</td>
                    <td>$blog[user_name]</td>
                    <td>$blog[title]</td>
                    <td>$blog[content]</td>
                    <td>$blog[image]</td>
                    <td>$blog[date]</td>
                    <td>$blog[editDate]</td>
                    <td><a href='blogEdit.php?id=$blog[id]'>Edit</a> </td>
                    <td><a href='blogDelete.php?id=$blog[id]'>Delete</a></td>
                     
                </tr>
                ";
            }

             
             
        ?>
    </table>
    <br>
    <br>
    <h1>Gallery</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>Edit</th>
            <th>Delete</th>
            <th><a href="galleryInsert.php">Insert</a></th>
                 
        </tr>

        <?php 
            include_once '../repository/galleryRepository.php';

            $galleryRepository = new GalleryRepository();

            $galleries = $galleryRepository->getAllGallery();

            foreach($galleries as $gallery){
                echo 
                "
                <tr>
                    <td>$gallery[id]</td>
                    <td>$gallery[image]</td>
                    <td><a href='galleryEdit.php?id=$gallery[id]'>Edit</a> </td>
                    <td><a href='galleryDelete.php?id=$gallery[id]'>Delete</a></td>
                     
                </tr>
                ";
            }

             
             
        ?>
    </table>

    <br>
    <br>
    <h1>Places</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>EMRI</th>
            <th>CMIMI</th>
            <th>IMAGE</th>
            <th>DESCRIPTION</th>
            <th>Edit</th>
            <th>Delete</th>
            <th><a href="placesInsert.php">Insert</a></th>
                 
        </tr>

        <?php 
            include_once '../repository/placesRepository.php';

            $placesRepository = new PlacesRepository();

            $places = $placesRepository->getAllPlaces();

            foreach($places as $place){
                echo 
                "
                <tr>
                    <td>$place[id]</td>
                    <td>$place[emri]</td>
                    <td>$place[cmimi]</td>
                    <td>$place[image]</td>
                    <td>$place[description]</td>
                    <td><a href='placesEdit.php?id=$place[id]'>Edit</a> </td>
                    <td><a href='placesDelete.php?id=$place[id]'>Delete</a></td>
                     
                </tr>
                ";
            }

             
             
        ?>
    </table>

    <br>
    <br>
    <h1>Contact Us</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PHONE</th>
            <th>MESSAGE</th>
            <th>Edit</th>
            <th>Delete</th>
            <th><a href="insertContactUs.php">Insert</a></th>
                 
        </tr>

        <?php 
            include_once '../repository/contactUsRepository.php';

            $contactUsRepository = new ContactUsRepository();

            $contactUs = $contactUsRepository->getAllContactUs();

            foreach($contactUs as $message){
                echo 
                "
                <tr>
                    <td>$message[id]</td>
                    <td>$message[username]</td>
                    <td>$message[phone]</td>
                    <td>$message[message]</td>
                    <td><a href='contactUsEdit.php?id=$message[id]'>Edit</a> </td>
                    <td><a href='contactUsDelete.php?id=$message[id]'>Delete</a></td>
                     
                </tr>
                ";
            }

             
             
        ?>
    </table>

</body>
</html>