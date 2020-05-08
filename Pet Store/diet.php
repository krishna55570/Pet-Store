<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BARKING MANGALORE</title>
    <link rel="icon" href="title.png" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            font: 400 15px 'NOW', serif;
            line-height: 1.8;
            color: white;
            background-color: black;

        }

        .row {
            margin-right: 0;
            margin-left: 0;
        }

        .navbar {
            margin-bottom: 0;
            background-color: black;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: 'NOW', serif;
        }

        .navbar li a,
        .navbar .navbar-brand {
            color: orange !important;
        }

        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: black !important;
            background-color: orange !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: orange !important;
        }


        .responsive {
            width: 100%;
            height: auto;
        }

        .card {
            transition: 0.3s;
            width: 75%;
            margin-left: 15%;
            background-color: black;
        }


        .card2 {

            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title2 {
            color: grey;
            font-size: 18px;
        }

        .button2 {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .a2 {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }
        .btn{
            background-color: black;
            color: orange;
            padding: 15px 10px;
        }
        .dropdown-menu
        {
            background-color: black;
            color: orange;
        }
        .dropdown-menu{
            padding: 16px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top  ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="home.html">Home</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="ngo.php">NGO's</a></li>
                    <li><a href="lost.php">Lost Pets</a></li>
                    <li><a href="sell.php">SELL</a></li>

                    <li><a href="event.php">Events</a></li>
                    <li><a href="about.html">About Pets</a></li>
                    <li><a href="kennel.php">Kennel Club</a></li>
                    <li><a href="doc.php">Veterenary</a></li>
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              User
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="logout.php">Logout</a>
                              <br>
                              
                              <a class="dropdown-item" href="cart.php">Cart</a>
                            </div>
                          </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>

    <div style="background:url(images/banner_3.jpg);">
        <br>
        <h2 style="text-align: center; color: whitesmoke; font-family: 'Lobster Two', cursive;"> <b> BARKING MANGALORE </b>
        </h2>
        <br>
        <div style="text-align: center;">
            <img src="images/logo.jpeg" alt="logo" width="250px" height="250px" style="border-radius: 50%; box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
        </div>
        <br>
        <br>

    </div>

    <br>
    <div class="row" style="background-color: black;">
        <br>
        
        <br>
        <div style="text-align: center;">
            <img src="images/dog-breed-new.jpg" alt="dog" class="responsive" width="600px" height="400px">
        </div>
        <br>
        <br>

        <br>




        <?php
        require_once('config.php');
        $sql = "SELECT * FROM diet";
        $result_set = mysqli_query($con, $sql);
        while (($row = mysqli_fetch_assoc($result_set))) {
        ?>
            <div class="col-sm-4" style="text-align: center;">
                <div class="card2">
                    <img src="uploads/<?php echo $row['img'] ?> " width="100">
                    <p><?php echo $row['para'] ?></p>
                    <p><a href="<?php echo $row['link'] ?>">Link</a></p>


                </div>
            </div>

        <?php

        }
        ?>


    </div>






    <div style="text-align: center; background-color: crimson;">
        <br>

        <p><b> All Rights Reserved ©</b> BARKING MANGALORE 2020 </p>

        <br>

    </div>

</body>

</html>