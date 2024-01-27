<?php
include __DIR__ . '/../repository/bookingRepository.php';
include __DIR__ . '/../models/booking.php';

if(isset($_POST['bookBtn'])) {
    if(empty($_POST['fromWhere']) || empty($_POST['whereTo']) || empty($_POST['howMany']) || empty($_POST['arrivals'])
    || empty($_POST['leaving'])){
        echo "Fill all fields!";
    }else {
        // Check if the user is logged in
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            $fromWhere = $_POST['fromWhere'];
            $whereTo = $_POST['whereTo'];
            $howMany = $_POST['howMany'];
            $arrivals = $_POST['arrivals'];
            $leaving = $_POST['leaving'];
            $id = rand(100, 999);

            $bookingRepository = new BookingRepository();

            // Create a new booking instance with user_id
            $booking = new Booking($id, $user_id, $fromWhere, $whereTo, $howMany, $arrivals, $leaving);

            // Insert the new booking
            $bookingRepository->insertBooking($booking);
            $_SESSION['id'] = $booking->getId();

            echo "Booking arranged successfully!";
        } else {
            // Redirect to the login page or handle the case where the user is not logged in
            echo "User not logged in!";
        }
    }
}
?>