<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Tailor Online</title>
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

<a name="top"></a>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button style="outline: none; border: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" style="background:none; border:none">
        <span class="navbar-toggler-icon"></span>
    </button>


    <a class="navbar-brand " style="padding-left: 4rem; " href="index.php"> <img class="logo " src="./images/logo.jfif " alt="logo " srcset=" ">
    </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="nav navl d-flex justify-content-around ">
            <li class="nav-item active ">
                <a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="collection.php"><span class="fas fa-compact-disc fa-lg"></span>
                    Collection</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link about" href="fabric.php"><span class="fas fa-money-check-alt fa-lg"></span>
                    Pricing</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="contact.php"><span class="fas fa-comments fg-lg"></span> Contact Us</a>
            </li>
            <li style="padding-top: .3rem;">
                <div style="background-color: #b18b22; border-radius: 4px;">
                    <form class="form-inline ">
                        <input class="form-control form-control-sm mr-3 w-75" type="text" id="filterInput" onkeyup="myFunction()" placeholder="By gender,price,brand" aria-label="Search" style="border-radius: 2px;">
                        <i class="fas fa-search fa-1.9x" aria-hidden="true"></i>
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <div class="dropdown">

        <button class="fas fa-user-circle fa-2x btn " style="outline: none; border: none;" type="button" data-toggle="dropdown"></button>
        <ul class="dropdown-menu" style=" background-color:cadetblue; text-align:inherit; right: 0; left:auto;  overflow-y: auto;">

            <div>

                <!-- <a href="http://43.225.99.58/Moodle/my/" class="dropdown-item menu-action" role="menuitem" data-title="Home,admin" aria-labelledby="actionmenuaction-1">
                    <i style="color: black;" class="icon fa fa-tachometer fa-fw " aria-hidden="true"></i>
                    <span style="color: black;" class="menu-action-text" id="actionmenuaction-1">Dashboard</span>
                </a> -->
                <center>
                    <p>Login As</p>
                </center>


                <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                <a href="./tailor/login.php" class="dropdown-item menu-action" role="menuitem" data-title="Admin,profile" aria-labelledby="actionmenuaction-2">
                    <i style="color: black;" class="icon fa fa-user fa-fw " aria-hidden="true"></i>
                    <span style="color: black;" class="menu-action-text" id="actionmenuaction-2">Admin</span>
                </a>
                <a href="./login/login.php" class="dropdown-item menu-action" role="menuitem" data-title="User,profile" aria-labelledby="actionmenuaction-2">
                    <i style="color: black;" class="icon fa fa-user fa-fw " aria-hidden="true"></i>
                    <span style="color: black;" class="menu-action-text" id="actionmenuaction-2">User</span>
                </a>


                <!-- <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                <a href="./login/logout.php" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6">
                    <i style="color: black;" class="icon fa fa-sign-out fa-fw " aria-hidden="true"></i>
                    <span style="color: black;" class="menu-action-text" id="actionmenuaction-6">Log out</span>
                </a> -->
            </div>
        </ul>

    </div>



</nav>


