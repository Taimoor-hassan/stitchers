<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin| Tailor Online</title>
    <link rel="icon" href="../images/logo.jfif">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

    <section class="form">
        <div class="container mt-5">
            <div class="form-div">
                <div id="form-wrapper" style="max-width:450px;margin:auto;">
                    <div class="formv">
                        <h2 class="display-5 text-center">
                            Admin <span class="text-warning"> login
                        </h2>
                        <form id="book-form" class="mt-5 mb-5" action="login.php" method="post">
                            <div class="form-group text-center">
                                <label>USERNAME</label>
                                <input type="text" name="a_name" class="form-control" placeholder="Enter username">
                            </div>
                            <div class="form-group text-center">
                                <label>PASSWORD</label>
                                <input type="password" name="pass" class="form-control" placeholder="Enter password">
                            </div>
                            <input type="submit" name="submit" value="Login" class="btn btn-warning btn-block mt-5">
                        </form>
                        <a href="../index.php"><button class="btn btn-warning btn-block mt-5">BACK to home</button></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<div style="background-color: #232F3E; width: 100%; margin: auto; margin-top:3rem; padding: .5rem;">
    <center style="color: white; font-weight: 500; font-size: 13px;">PRODUCT BY : Tailor Online</center>
</div>

<?php

// $con = mysqli_connect('sql309.byethost7.com', 'b7_27359618', 'tiger914997', 'b7_27359618_tailor');
$con = mysqli_connect('localhost', 'root', '', 'tailor');


if (isset($_POST['submit'])) {
    $admin_name = $_SESSION['a_name'] = $_POST['a_name'];
    $admin_pass = $_POST['pass'];
    $query = "select * from login where l_user='$admin_name' AND l_pass='$admin_pass'";

    $run = mysqli_query($con, $query);
    if (mysqli_num_rows($run) > 0) {
        echo "<script>window.open('entrypanel.php?logged=Login succesfull..!', '_self')</script>";
    } else {
        echo "<script>alert('Incorrect username or password')</script>";
    }
}

?>