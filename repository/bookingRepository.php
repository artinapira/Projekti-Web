<?php

include __DIR__ . '/../database/databaseConnection.php';

class BookingRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertBooking($booking) {
        $conn = $this->connection;

        $id = $booking->getId();
        $user_id = $booking->getUserId();
        $fromWhere = $booking->getFromWhere();
        $whereTo = $booking->getWhereTo();
        $howMany = $booking->getHowMany();
        $arrivals = $booking->getArrivals();
        $leaving = $booking->getLeaving();

        $sql = "INSERT INTO book (id,user_id,fromWhere,whereTo,howMany,arrivals,leaving) VALUES(?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$user_id,$fromWhere,$whereTo,$howMany,$arrivals,$leaving]);

        echo "<script> alert('Booking has been saved successfuly!'); </script>";
    }

    function getAllBooking(){
        $conn = $this->connection;

        $sql = "SELECT * FROM book";

        $statement = $conn->query($sql);
        $bookings = $statement->fetchAll();

        return $bookings;
    }

    function getBookingById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM book WHERE id='$id'";

        $statement = $conn->query($sql);
        $booking = $statement->fetch();


        return $booking;
    }

    function updateBooking($id,$user_id,$fromWhere,$whereTo,$howMany,$arrivals,$leaving){
        $conn = $this->connection;

        $sql = "UPDATE book SET fromWhere=?, whereTo=?, howMany=?, arrivals=?, leaving=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$fromWhere,$whereTo,$howMany,$arrivals,$leaving]);

        echo "<script>alert('update was successful'); </script>";
    } 

    function deleteBooking($id){
        $conn = $this->connection;

        $sql = "DELETE FROM book WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    }
}
?>