<body>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-46ffeeea-8536-42bc-8a74-2cdd36c46323"></div>


    <div class="jumbotron Home" style="background-image: linear-gradient(
        rgba(110, 110, 110, 0.383), rgba(0, 0, 0, 0.945)), url(./images/tail.jpg);">
        <h1 class="display-4" style="padding-top: 2.5rem; font-weight: 500;"><i>Tailor online!</i></h1>
        <p class="lead">Get your fabric select your colour and get them stitched right on time.</p>
        <br>
        <p><i>So what are you waiting for? Go and:</i></p>
        <p class="lead">
            <a class="btn btn-danger btn-lg" href="login/register.php" role="button"><i>Sign Up Now !</i></a>
        </p>
    </div>



    <!------------------------carousel-------------------------------------------------------------->
    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="images/style.jpg" alt="image">
                            <div class="carousel-caption">
                                <h2><i>Style</i></h2>
                                <p><i> We focus on style. Our product met on all the requirement of modern erra.</i></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/Quality.jpg" alt="image">
                            <div class="carousel-caption">
                                <h2><i>Quality</i></h2>
                                <p> <i> On "Tailor Online" quality is our core value. We ensure that all our product met
                                        on high "Stitching" and "Stuff" quality standards.</i></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/timing.jpg" alt="image">
                            <div class="carousel-caption">
                                <h2><i>On Time</i></h2>
                                <p><i> On "Tailor Online" we break traditional tailor attitude. We are commited on time
                                        and ensure all our deliveries on time to our customers because "Customer
                                        Satisfaction" is our priority.</i></p>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a href="#mycarousel" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#mycarousel" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    <div class="btn-group" id="carouselButton">
                        <button class="btn btn-danger btn-sm" id="carouselButton">
                            <span id="carousel-button-icon" class="fa fa-pause"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------PROJECT INTRODUCTION----------------------->
        <div class="row row-content align-items-left">
            <div class="col col-sm order-sm-first col-md">
                <div class="media">

                    <div class="media-body">
                        <h2 class="mt-0">Project Introduction:</h2>
                        <h4>How it works?</h4>
                        <p style="text-align: justify;"><i> "Tailor online" is project that break typical tailor
                                attitude and time clashes. At tailor online our first priority is our customer
                                satisfaction. We all know in this modern erra no one have much time and our team realize
                                that so we make this project and take tailor at your door step. Now you can approach
                                tailor by just visit our site make account and enter your details select your design in our
                                collection or give your design what you want to stitch, Our system assign you time frame
                                and farword your details to our experienced tailors and on given time your dress will be at
                                your door step. We are currently dealing in women clothing and if you are company and wants
                                to stitch clothes in bulk form feel free to contact with us.
                                <br> "Thank You"</i></p>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------------sultan-->
        <div class="row row-content align-items-left">
            <div class="col col-sm order-sm-first col-md">
                <div class="media">

                    <div class="media-body">
                        <h2 class="mt-0">Sultan Khan</h2>
                        <h4>Executive Cheif (Tailor)</h4>
                        <p style="text-align: justify;"> <i> "On Tailor online all staff have experienced and
                                competative to work. We ensure high quality stitching and all our task completed in
                                given time."</i> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Our work -->
    <br>
    <p class="label">Featured</p>

    <div class="product-grid">
        <div class="section-c" style="display: flex; flex-wrap: wrap;">
            <div class="our_work">


                <div class="card " style="width: 16rem; height: 20.5rem;">
                    <img class="card-img-top " style="height: 61%; " src="https://source.unsplash.com/300x250" alt="Card image cap ">
                    <div class="card-body">
                        <div class="product-info-container">
                            <div class="info cinfo">
                                <div class="gender">Gender : fale</div>
                                <div class="name">Brand : Armani</div>
                                <div class="price">Price : 300.00</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card " style="width: 16rem; height: 20.5rem;">
                    <img class="card-img-top " style="height: 61%; " src="https://source.unsplash.com/300x250" alt="Card image cap ">
                    <div class="card-body">
                        <div class="product-info-container">
                            <div class="info cinfo">
                                <div class="gender">Gender : Male</div>
                                <div class="name">Brand : Brmani</div>
                                <div class="price">Price : 400.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="width: 16rem; height: 20.5rem;">
                    <img class="card-img-top " style="height: 61%; " src="https://source.unsplash.com/300x250" alt="Card image cap ">
                    <div class="card-body">
                        <div class="product-info-container">
                            <div class="info cinfo">
                                <div class="gender">Gender : Fale</div>
                                <div class="name">Brand : Crmani</div>
                                <div class="price">Price : 500.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="width: 16rem; height: 20.5rem;">
                    <img class="card-img-top " style="height: 61%; " src="https://source.unsplash.com/300x250" alt="Card image cap ">
                    <div class="card-body">
                        <div class="product-info-container">
                            <div class="info cinfo">
                                <div class="gender">Gender : Male</div>
                                <div class="name">Brand : Crmani</div>
                                <div class="price">Price : 600.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="width: 16rem; height: 20.5rem;">
                    <img class="card-img-top " style="height: 61%; " src="https://source.unsplash.com/300x250" alt="Card image cap ">
                    <div class="card-body">
                        <div class="product-info-container">
                            <div class="info cinfo">
                                <div class="gender">Gender : Fale</div>
                                <div class="name">Brand : Brmani</div>
                                <div class="price">Price : 700.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="width: 16rem; height: 20.5rem;">
                    <img class="card-img-top " style="height: 61%; " src="https://source.unsplash.com/300x250" alt="Card image cap ">
                    <div class="card-body">
                        <div class="product-info-container">
                            <div class="info cinfo">
                                <div class="gender">Gender : Fale</div>
                                <div class="name">Brand : Drmani</div>
                                <div class="price">Price : 800.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="width: 16rem; height: 20.5rem;">
                    <img class="card-img-top " style="height: 61%; " src="https://source.unsplash.com/300x250" alt="Card image cap ">
                    <div class="card-body">
                        <div class="product-info-container">
                            <div class="info cinfo">
                                <div class="gender">Gender : Male</div>
                                <div class="name">Brand : Drmani</div>
                                <div class="price">Price : 900.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="width: 16rem; height: 20.5rem;">
                    <img class="card-img-top " style="height: 61%; " src="https://source.unsplash.com/300x250" alt="Card image cap ">
                    <div class="card-body">
                        <div class="product-info-container">
                            <div class="info cinfo">
                                <div class="gender">Gender : Fale</div>
                                <div class="name">Brand : Drmani</div>
                                <div class="price">Price : 100.00</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- <script src="./js/loading.js"></script>
    <script src="./js/popinfo.js"></script> -->
    <script src="./js/network status.js"></script>
    <script src="./js/scroll.js"></script>

    <!-- //filter  -->
    <script>
        document.getElementById("filterInput").oninput = function() {
            var matcher = new RegExp(document.getElementById("filterInput").value.toUpperCase());
            for (let i = 0; i < document.getElementsByClassName("card").length; i++) {
                if (matcher.test(document.getElementsByClassName("name")[i].innerHTML.toUpperCase()) || matcher.test(document.getElementsByClassName("price")[i].innerHTML.toUpperCase()) || matcher.test(document.getElementsByClassName("gender")[i].innerHTML.toUpperCase())) {
                    document.getElementsByClassName("card")[i].style.display = "inline-block";
                } else {
                    document.getElementsByClassName("card")[i].style.display = "none";
                }
            }
        }
    </script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->



