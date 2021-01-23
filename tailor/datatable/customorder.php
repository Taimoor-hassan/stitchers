<?php
session_start();
if (!$_SESSION['a_name']) {
    header('location:../login.php?error=You_are_not_authorized.Login_first');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CUSTOMER RECORDS On date:<?php echo date('d-m-Y'); ?> (Tailor Online)</title>

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

    <h4 class="inf">Welcome <font color="orange"><?php echo $_SESSION['a_name']; ?></label></font>
    </h4>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="nav navl d-flex justify-content-around ">
            <li class="nav-item active ">
                <a class="nav-link" href="../entrypanel.php" style="color:white"><span class="fa fa-home fa-lg"></span> Home</a>
            </li>

            <li class="nav-item active ">
                <a class="nav-link" href="datatable.php" style="color:white"><span class="fas fa-eye fa-lg"></span> View Data</a>
            </li>


            <li class="nav-item active ">
                <a class="nav-link" href="order.php" style="color:white"><span class="fas fa-cart-plus fa-lg"></span> Direct Order</a>
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

        <table id="miTabla" class="display responsive nowrap" style="width:100%">
            <thead>
            <tr>
                    <th>Customer Name</th>
                    <th>Date</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Ph.</th>
                    <th>Address</th>
                    <th>Quantity</th>
                    <th>Size</th>
                    <th>Custom</th>
                    <th>Artical no</th>
                    <th>Custom Image</th>
                    <th>Fabric</th>

                </tr>
            </thead>

            <tbody>

                <?php

                $con = mysqli_connect('localhost', 'root', '', 'tailor');
                // $con = mysqli_connect('sql309.byethost7.com', 'b7_27359618', 'tiger914997', 'b7_27359618_tailor');

                if ($con->connect_error) {
                    die("Connection failed:" . $con->connect_error);
                }
                $sql = "SELECT * from uform";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $imgl=$row['y_design'];
                        echo "<tr>
                        <td>" . $row["username"] . "</td>
                        <td>" . $row["date"] . "</td>
                        <td>" . $row["age"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["phone"] . "</td>
                        <td>" . $row["address"] . "</td>
                        <td>" . $row["o_quantity"] . "</td>
                        <td>" . $row["size"] . "</td>
                        <td>" . $row["custom"] . "</td>
                        <td>" . $row["o_design"] . "</td>
                        <td>" . '<img src="custom images/'.$imgl.'" style="width:128px;height:128px">' . "</td>
                        <td>" . $row["fabric"] . "</td>
                     </tr>";
                    }
                    // echo"</table>";
                }

                $con->close();
                ?>

            </tbody>

            <!-- <td>".' <img src="echo($imgl)">' . "</td> -->

        </table>

        



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
                    dom: 'lBfrtip',
                    buttons: [
                        'copy', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>

    </div>
</body>
<hr>
<br>

</html>