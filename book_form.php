<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if (mysqli_query($connection, $request)) {
        // Booking successful, redirect to book.php with a success message
        header('location: book.php?success=1');
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} else {
    echo "Something went wrong. Please try again later.";
}
?>