</body>

<div style="background-color: #232F3E; width: 100%; margin: auto; padding: 1rem;">
    <center style="color: white; font-weight: 500; font-size: 13px;"> <a href="#top">Back To Top</a></center>
</div>


<footer>

    <div class="row container-fluid" style="padding-top: 2rem;">
        <div class="col-lg-4 col-md-4 col-sm-6" style="padding: 1rem;">
            <label style="font-weight: 500; font-size: 18px;">General Information and Help</label><br>
            <a href="mailto:taimoor98.th@gmail.com?subject=Hi Taimoor message from tailor website." target="blank" style="font-size: 16px;">
                <i class="fas fa-at fa-1.9x"></i>&nbsp; Contact - Taimoor
            </a><br>
            <a href="mailto:awaisikram788@gmail.com?subject=Hi Awais message from tailor website." target="blank" style="font-size: 16px;">
                <i class="fas fa-at fa-1.9x"></i>&nbsp; Contact - Awais
            </a>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-6" style="padding: 1rem;">
            <label style="font-weight: 500; font-size: 18px;">Social Accounts</label><br>
            <a href=""><i class="fab fa-facebook fa-1.9x"> - Facebook</i></a><br>
            <a href=""><i class="fab fa-instagram fa-1.9x"> - Instagram</i></a><br>
        </div>

        <br><br><br>
        <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 1rem;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5029.414381286717!2d74.40751999999996!3d31.547018299999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190f8aa6801965%3A0xd4b98ebf429d2311!2sAl-Faisal%20Town%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e1!3m2!1sen!2s!4v1604678886811!5m2!1sen!2s" width="300" height="150" frameborder="0" style="border:0; border-radius: .3rem; padding: .1rem;" allowfullscreen="" aria-hidden=" false" tabindex="0"></iframe>

        </div>
    </div>

    <div style="display: flex; flex-wrap: wrap;justify-content: center;">
        <small>
            Privacy policy &nbsp; Terms and conditions &nbsp;
        </small> <small style="color: #767676;;">&copy; Copyright 2020 - Tailor online </small>
    </div>


</footer>