<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Order | Tailor Online</title>
    <link rel="icon" href="logo.jfif">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        body,
        input,
        select {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #eee;
        }

        h1,
        h3 {
            font-weight: 400;
        }

        h1 {
            font-size: 32px;
        }

        h3 {
            color: #1c87c9;
        }

        .main-block,
        .info {
            display: flex;
            flex-direction: column;
        }

        .main-block {
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100%;
            background: url(back.jpg) no-repeat center;
            background-size: cover;
        }

        form {
            width: 80%;
            padding: 25px;
            margin-bottom: 20px;
            background: rgba(0, 0, 0, 0.9);
        }

        input,
        select {
            padding: 5px;
            margin-bottom: 20px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #eee;
        }

        input::placeholder {
            color: #eee;
        }

        option {
            background: black;
            border: none;
        }

        .metod {
            display: flex;
        }

        input[type=radio] {
            display: none;
        }

        label.radio {
            position: relative;
            display: inline-block;
            margin-right: 20px;
            text-indent: 32px;
            cursor: pointer;
        }

        label.radio:before {
            content: "";
            position: absolute;
            top: -1px;
            left: 0;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            border: 2px solid #1c87c9;
        }

        label.radio:after {
            content: "";
            position: absolute;
            width: 8px;
            height: 4px;
            top: 5px;
            left: 5px;
            border-bottom: 3px solid #1c87c9;
            border-left: 3px solid #1c87c9;
            transform: rotate(-45deg);
            opacity: 0;
        }

        input[type=radio]:checked+label:after {
            opacity: 1;
        }

        button {
            display: block;
            width: 200px;
            padding: 10px;
            margin: 20px auto 0;
            border: none;
            border-radius: 5px;
            background: #1c87c9;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
        }

        button:hover {
            background: #095484;
        }

        .error {
            width: 92%;
            margin: 0px auto;
            padding: 10px;
            border: 1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align: left;
        }

        .success {
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            margin-bottom: 20px;
        }

        @media (min-width: 568px) {
            .info {
                flex-flow: row wrap;
                justify-content: space-between;
            }

            input {
                width: 46%;
            }

            input.fname {
                width: 100%;
            }

            select {
                width: 48%;
            }
        }
    </style>
</head>

<body>
    <div class="main-block">
        <h1>Order Form</h1>
        <form method="post" action="order.php">
            <?php include('errors.php'); ?>
            <div class="info">
                <input class="fname" type="text" name="name" placeholder="Full name" value="<?php echo $name; ?>">
                <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
                <input type="text" name="phone" placeholder="Phone number" value="<?php echo $phone; ?>">
                <input type="text" name="date" placeholder="Today's date(yyyy-mm-dd)" value="<?php echo $date; ?>">
                <input type="text" name="serial" placeholder="Order seriel no" value="<?php echo $serial; ?>">
                <input type="text" name="type" placeholder="Type of dress" value="<?php echo $type; ?>">
                <input type="text" name="color" placeholder="Color of dress" value="<?php echo $color; ?>">
                <input type="text" name="adress" placeholder="Your address" value="<?php echo $adress; ?>">
                <input type="text" name="size" placeholder="Size (e.g S/STD/M/L/XL)" value="<?php echo $size; ?>">
                <input type="text" name="piece" placeholder="No of piece" value="<?php echo $piece; ?>">
                <input type="text" name="time" placeholder="Time (In case you select pick up)" value="<?php echo $time; ?>">
                <input type="text" name="delievery" placeholder="Pick up/delievery" value="<?php echo $delievery; ?>">

            </div>
            <a href="credit.html">
                <button type="submit" onsubmit="<?php header('location: order.php'); ?>" class="button" name="order_form">Submit</button>
            </a>
        </form>
    </div>
</body>

</html>