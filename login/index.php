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
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Entry panel</title>
    <link rel="icon" href="../images/logo.jfif">

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


    <h4 class="inf">Welcome <font color="orange"><?php echo $_SESSION['username']; ?></label></font>
    </h4>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="nav navl d-flex justify-content-around ">
            <li class="nav-item active ">
                <a class="nav-link" href="index.php" style="color:white"><span class="fa fa-home fa-lg"></span> Home</a>
            </li>

            <li class="nav-item active ">
                <a class="nav-link" href="datatable/datatable.php" style="color:white"><span class="fas fa-eye fa-lg"></span> Track Order</a>
            </li>

            <li class="nav-item active ">
                <a class="nav-link" href="logout.php" style="color:white"><span class="fas fa-sign-out-alt fa-lg"></span> Logout</a>
            </li>

        </ul>
    </div>
    <!-- <a href="./entrypanel.php"><i class="fas fa-user-circle fa-2x "></i></a> -->

</nav>

<body>
    <section class="form">
        <div class="container mt-4">
            <div class="form-div">
                <div id="form-wrapper" style="max-width:1000px;margin:auto; padding-top:4rem;">

                    <div class="formv">

                        <h1 class="display-5 text-center">
                            Data Entry<span class="text-warning"> FORM
                        </h1>
                        <form id="book-form" class="mt-4 mb-4" action="index.php" method="post" enctype="multipart/form-data">
                            <div class="row container-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h5>Login Information :</h5>
                                    <div class="form-group text-center">
                                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $_SESSION['username']; ?>" readonly>
                                        <?php echo @$_GET['username']; ?>
                                    </div>
                                    <div class="form-group text-center">
                                        <!-- <input type="text" value="<?php echo date('Y-m-d'); ?>"/> -->
                                        <input type="text" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                                        <?php echo @$_GET['date']; ?>
                                    </div>
                                    <h5>User Information :</h5>
                                    <div class="form-group text-center">
                                        <input type="text" name="c_name" class="form-control" placeholder="Customer Name" required>
                                        <?php echo @$_GET['c_name']; ?>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="text" name="age" inputmode="tel" class="form-control" placeholder="Age" required>
                                        <?php echo @$_GET['age']; ?>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                                        <?php echo @$_GET['email']; ?>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="text" name="phone" inputmode="tel" class="form-control" placeholder="Phone no" required>
                                        <?php echo @$_GET['phone']; ?>
                                    </div>
                                    <h5>Delievery Information :</h5>
                                    <div class="form-group text-center">
                                        <input type="text" name="address" class="form-control" placeholder="Delievery Address" required>
                                        <?php echo @$_GET['address']; ?>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="text" name="o_quantity" inputmode="tel" class="form-control" placeholder="Order Quantity" required>
                                        <?php echo @$_GET['o_quantity']; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h5>Dress Size :</h5>
                                    <div class="form-group text-left">
                                        <div class="inline" style="margin-left: 20px;">
                                            <input class="form-check-input" type="radio" name="size" value="extra small">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Extra Small
                                            </label>
                                            &nbsp; &nbsp; &nbsp;
                                            <input class="form-check-input" type="radio" name="size" value="small">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Small
                                            </label>
                                            &nbsp; &nbsp; &nbsp;
                                            <input class="form-check-input" type="radio" name="size" value="medium">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Medium
                                            </label>
                                            &nbsp; &nbsp; &nbsp;
                                            <input class="form-check-input" type="radio" name="size" value="large">
                                            <label class="form-check-label" for="exampleRadios3">
                                                Large
                                            </label>
                                            &nbsp; &nbsp; &nbsp;
                                            <input class="form-check-input" type="radio" name="size" value="extra large">
                                            <label class="form-check-label" for="exampleRadios4">
                                                Extra Large
                                            </label>
                                        </div>
                                        <?php echo @$_GET['size']; ?>
                                    </div>
                                    <div class="form-group text-left">
                                        <div class="inline" style="margin-left: 20px;">
                                            <input class="form-check-input" type="radio" name="size">
                                            <label class="form-check-label" for="exampleRadios4">
                                                <textarea class="input-field" name="custom" placeholder="Custom Design" style="width: 180%;"></textarea>
                                            </label>
                                        </div>
                                        <?php echo @$_GET['custom']; ?>
                                    </div>
                                    <h5>Dress Design :</h5>
                                    <div class="form-group text-left">
                                        <label><b>(If you select our desgin)</b></label>
                                        <input type="text" name="o_design" inputmode="tel" class="form-control" placeholder="Artical no">
                                        <?php echo @$_GET['o_design']; ?>
                                    </div>
                                    <div class="form-group text-left">
                                        <label><b>(If you have your own desgin)</b></label>
                                        <div class="file-upload-wrapper">
                                            <input type="file" id="input-file-max-fs" name="y_design" class="file-upload" data-max-file-size="2M" />
                                            <?php echo @$_GET['y_design']; ?>
                                        </div>
                                    </div>
                                    <br>
                                    <h5>Fabric :</h5>
                                    <div class="form-group text-left">
                                        <div class="inline">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="fabric" value="Yours" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Yours
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="fabric" value="Our" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Our
                                                </label>
                                            </div>
                                        </div>
                                        <?php echo @$_GET['fabric']; ?>
                                    </div>
                                </div>
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


    // uploading img start

$target_dir = "../tailor/datatable/custom images/";
$target_file = $target_dir . basename($_FILES["y_design"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$filename = $_FILES["y_design"]["name"];


// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["y_design"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
// if ($_FILES["y_design"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["y_design"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["y_design"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// uploading img end

    $id = '';
    $username = $_POST['username'];
    $date = $_POST['date'];
    $c_name = $_POST['c_name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $o_quantity = $_POST['o_quantity'];
    $size = $_POST['size'];
    $custom = $_POST['custom'];
    $o_design = $_POST['o_design'];
    $y_design = $filename;
    $fabric = $_POST['fabric'];

    $que = "INSERT INTO uform (id,username,date,c_name,age,email,phone,address,o_quantity,size,custom,o_design,y_design,fabric)VALUES('$id','$username','$date','$c_name','$age','$email','$phone','$address','$o_quantity','$size','$custom','$o_design','$y_design','$fabric')";


    //    $mysqli->query("INSERT INTO product (p_no,p_name,p_id,p_sub,p_get,p_quantity,p_paid,p_left)
    //     SELECT * FROM (SELECT '$p_no','$p_name','$p_id','$p_sub','$p_get','$p_quantity','$p_paid','$p_left') AS tmp
    //     WHERE NOT EXISTS (SELECT p_id FROM tailor WHERE p_id = '$p_id') LIMIT 1;");

    if (mysqli_query($con, $que)) {
        echo "<script>alert('Order Placed Sucessfully ! You will able to track your order and see price after 15 min')</script>";

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