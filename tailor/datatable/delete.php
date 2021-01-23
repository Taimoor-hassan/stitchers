<?php

// $con = mysqli_connect('sql309.byethost7.com', 'b7_27359618', 'tiger914997', 'b7_27359618_tailor');
$con = mysqli_connect('localhost', 'root', '', 'tailor');

$delete = $_GET['id'];

$query = "delete from product where p_id='$delete'";

if (mysqli_query($con, $query)) {
    // echo "<script>alert('Product $delete Deleted Sucessfully !')</script>";
    header('location:datatable.php');
}
