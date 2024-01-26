<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

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

</body>
</html>