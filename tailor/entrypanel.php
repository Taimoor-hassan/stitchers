  <?php
    session_start();
    if (!$_SESSION['a_name']) {
        header('location:login.php?error=You_are_not_authorized.Login_first');
    }

    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/index.css">
      <title>Entry panel</title>
      <link rel="icon" href="./images/logo.jfif">

      <link rel="stylesheet" href="./css/index.css">
      <link rel="stylesheet" href="./css/load.css">
      <!-- <link rel="stylesheet" href="style./css/popinfo.css"> -->

      <!-- JS, Popper.js, and jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <!-- CSS only -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/75766025af.js" crossorigin="anonymous"></script>
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
                  <a class="nav-link" href="entrypanel.php"><span class="fa fa-home fa-lg"></span> Home</a>
              </li>

              <li class="nav-item active ">
                  <a class="nav-link" href="datatable/datatable.php"><span class="far fa-eye fa-lg"></span> View data</a>
              </li>

              <li class="nav-item active ">
                  <a class="nav-link" href="datatable/order.php" style="color:white"><span class="fas fa-cart-plus fa-lg"></span> Direct Order</a>
              </li>

              <li class="nav-item active ">
                  <a class="nav-link" href="logout.php"><span class="fas fa-sign-out-alt fa-lg"></span> Logout</a>
              </li>

          </ul>
      </div>
      <!-- <a href="./entrypanel.php"><i class="fas fa-user-circle fa-2x "></i></a> -->

  </nav>

  <body>
      <section class="form">
          <div class="container mt-4">
              <div class="form-div">
                  <div id="form-wrapper" style="max-width:500px;margin:auto; padding-top:4rem;">

                      <div class="formv">
                          <h1 class="display-5 text-center">
                              Data Entry<span class="text-warning"> FORM
                          </h1>
                          <form id="book-form" class="mt-4 mb-4" action="entrypanel.php" method="post">
                              <div class="form-group text-center">
                                  <input type="text" name="p_name" class="form-control" placeholder="Person name" required>
                                  <?php echo @$_GET['p_name']; ?>
                              </div>
                              <div class="form-group text-center">
                                  <input type="text" name="p_id" class="form-control" placeholder="Product code" required>
                                  <?php echo @$_GET['p_id']; ?>
                              </div>
                              <div class="form-group text-center">
                                  <input type="text" name="p_paid" inputmode="tel" class="form-control" placeholder="Price paid Rs/-" required>
                                  <?php echo @$_GET['p_paid']; ?>
                              </div>
                              <div class="form-group text-center">
                                  <input type="text" name="p_left" inputmode="tel" class="form-control" placeholder="Price left Rs/-" required>
                                  <?php echo @$_GET['p_left']; ?>
                              </div>
                              <div class="form-group text-center">
                                  <input type="text" name="p_quantity" inputmode="tel" class="form-control" placeholder="Quantity in no." required>
                                  <?php echo @$_GET['p_quantity']; ?>
                              </div>
                              <div class="form-group text-center">
                                  <label>Select Delivery date</label>
                                  <input type="date" name="p_get" class="form-control" placeholder="Delivery date" required>
                                  <?php echo @$_GET['p_get']; ?>
                              </div>
                              <div class="form-group text-center">
                                  <label>Ordered date</label>
                                  <!-- <input type="text" value="<?php echo date('Y-m-d'); ?>"/> -->
                                  <input type="text" name="p_sub" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                                  <?php echo @$_GET['p_sub']; ?>
                              </div>
                              <div class="form-group text-center">
                                  <label>Order status</label>
                                  <input type="text" name="p_status" class="form-control" value="Not Ready" readonly>
                                  <?php echo @$_GET['p_status']; ?>
                              </div>


                              <!-- <div class="form-group text-center">

                                <select name="degree" class="mt-2">
                                    <option name="null">Select degree</option>
                                    <option value="BSCS">BSCS</option>
                                    <option value="BSSE">BSSE</option>
                                    <option value="BSIT">BSIT</option>
                                    <option value="BSDS">BSDS</option>
                                    <option value="BBA">BBA</option>
                                </select>
                                <?php echo @$_GET['degree']; ?>
                            </div> -->

                              <input type="submit" name="submit" value="Submit order" class="btn btn-warning btn-block mt-4">
                          </form>
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

    //   $con = mysqli_connect('sql309.byethost7.com', 'b7_27359618', 'tiger914997', 'b7_27359618_tailor');
    $con = mysqli_connect('localhost', 'root', '', 'tailor');


    if (isset($_POST['submit'])) {
        $p_no = '';
        $p_name = $_POST['p_name'];
        $p_id = $_POST['p_id'];
        $p_paid = $_POST['p_paid'] . ' Rs/-';
        $p_left = $_POST['p_left'] . ' Rs/-';
        $p_sub = $_POST['p_sub'];
        $p_get = $_POST['p_get'];
        $p_quantity = $_POST['p_quantity'];
        $p_status = $_POST['p_status'];

        $que = "INSERT INTO product (p_no,p_name,p_id,p_sub,p_get,p_quantity,p_paid,p_left,p_status)VALUES('$p_no','$p_name','$p_id','$p_sub','$p_get','$p_quantity','$p_paid','$p_left','$p_status')";

        //    $mysqli->query("INSERT INTO product (p_no,p_name,p_id,p_sub,p_get,p_quantity,p_paid,p_left)
        //     SELECT * FROM (SELECT '$p_no','$p_name','$p_id','$p_sub','$p_get','$p_quantity','$p_paid','$p_left') AS tmp
        //     WHERE NOT EXISTS (SELECT p_id FROM tailor WHERE p_id = '$p_id') LIMIT 1;");

        if (mysqli_query($con, $que)) {
            echo "<script>alert('Order Placed Sucessfully !')</script>";

            // To delete cache in webpage
            echo "
            <script>
            if(window.history.replaceState ) {
               window.history.replaceState( null, null, window.location.href );
             }
             </script>";
        }
    }

    ?>