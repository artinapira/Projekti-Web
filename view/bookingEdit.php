<?php
$bookingId = $_GET['id'];
include_once '../repository/bookingRepository.php';

$bookingRepository = new BookingRepository();

$booking  = $bookingRepository->getBookingById($bookingId);

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
    <h3>Edit Booking</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$booking['id']?>" readonly> <br> <br>
        <input type="text" name="fromWhere"  value="<?=$booking['fromWhere']?>"> <br> <br>
        <input type="text" name="whereTo"  value="<?=$booking['whereTo']?>"> <br> <br>
        <input type="text" name="howMany"  value="<?=$booking['howMany']?>"> <br> <br>
        <input type="text" name="arrivals"  value="<?=$booking['arrivals']?>"> <br> <br>
        <input type="text" name="leaving"  value="<?=$booking['leaving']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php
if(isset($_POST['editBtn'])){
    $id = $booking['id'];
    $fromWhere = $_POST['fromWhere'];
    $whereTo = $_POST['whereTo'];
    $howMany = $_POST['howMany'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $bookingRepository->updateBooking($id,$fromWhere,$whereTo,$howMany,$arrivals,$leaving);
    header("location:dashboard.php");
}


?>