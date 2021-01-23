<?php
session_start();

//order form script
$name = "";
$email = "";
$phone = "";
$date = "";
$serial = "";
$type = "";
$color = "";
$adress = "";
$size = "";
$piece = "";
$time = "";
$delievery = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'tailor');

// REGISTER USER
if (isset($_POST['order_form'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $serial = mysqli_real_escape_string($db, $_POST['serial']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $color = mysqli_real_escape_string($db, $_POST['color']);
    $adress = mysqli_real_escape_string($db, $_POST['adress']);
    $size = mysqli_real_escape_string($db, $_POST['size']);
    $piece = mysqli_real_escape_string($db, $_POST['piece']);
    $time = mysqli_real_escape_string($db, $_POST['time']);
    $delievery = mysqli_real_escape_string($db, $_POST['delievery']);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($name)) {
        array_push($errors, "Name is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($phone)) {
        array_push($errors, "Phone.no is required");
    }
    if (empty($serial)) {
        array_push($errors, "Serial is required");
    }
    if (empty($type)) {
        array_push($errors, "Type is required");
    }
    if (empty($color)) {
        array_push($errors, "Color is required");
    }
    if (empty($adress)) {
        array_push($errors, "Address is required");
    }
    if (empty($size)) {
        array_push($errors, "Size is required");
    }
    if (empty($piece)) {
        array_push($errors, "Address is required");
    }
    if (empty($delievery)) {
        array_push($errors, "Delievery method  required");
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {

        $query = "INSERT INTO form (name, email, phone, date, serial, type, color, adress, size, piece, time, delievery) 
                VALUES('$name', '$email', '$phone', '$date', '$serial', '$type', '$color', '$adress', '$size', '$piece', '$time', '$delievery')";
        if (mysqli_query($db, $query)) {
            echo "<script>alert('Order place successfully ! We will contact you shortly. Thank you')</script>";
        }
        header('location: order.php');
    }
}
