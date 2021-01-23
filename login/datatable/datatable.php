<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Track Order| Tailor Online</title>
    <link rel="icon" href="logo.jfif">
    <script type="text/javascript" src="./datatable/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="./datatable/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="./datatable/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="./datatable/datatable.js"></script>
    <link rel="stylesheet" href="./datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./datatable/css/responsive.dataTables.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <link href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css">


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/75766025af.js" crossorigin="anonymous"></script>

    <!-- local -->
    <link rel="icon" href="../images/logo.jfif">
    <link rel="stylesheet" href="../css/datatable.css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button style="outline: none; border: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" style="background:none; border:none">
        <span class="navbar-toggler-icon"></span>
    </button>

    <h4 class="inf">Welcome <font color="orange"><?php echo $_SESSION['username']; ?></label></font>
    </h4>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="nav navl d-flex justify-content-around ">
            <li class="nav-item active ">
                <a class="nav-link" href="../index.php" style="color:white"><span class="fa fa-home fa-lg"></span> Home</a>
            </li>

            <li class="nav-item active ">
                <a class="nav-link" href="datatable.php" style="color:white"><span class="fas fa-eye fa-lg"></span> Track Order</a>
            </li>

            <li class="nav-item active ">
                <a class="nav-link" href="../logout.php" style="color:white"><span class="fas fa-sign-out-alt fa-lg"></span> Logout</a>
            </li>

        </ul>
    </div>
    <!-- <a href="./entrypanel.php"><i class="fas fa-user-circle fa-2x "></i></a> -->

</nav>

<body>

    <div class="container mb-5 mt-5" style="width:97% ; height: 15rem; padding-top:2rem; margin-bottom:3rem;">




        <?php

        // $con = mysqli_connect('sql309.byethost7.com', 'b7_27359618', 'tiger914997', 'b7_27359618_tailor');
        $con = mysqli_connect('localhost', 'root', '', 'tailor');

        if (isset($_SESSION['username'])) {
            $s_user = $_SESSION['username'];

            $query3 = "select * from product where p_name='$s_user'";

            $run3 = mysqli_query($con, $query3);
            while ($row2 = mysqli_fetch_assoc($run3)) {
                $status22 = $row2['p_status'];
                $name22 = $row2['p_name'];
                $id22 = $row2['p_id'];
                $submit22 = $row2['p_sub'];
                $get22 = $row2['p_get'];
                $paid22 = $row2['p_paid'];
                $price22 = $row2['p_left'];


                if ($name22 < 0) {
                    echo ("No Records!");
                }


        ?>


                <div id="form-wrapper" style="max-width:980px;margin:auto;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">

                                <tr>
                                    <th scope="col">Status</td>
                                    <th scope="col">Customer Name</td>
                                    <th scope="col">Product Id</td>
                                    <th scope="col">Order Date</td>
                                    <th scope="col">Delievery Date</td>
                                    <th scope="col">Paid</th>
                                    <th scope="col">Balance</th>
                                </tr>

                                <tr>
                                    <td><?php echo $status22; ?></td>
                                    <td><?php echo $name22; ?></td>
                                    <td><?php echo $id22; ?></td>
                                    <td><?php echo $submit22; ?></td>
                                    <td><?php echo $get22; ?></td>
                                    <td><?php echo $paid22; ?></td>
                                    <td><?php echo $price22; ?></td>
                                </tr>
                                </br>
                                <hr>
                            </thead>
                        </table>
                    </div>
                </div>
        <?php
            }
        } ?>
        <div style="background-color: #232F3E; width: 100%; margin: auto; margin-top:3rem; padding: .5rem;">
            <center style="color: white; font-weight: 500; font-size: 13px;">PRODUCT BY : Tailor Online</center>
        </div>




        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

        <script>
            $(document).ready(function() {

                $('#miTabla').DataTable({

                });
            });
        </script>

    </div>
</body>

</html>