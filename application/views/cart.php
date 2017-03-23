<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Members Page</title>

    <!-- Bootstrap -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


    <![endif]-->

    <style>


        p {
            text-align: center;

            font-size: x-large;
            font-weight: 300;
        }
        #p1 {
            margin-top: -1%;
            text-align: center;
            font-size: small;
            font-weight: 300;
        }

        body {
            text-align: center;
            background-color: white;
        }

        select {
            font-size: x-large;
            height: 1.3em;
            width: 5em:
        }

        #vid1, #vid4 {
            margin-left: .1%;
            float: left;
        }

        #vid2, #vid5 {
            margin-left: .8%;
            float: left;
        }

        #vid3, #vid6 {

            float: right;
        }

        #vid4, #vid5, #vid6 {
            margin-top: .8%;

        }

        #vid6 {
            margin-bottom: 3%;
        }

        #vid5 {
            margin-bottom: 1.5%;
        }

        img {
            width: 250px;
            height: 175px;
        }



        section {
            margin-left: 0;
            margin-right: 0;
            padding-top: 2%;
            height: 9em;
            width: 100%;
            background-color: #e5ebeb;
        }




    </style>
</head>
<body>


<h1> The Wooden Nickel Members Area:</h1>
<div id="div1">


    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php

    } ?>
    Hello, <?php echo $_SESSION['username']; ?>! This is your members only page. Please feel free to view
    any of our in house movies or you can browse any of our premium titles within the members only store.
    Thank you and welcome!!

    <br><br>


</div>

<a href="http://localhost:8888/ASL-CI/index.php/auth/login">Logout</a><br>
<h2>Wooden Nickel Check Out Page<br></h2>


<!---------Categories section---------->

<div class="panel panel-default panel-list"
     style=" font-size: xx-large; float: left; width:25%; margin-left:3%; margin-top: 2%; ">
    <div class="panel-heading panel-heading-dark">
        <h3 class="panel-title">
            Categories
        </h3>
    </div>
    <!-----List Group-------->

    <ul class="list-group">
        <li class="list-group-item"><a href="#">Horror</a></li>
        <li class="list-group-item"><a href="#">Action</a></li>
        <li class="list-group-item"><a href="#">Drama</a></li>
        <li class="list-group-item"><a href="#">Comedy</a></li>
        <li class="list-group-item"><a href="#">Mystery</a></li>
    </ul>

</div>


        <!----Shopping Cart features------->
        <div class="container" style=" padding:0;">
            <div class="row" style="border: solid gray; float:left; margin-left: -45.5%; width: 35%; margin-top: -45%; height:20em; ">
                <div class="col-md-4">
                    <div class="cart-block">

                        <img src="http://localhost:8888/ASL-CI/assets/images/logo.jpg" style="margin-top: 120%; margin-left:-22%; height: 20em; width: 30em; "/>
                    </div>
                </div>
            </div>
        </div>





</body><br>



<footer>
    <p id="p1">The Wooden Nickel est.2017, All Rights Reserved</p>

</footer>

</html>




