<?php include('../server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
    <link rel="icon" href="logo.jfif">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <form class="login-form" action="enter_email.php" method="post">
        <h2 class="form-title">Reset password</h2>
        <p style="text-align: center;">Please Enter email which you used while register on our site</p>
        <!-- form validation messages -->
        <?php include('messages.php'); ?>
        <div class="form-group">
            <label>Your email address</label>
            <input type="email" name="email">
        </div>
        <div class="form-group">
            <button type="submit" name="reset-password" class="login-btn">Submit</button>
        </div>
    </form>
</body>

</html>